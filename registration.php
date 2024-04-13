<?php
ob_start();
session_start();
include ("admin/inc/config.php");
include ("admin/inc/functions.php");
include ("admin/inc/CSRF_Protect.php");
$csrf = new CSRF_Protect();
$error_message = '';
$success_message = '';
$error_message1 = '';
$success_message1 = '';

// Getting all language variables into array as global variable
$i = 1;
$statement = $pdo->prepare("SELECT * FROM tbl_language");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row) {
    define('LANG_VALUE_' . $i, $row['lang_value']);
    $i++;
}

$statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row) {
    $logo = $row['logo'];
    $favicon = $row['favicon'];
    $contact_email = $row['contact_email'];
    $contact_phone = $row['contact_phone'];
    $meta_title_home = $row['meta_title_home'];
    $meta_keyword_home = $row['meta_keyword_home'];
    $meta_description_home = $row['meta_description_home'];
    $before_head = $row['before_head'];
    $after_body = $row['after_body'];
}

// Checking the order table and removing the pending transaction that are 24 hours+ old. Very important
$current_date_time = date('Y-m-d H:i:s');
$statement = $pdo->prepare("SELECT * FROM tbl_payment WHERE payment_status=?");
$statement->execute(array('Pending'));
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row) {
    $ts1 = strtotime($row['payment_date']);
    $ts2 = strtotime($current_date_time);
    $diff = $ts2 - $ts1;
    $time = $diff / (3600);
    if ($time > 24) {

        // Return back the stock amount
        $statement1 = $pdo->prepare("SELECT * FROM tbl_order WHERE payment_id=?");
        $statement1->execute(array($row['payment_id']));
        $result1 = $statement1->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result1 as $row1) {
            $statement2 = $pdo->prepare("SELECT * FROM tbl_product WHERE p_id=?");
            $statement2->execute(array($row1['product_id']));
            $result2 = $statement2->fetchAll(PDO::FETCH_ASSOC);
            foreach ($result2 as $row2) {
                $p_qty = $row2['p_qty'];
            }
            $final = $p_qty + $row1['quantity'];

            $statement = $pdo->prepare("UPDATE tbl_product SET p_qty=? WHERE p_id=?");
            $statement->execute(array($final, $row1['product_id']));
        }

        // Deleting data from table
        $statement1 = $pdo->prepare("DELETE FROM tbl_order WHERE payment_id=?");
        $statement1->execute(array($row['payment_id']));

        $statement1 = $pdo->prepare("DELETE FROM tbl_payment WHERE id=?");
        $statement1->execute(array($row['id']));
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/uploads/<?php echo $favicon; ?>">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/jquery.bxslider.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/rating.css">
    <link rel="stylesheet" href="assets/css/spacing.css">
    <link rel="stylesheet" href="assets/css/bootstrap-touch-slider.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/tree-menu.css">
    <link rel="stylesheet" href="assets/css/select2.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/output.css">


    <?php

    $statement = $pdo->prepare("SELECT * FROM tbl_page WHERE id=1");
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    foreach ($result as $row) {
        $about_meta_title = $row['about_meta_title'];
        $about_meta_keyword = $row['about_meta_keyword'];
        $about_meta_description = $row['about_meta_description'];
        $faq_meta_title = $row['faq_meta_title'];
        $faq_meta_keyword = $row['faq_meta_keyword'];
        $faq_meta_description = $row['faq_meta_description'];
        $blog_meta_title = $row['blog_meta_title'];
        $blog_meta_keyword = $row['blog_meta_keyword'];
        $blog_meta_description = $row['blog_meta_description'];
        $contact_meta_title = $row['contact_meta_title'];
        $contact_meta_keyword = $row['contact_meta_keyword'];
        $contact_meta_description = $row['contact_meta_description'];
        $pgallery_meta_title = $row['pgallery_meta_title'];
        $pgallery_meta_keyword = $row['pgallery_meta_keyword'];
        $pgallery_meta_description = $row['pgallery_meta_description'];
        $vgallery_meta_title = $row['vgallery_meta_title'];
        $vgallery_meta_keyword = $row['vgallery_meta_keyword'];
        $vgallery_meta_description = $row['vgallery_meta_description'];
    }

    $cur_page = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);

    if ($cur_page == 'index.php' || $cur_page == 'login.php' || $cur_page == 'registration.php' || $cur_page == 'cart.php' || $cur_page == 'checkout.php' || $cur_page == 'forget-password.php' || $cur_page == 'reset-password.php' || $cur_page == 'product-category.php' || $cur_page == 'product.php') {
        ?>
        <title>
            <?php echo $meta_title_home; ?>
        </title>
        <meta name="keywords" content="<?php echo $meta_keyword_home; ?>">
        <meta name="description" content="<?php echo $meta_description_home; ?>">
        <?php
    }

    if ($cur_page == 'about.php') {
        ?>
        <title>
            <?php echo $about_meta_title; ?>
        </title>
        <meta name="keywords" content="<?php echo $about_meta_keyword; ?>">
        <meta name="description" content="<?php echo $about_meta_description; ?>">
        <?php
    }
    if ($cur_page == 'faq.php') {
        ?>
        <title>
            <?php echo $faq_meta_title; ?>
        </title>
        <meta name="keywords" content="<?php echo $faq_meta_keyword; ?>">
        <meta name="description" content="<?php echo $faq_meta_description; ?>">
        <?php
    }
    if ($cur_page == 'contact.php') {
        ?>
        <title>
            <?php echo $contact_meta_title; ?>
        </title>
        <meta name="keywords" content="<?php echo $contact_meta_keyword; ?>">
        <meta name="description" content="<?php echo $contact_meta_description; ?>">
        <?php
    }
    if ($cur_page == 'product.php') {
        $statement = $pdo->prepare("SELECT * FROM tbl_product WHERE p_id=?");
        $statement->execute(array($_REQUEST['id']));
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $row) {
            $og_photo = $row['p_featured_photo'];
            $og_title = $row['p_name'];
            $og_slug = 'product.php?id=' . $_REQUEST['id'];
            $og_description = substr(strip_tags($row['p_description']), 0, 200) . '...';
        }
    }

    if ($cur_page == 'dashboard.php') {
        ?>
        <title>Dashboard -
            <?php echo $meta_title_home; ?>
        </title>
        <meta name="keywords" content="<?php echo $meta_keyword_home; ?>">
        <meta name="description" content="<?php echo $meta_description_home; ?>">
        <?php
    }
    if ($cur_page == 'customer-profile-update.php') {
        ?>
        <title>Update Profile -
            <?php echo $meta_title_home; ?>
        </title>
        <meta name="keywords" content="<?php echo $meta_keyword_home; ?>">
        <meta name="description" content="<?php echo $meta_description_home; ?>">
        <?php
    }
    if ($cur_page == 'customer-billing-shipping-update.php') {
        ?>
        <title>Update Billing and Shipping Info -
            <?php echo $meta_title_home; ?>
        </title>
        <meta name="keywords" content="<?php echo $meta_keyword_home; ?>">
        <meta name="description" content="<?php echo $meta_description_home; ?>">
        <?php
    }
    if ($cur_page == 'customer-password-update.php') {
        ?>
        <title>Update Password -
            <?php echo $meta_title_home; ?>
        </title>
        <meta name="keywords" content="<?php echo $meta_keyword_home; ?>">
        <meta name="description" content="<?php echo $meta_description_home; ?>">
        <?php
    }
    if ($cur_page == 'customer-order.php') {
        ?>
        <title>Orders -
            <?php echo $meta_title_home; ?>
        </title>
        <meta name="keywords" content="<?php echo $meta_keyword_home; ?>">
        <meta name="description" content="<?php echo $meta_description_home; ?>">
        <?php
    }
    ?>

    <?php if ($cur_page == 'blog-single.php'): ?>
        <meta property="og:title" content="<?php echo $og_title; ?>">
        <meta property="og:type" content="website">
        <meta property="og:url" content="<?php echo BASE_URL . $og_slug; ?>">
        <meta property="og:description" content="<?php echo $og_description; ?>">
        <meta property="og:image" content="assets/uploads/<?php echo $og_photo; ?>">
    <?php endif; ?>

    <?php if ($cur_page == 'product.php'): ?>
        <meta property="og:title" content="<?php echo $og_title; ?>">
        <meta property="og:type" content="website">
        <meta property="og:url" content="<?php echo BASE_URL . $og_slug; ?>">
        <meta property="og:description" content="<?php echo $og_description; ?>">
        <meta property="og:image" content="assets/uploads/<?php echo $og_photo; ?>">
    <?php endif; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

    <script type="text/javascript"
        src="//platform-api.sharethis.com/js/sharethis.js#property=5993ef01e2587a001253a261&product=inline-share-buttons"></script>

    <?php echo $before_head; ?>

</head>


<?php
$statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row) {
    $banner_registration = $row['banner_registration'];
}
?>

<?php
if (isset($_POST['form1'])) {

    $valid = 1;

    if (empty($_POST['cust_name'])) {
        $valid = 0;
        $error_message .= LANG_VALUE_123 . "<br>";
    }

    if (empty($_POST['cust_email'])) {
        $valid = 0;
        $error_message .= LANG_VALUE_131 . "<br>";
    } else {
        if (filter_var($_POST['cust_email'], FILTER_VALIDATE_EMAIL) === false) {
            $valid = 0;
            $error_message .= LANG_VALUE_134 . "<br>";
        } else {
            $statement = $pdo->prepare("SELECT * FROM tbl_customer WHERE cust_email=?");
            $statement->execute(array($_POST['cust_email']));
            $total = $statement->rowCount();
            if ($total) {
                $valid = 0;
                $error_message .= LANG_VALUE_147 . "<br>";
            }
        }
    }

    if (empty($_POST['cust_phone'])) {
        $valid = 0;
        $error_message .= LANG_VALUE_124 . "<br>";
    }

    if (empty($_POST['cust_address'])) {
        $valid = 0;
        $error_message .= LANG_VALUE_125 . "<br>";
    }

    if (empty($_POST['cust_country'])) {
        $valid = 0;
        $error_message .= LANG_VALUE_126 . "<br>";
    }

    if (empty($_POST['cust_city'])) {
        $valid = 0;
        $error_message .= LANG_VALUE_127 . "<br>";
    }

    if (empty($_POST['cust_state'])) {
        $valid = 0;
        $error_message .= LANG_VALUE_128 . "<br>";
    }

    if (empty($_POST['cust_zip'])) {
        $valid = 0;
        $error_message .= LANG_VALUE_129 . "<br>";
    }

    if (empty($_POST['cust_password']) || empty($_POST['cust_re_password'])) {
        $valid = 0;
        $error_message .= LANG_VALUE_138 . "<br>";
    }

    if (!empty($_POST['cust_password']) && !empty($_POST['cust_re_password'])) {
        if ($_POST['cust_password'] != $_POST['cust_re_password']) {
            $valid = 0;
            $error_message .= LANG_VALUE_139 . "<br>";
        }
    }

    if ($valid == 1) {

        $token = md5(time());
        $cust_datetime = date('Y-m-d h:i:s');
        $cust_timestamp = time();

        // saving into the database
        $statement = $pdo->prepare("INSERT INTO tbl_customer (
                                        cust_name,
                                        cust_cname,
                                        cust_email,
                                        cust_phone,
                                        cust_country,
                                        cust_address,
                                        cust_city,
                                        cust_state,
                                        cust_zip,
                                        cust_b_name,
                                        cust_b_cname,
                                        cust_b_phone,
                                        cust_b_country,
                                        cust_b_address,
                                        cust_b_city,
                                        cust_b_state,
                                        cust_b_zip,
                                        cust_s_name,
                                        cust_s_cname,
                                        cust_s_phone,
                                        cust_s_country,
                                        cust_s_address,
                                        cust_s_city,
                                        cust_s_state,
                                        cust_s_zip,
                                        cust_password,
                                        cust_token,
                                        cust_datetime,
                                        cust_timestamp,
                                        cust_status
                                    ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $statement->execute(
            array(
                strip_tags($_POST['cust_name']),
                strip_tags($_POST['cust_cname']),
                strip_tags($_POST['cust_email']),
                strip_tags($_POST['cust_phone']),
                strip_tags($_POST['cust_country']),
                strip_tags($_POST['cust_address']),
                strip_tags($_POST['cust_city']),
                strip_tags($_POST['cust_state']),
                strip_tags($_POST['cust_zip']),
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                md5($_POST['cust_password']),
                $token,
                $cust_datetime,
                $cust_timestamp,
                1
            )
        );

        // Send email for confirmation of the account
        $to = $_POST['cust_email'];

        $subject = LANG_VALUE_150;
        $verify_link = BASE_URL . 'verify.php?email=' . $to . '&token=' . $token;
        $message = '
' . LANG_VALUE_151 . '<br><br>

<a href="' . $verify_link . '">' . $verify_link . '</a>';

        $headers = "From: noreply@" . BASE_URL . "\r\n" .
            "Reply-To: noreply@" . BASE_URL . "\r\n" .
            "X-Mailer: PHP/" . phpversion() . "\r\n" .
            "MIME-Version: 1.0\r\n" .
            "Content-Type: text/html; charset=ISO-8859-1\r\n";

        // Sending Email
        // mail($to, $subject, $message, $headers);

        // unset($_POST['cust_name']);
        // unset($_POST['cust_cname']);
        // unset($_POST['cust_email']);
        // unset($_POST['cust_phone']);
        // unset($_POST['cust_address']);
        // unset($_POST['cust_city']);
        // unset($_POST['cust_state']);
        // unset($_POST['cust_zip']);

        $success_message = LANG_VALUE_152;
    }
}
?>


<div
    class="tw-w-full tw-relative tw-bg-darkslategray-400 tw-overflow-hidden tw-flex tw-flex-row tw-items-start tw-justify-center tw-pt-[250px] tw-pb-[199px] tw-box-border tw-gap-[65px] tw-tracking-[normal] tw-text-left tw-text-77xl tw-text-yellowgreen tw-font-orienta tw-mq1250:flex-wrap tw-mq1250:pl-[50px] tw-mq1250:pr-[50px] tw-mq1250:box-border tw-mq750:gap-[65px_32px] tw-mq750:pl-[25px] tw-mq750:pr-[25px] tw-mq750:box-border tw-mq450:gap-[65px_16px]">
    <div
        class="tw-w-[674px] tw-flex tw-flex-col tw-items-start tw-justify-start tw-pt-[153px] tw-px-0 tw-pb-0 tw-box-border tw-min-w-[674px] tw-max-w-full tw-mq1250:flex-1 tw-mq1050:min-w-full">
        <h1
            class="tw-m-0 tw-self-stretch tw-h-[111px] tw-relative tw-font-smudger tw-text-inherit tw-font-normal tw-font-inherit tw-inline-block tw-mq750:text-29xl tw-mq450:text-5xl">
            Susham Food Product
        </h1>
    </div>
    <form
        class="tw-m-0 tw-w-[363px] tw-flex tw-flex-col tw-items-end tw-justify-start tw-gap-[32px] tw-min-w-[363px] tw-max-w-full tw-mq1250:flex-1 tw-mq750:min-w-full tw-mq450:gap-[16px_32px]"
        action="" method="post">
        <?php $csrf->echoInputField(); ?>
        <div
            class="tw-self-stretch tw-flex tw-flex-row tw-items-start tw-justify-end tw-py-0 tw-pr-[3px] tw-pl-0 tw-box-border tw-max-w-full">
            <div class="tw-flex-1 tw-flex tw-flex-col tw-items-start tw-justify-start tw-gap-[12px] tw-max-w-full">
                <h1
                    class="tw-m-0 tw-self-stretch tw-relative tw-text-11xl tw-leading-[38px] tw-font-semibold tw-font-body-2-medium tw-text-darkseagreen tw-text-center tw-mq750:text-5xl tw-mq750:leading-[30px] tw-mq450:text-lg tw-mq450:leading-[23px]">
                    Create an account
                </h1>
            </div>
        </div>
        <div
            class="tw-self-stretch tw-rounded-xl tw-flex tw-flex-col tw-items-start tw-justify-start tw-gap-[24px] tw-max-w-full">
            <div
                class="tw-self-stretch tw-flex tw-flex-col tw-items-start tw-justify-start tw-gap-[20px] tw-max-w-full">
                <div class="tw-self-stretch tw-flex tw-flex-col tw-items-start tw-justify-start tw-max-w-full">
                    <div class="tw-self-stretch tw-flex tw-flex-col tw-items-start tw-justify-start tw-max-w-full">
                        <div
                            class="tw-self-stretch tw-flex tw-flex-col tw-items-start tw-justify-start tw-gap-[6px] tw-max-w-full">
                            <div
                                class="tw-relative tw-text-sm tw-leading-[20px] tw-font-medium tw-font-body-2-medium tw-text-white tw-text-left tw-inline-block tw-min-w-[36px]">
                                Name
                            </div>
                            <input type="text" class="form-control" name="cust_name"
                                value="<?php if (isset($_POST['cust_name'])) {
                                    echo $_POST['cust_name'];
                                } ?>">
                        </div>
                    </div>
                </div>
                <div class="tw-self-stretch tw-flex tw-flex-col tw-items-start tw-justify-start tw-max-w-full">
                    <div class="tw-self-stretch tw-flex tw-flex-col tw-items-start tw-justify-start tw-max-w-full">
                        <div
                            class="tw-self-stretch tw-flex tw-flex-col tw-items-start tw-justify-start tw-gap-[6px] tw-max-w-full">
                            <div
                                class="tw-relative tw-text-sm tw-leading-[20px] tw-font-medium tw-font-body-2-medium tw-text-white tw-text-left tw-inline-block tw-min-w-[36px]">
                                Company Name
                            </div>
                            <input type="text" class="form-control" name="cust_cname"
                                        value="<?php if (isset($_POST['cust_cname'])) {
                                            echo $_POST['cust_cname'];
                                        } ?>">
                        </div>
                    </div>
                </div>
                <div class="tw-self-stretch tw-flex tw-flex-col tw-items-start tw-justify-start tw-max-w-full">
                    <div class="tw-self-stretch tw-flex tw-flex-col tw-items-start tw-justify-start tw-max-w-full">
                        <div
                            class="tw-self-stretch tw-flex tw-flex-col tw-items-start tw-justify-start tw-gap-[6px] tw-max-w-full">
                            <div
                                class="tw-relative tw-text-sm tw-leading-[20px] tw-font-medium tw-font-body-2-medium tw-text-white tw-text-left tw-inline-block tw-min-w-[36px]">
                                Email
                            </div>
                            <input type="email" class="form-control" name="cust_email"
                                        value="<?php if (isset($_POST['cust_email'])) {
                                            echo $_POST['cust_email'];
                                        } ?>">                        </div>
                    </div>
                </div>
                <div class="tw-self-stretch tw-flex tw-flex-col tw-items-start tw-justify-start tw-max-w-full">
                    <div class="tw-self-stretch tw-flex tw-flex-col tw-items-start tw-justify-start tw-max-w-full">
                        <div
                            class="tw-self-stretch tw-flex tw-flex-col tw-items-start tw-justify-start tw-gap-[6px] tw-max-w-full">
                            <div
                                class="tw-relative tw-text-sm tw-leading-[20px] tw-font-medium tw-font-body-2-medium tw-text-white tw-text-left tw-inline-block tw-min-w-[36px]">
                                Phone Number
                            </div>
                            <input type="text" class="form-control" name="cust_phone"
                                        value="<?php if (isset($_POST['cust_phone'])) {
                                            echo $_POST['cust_phone'];
                                        } ?>">                        </div>
                    </div>
                </div>
                <div class="tw-self-stretch tw-flex tw-flex-col tw-items-start tw-justify-start tw-max-w-full">
                    <div class="tw-self-stretch tw-flex tw-flex-col tw-items-start tw-justify-start tw-max-w-full">
                        <div
                            class="tw-self-stretch tw-flex tw-flex-col tw-items-start tw-justify-start tw-gap-[6px] tw-max-w-full">
                            <div
                                class="tw-relative tw-text-sm tw-leading-[20px] tw-font-medium tw-font-body-2-medium tw-text-white tw-text-left tw-inline-block tw-min-w-[36px]">
                                Address
                            </div>
                            <textarea name="cust_address" class="form-control" cols="30" rows="10"
                                        style="height:70px;"><?php if (isset($_POST['cust_address'])) {
                                            echo $_POST['cust_address'];
                                        } ?></textarea>                        </div>
                    </div>
                </div>
                <div class="tw-self-stretch tw-flex tw-flex-col tw-items-start tw-justify-start tw-max-w-full">
                    <div class="tw-self-stretch tw-flex tw-flex-col tw-items-start tw-justify-start tw-max-w-full">
                        <div
                            class="tw-self-stretch tw-flex tw-flex-col tw-items-start tw-justify-start tw-gap-[6px] tw-max-w-full">
                            <div
                                class="tw-relative tw-text-sm tw-leading-[20px] tw-font-medium tw-font-body-2-medium tw-text-white tw-text-left tw-inline-block tw-min-w-[36px]">
                                Country
                            </div>
                            <select name="cust_country" class="form-control select2">
                                        <option value="">Select Country</option>
                                        <?php
                                        $statement = $pdo->prepare("SELECT * FROM tbl_country ORDER BY country_name ASC");
                                        $statement->execute();
                                        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                                        foreach ($result as $row) {
                                            ?>
                                            <option value="<?php echo $row['country_id']; ?>">
                                                <?php echo $row['country_name']; ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>                        </div>
                    </div>
                </div>
                <div class="tw-self-stretch tw-flex tw-flex-col tw-items-start tw-justify-start tw-max-w-full">
                    <div class="tw-self-stretch tw-flex tw-flex-col tw-items-start tw-justify-start tw-max-w-full">
                        <div
                            class="tw-self-stretch tw-flex tw-flex-col tw-items-start tw-justify-start tw-gap-[6px] tw-max-w-full">
                            <div
                                class="tw-relative tw-text-sm tw-leading-[20px] tw-font-medium tw-font-body-2-medium tw-text-white tw-text-left tw-inline-block tw-min-w-[36px]">
                                City
                            </div>
                            <input type="text" class="form-control" name="cust_city"
                                        value="<?php if (isset($_POST['cust_city'])) {
                                            echo $_POST['cust_city'];
                                        } ?>">                        </div>
                    </div>
                </div>
                <div class="tw-self-stretch tw-flex tw-flex-col tw-items-start tw-justify-start tw-max-w-full">
                    <div class="tw-self-stretch tw-flex tw-flex-col tw-items-start tw-justify-start tw-max-w-full">
                        <div
                            class="tw-self-stretch tw-flex tw-flex-col tw-items-start tw-justify-start tw-gap-[6px] tw-max-w-full">
                            <div
                                class="tw-relative tw-text-sm tw-leading-[20px] tw-font-medium tw-font-body-2-medium tw-text-white tw-text-left tw-inline-block tw-min-w-[36px]">
                                State
                            </div>
                            <input type="text" class="form-control" name="cust_state"
                                        value="<?php if (isset($_POST['cust_state'])) {
                                            echo $_POST['cust_state'];
                                        } ?>">                        </div>
                    </div>
                </div>
                <div class="tw-self-stretch tw-flex tw-flex-col tw-items-start tw-justify-start tw-max-w-full">
                    <div class="tw-self-stretch tw-flex tw-flex-col tw-items-start tw-justify-start tw-max-w-full">
                        <div
                            class="tw-self-stretch tw-flex tw-flex-col tw-items-start tw-justify-start tw-gap-[6px] tw-max-w-full">
                            <div
                                class="tw-relative tw-text-sm tw-leading-[20px] tw-font-medium tw-font-body-2-medium tw-text-white tw-text-left tw-inline-block tw-min-w-[66px]">
                                Zip Code
                            </div>
                            <input type="text" class="form-control" name="cust_zip"
                                        value="<?php if (isset($_POST['cust_zip'])) {
                                            echo $_POST['cust_zip'];
                                        } ?>">
                        </div>
                    </div>
                </div>
                <div class="tw-self-stretch tw-flex tw-flex-col tw-items-start tw-justify-start tw-max-w-full">
                    <div class="tw-self-stretch tw-flex tw-flex-col tw-items-start tw-justify-start tw-max-w-full">
                        <div
                            class="tw-self-stretch tw-flex tw-flex-col tw-items-start tw-justify-start tw-gap-[6px] tw-max-w-full">
                            <div
                                class="tw-relative tw-text-sm tw-leading-[20px] tw-font-medium tw-font-body-2-medium tw-text-white tw-text-left tw-inline-block tw-min-w-[66px]">
                                Password
                            </div>
                            <input type="password" class="form-control" name="cust_password">
                        </div>
                    </div>
                </div>
                <div class="tw-self-stretch tw-flex tw-flex-col tw-items-start tw-justify-start tw-max-w-full">
                    <div class="tw-self-stretch tw-flex tw-flex-col tw-items-start tw-justify-start tw-max-w-full">
                        <div
                            class="tw-self-stretch tw-flex tw-flex-col tw-items-start tw-justify-start tw-gap-[6px] tw-max-w-full">
                            <div
                                class="tw-relative tw-text-sm tw-leading-[20px] tw-font-medium tw-font-body-2-medium tw-text-white tw-text-left tw-inline-block tw-min-w-[66px]">
                                Retype Password
                            </div>
                            <input type="password" class="form-control" name="cust_re_password">
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="tw-self-stretch tw-flex tw-flex-col tw-items-start tw-justify-start tw-gap-[16px] tw-max-w-full">
                <button onclick="redirectToLogin()"
                    class="tw-cursor-pointer tw-[border:none] tw-p-0 tw-bg-[transparent] tw-self-stretch tw-rounded tw-flex tw-flex-row tw-items-start tw-justify-start tw-max-w-full"
                    style="display: flex; justify-content: center; align-items: center; width: 100%;">
                    <input type="submit"
                        class="btn btn-danger tw-rounded tw-bg-gainsboro-300 tw-shadow-[0px_1px_2px_rgba(16,_24,_40,_0.05)] tw-border-[1px] tw-border-solid tw-border-darkslategray-300 tw-text-base tw-leading-[24px] tw-font-medium tw-font-body-2-medium tw-text-darkslategray-300 tw-inline-block tw-min-w-[52px]"
                        value="Sign Up" name="form1" style="width: 100%;">
                </button>
            </div>
        </div>
        <div
            class="tw-flex tw-flex-row tw-items-start tw-justify-center tw-py-0 tw-px-[75px] tw-gap-[4px] tw-mq450:flex-wrap tw-mq450:pl-5 tw-mq450:pr-5 tw-mq450:box-border">
            <div
                class="tw-relative tw-text-sm tw-leading-[20px] tw-font-body-2-medium tw-text-grey-grey-500 tw-text-left">
                Have an account?
            </div>
            <button
                class="tw-cursor-pointer tw-[border:none] tw-p-0 tw-bg-[transparent] tw-flex tw-flex-row tw-items-start tw-justify-start">
                <div class="tw-flex tw-flex-row tw-items-center tw-justify-center">
                    <div
                        class="tw-relative tw-text-sm tw-leading-[20px] tw-font-medium tw-font-body-2-medium tw-text-gainsboro-200 tw-text-left tw-inline-block tw-min-w-[51px] tw-whitespace-nowrap">
                        <a href="login.php">
                            Sign in
                        </a>
                    </div>
                </div>
            </button>
        </div>
    </form>
</div>

<script>
    function redirectToLogin() {
        alert("You have successfully registered. Please login to continue.");
    }
</script>   