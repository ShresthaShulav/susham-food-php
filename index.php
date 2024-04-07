<?php require_once ('header.php'); ?>

<?php
$statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row) {
    $cta_title = $row['cta_title'];
    $cta_content = $row['cta_content'];
    $cta_read_more_text = $row['cta_read_more_text'];
    $cta_read_more_url = $row['cta_read_more_url'];
    $cta_photo = $row['cta_photo'];
    $featured_product_title = $row['featured_product_title'];
    $featured_product_subtitle = $row['featured_product_subtitle'];
    $latest_product_title = $row['latest_product_title'];
    $latest_product_subtitle = $row['latest_product_subtitle'];
    $popular_product_title = $row['popular_product_title'];
    $popular_product_subtitle = $row['popular_product_subtitle'];
    $total_featured_product_home = $row['total_featured_product_home'];
    $total_latest_product_home = $row['total_latest_product_home'];
    $total_popular_product_home = $row['total_popular_product_home'];
    $home_service_on_off = $row['home_service_on_off'];
    $home_welcome_on_off = $row['home_welcome_on_off'];
    $home_featured_product_on_off = $row['home_featured_product_on_off'];
    $home_latest_product_on_off = $row['home_latest_product_on_off'];
    $home_popular_product_on_off = $row['home_popular_product_on_off'];
}


?>

<!-- Hero Section -->
<div
    class="tw-self-stretch tw-flex tw-flex-row tw-items-start tw-justify-center tw-py-0 tw-px-5 tw-box-border tw-max-w-full">
    <div
        class="tw-w-[730px] tw-rounded-xl tw-bg-whitesmoke-200 tw-[backdrop-filter:blur(24px)] tw-flex tw-flex-col tw-items-center tw-justify-start tw-pt-[30px] tw-px-5 tw-pb-[59px] tw-box-border tw-gap-[62px] tw-max-w-full tw-mq450:gap-[15px_62px] tw-mq800:gap-[31px_62px]">
        <div
            class="tw-w-[730px] tw-h-[349px] tw-relative tw-rounded-xl tw-bg-whitesmoke-200 tw-[backdrop-filter:blur(24px)] tw-hidden tw-max-w-full">
        </div>
        <div class="tw-w-[540px] tw-flex tw-flex-col tw-items-end tw-justify-start tw-max-w-full">
            <h1
                class="tw-m-0 tw-self-stretch tw-h-28 tw-relative tw-text-inherit tw-leading-[57.6px] tw-font-medium tw-font-sans tw-flex tw-items-center tw-justify-center tw-shrink-0 tw-z-[2] tw-mq450:text-5xl tw-mq450:leading-[35px] tw-mq800:text-13xl tw-mq800:leading-[46px]">
                <div class="tw-text-5xl">Add Up Some Spices</div>
            </h1>
            <div
                class="tw-self-stretch tw-flex tw-flex-row tw-items-start tw-justify-end tw-py-0 tw-pr-px tw-pl-0.5 tw-box-border tw-max-w-full tw-mt-[-10px] tw-text-lg tw-font-body-medium">
                <div class="tw-flex-1 tw-flex tw-flex-row tw-items-start tw-justify-start tw-relative tw-max-w-full">
                    <img alt=""
                        class="tw-h-[233px] tw-w-[233px] tw-absolute tw-!m-[0] tw-bottom-[-147px] tw-left-[-97px] tw-object-contain tw-z-[1]"
                        loading="lazy" src="public/pngwingcom--20231124t213254-5@2x.png" />
                    <img alt=""
                        class="tw-h-[233px] tw-w-[233px] tw-absolute tw-!m-[0] tw-right-[-96px] tw-bottom-[-147px] tw-object-contain tw-z-[1]"
                        loading="lazy" src="public/pngwingcom--20231124t213254-4@2x.png" />
                    <div
                        class="tw-h-14 tw-flex-1 tw-relative tw-leading-[25.6px] tw-inline-block tw-max-w-full tw-z-[2]">
                        Taste All handmade with natural Taste, To celebrate for all your pleasure moments With Friends
                        and Family
                    </div>
                </div>
            </div>
        </div>
        <div class="tw-w-[540px] tw-flex tw-flex-row tw-items-start tw-justify-center tw-max-w-full">
            <button
                class="tw-cursor-pointer tw-py-2 tw-px-[43px] tw-bg-gainsboro-300 tw-rounded tw-flex tw-flex-row tw-items-start tw-justify-start tw-whitespace-nowrap tw-z-[1] tw-border-[0.5px] tw-border-solid tw-border-darkslategray-300 tw-hover:bg-silver-100 tw-hover:box-border tw-hover:border-[0.5px] tw-hover:border-solid tw-hover:border-teal-200 tw-mq450:pl-5 tw-mq450:pr-5 tw-mq450:box-border">
                <div
                    class="tw-w-[170px] tw-relative tw-text-[20.6px] tw-font-medium tw-font-body-medium tw-text-darkslategray-300 tw-text-center tw-inline-block">
                    View our Products
                </div>
            </button>
        </div>
    </div>
</div>
<!-- Hero Section -->

<!-- Top Sales -->

<?php if ($home_latest_product_on_off == 1): ?>
    <section
        class="tw-self-stretch tw-flex tw-flex-row tw-items-start tw-justify-start tw-py-0 tw-pr-0 tw-pl-px tw-box-border tw-max-w-full tw-text-center tw-text-[64px] tw-text-darkslategray-200 tw-font-lato">
        <div
            class="tw-flex-1 tw-rounded-t-61xl tw-rounded-b-none tw-bg-white tw-flex tw-flex-col tw-items-start tw-justify-start tw-pt-16 tw-px-0 tw-pb-9 tw-box-border tw-gap-[12px] tw-max-w-full tw-mq800:pt-[27px] tw-mq800:pb-5 tw-mq800:box-border tw-mq1125:pt-[42px] tw-mq1125:pb-[23px] tw-mq1125:box-border">
            <h1
                class="tw-m-0 tw-self-stretch tw-relative tw-text-inherit tw-tracking-[0.04em] tw-leading-[88px] tw-uppercase tw-font-normal tw-font-inherit tw-mq450:text-19xl tw-mq450:leading-[53px] tw-mq800:text-[51px] tw-mq800:leading-[70px]">
                healthy &amp; tasty
            </h1>
            <div
                class="tw-self-stretch tw-flex tw-flex-col tw-items-start tw-justify-start tw-py-0 tw-pr-px tw-pl-0 tw-box-border tw-gap-[56px] tw-max-w-full tw-text-lg tw-text-chestnut-800 tw-font-body-medium tw-mq800:gap-[28px_56px]">
                <div class="tw-self-stretch tw-relative tw-tracking-[0.04em] tw-leading-[28px]">
                    <p class="tw-m-0">
                        You can mix and match as you like depending on the occasion and
                        mood.
                    </p>
                    <p class="tw-m-0">Over 12 original recipes.</p>
                </div>
    </section>
    <div class="product bg-gray pt_70 pb_30">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="headline">
                        <h2>
                            TOP SALES
                        </h2>
                        <h3>
                            Check out our top sales
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">

                    <div class="product-carousel">

                        <?php
                        $statement = $pdo->prepare("SELECT * FROM tbl_product WHERE p_is_featured = ? ORDER BY p_id DESC LIMIT " . $total_latest_product_home);
                        $statement->execute(array(1));
                        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                        foreach ($result as $row) {
                            ?>
                            <div class="item">
                                <div class="thumb">
                                    <div class="photo"
                                        style="background-image:url(assets/uploads/<?php echo $row['p_featured_photo']; ?>);">
                                    </div>
                                    <div class="overlay"></div>
                                </div>
                                <div class="text">
                                    <h3><a href="product.php?id=<?php echo $row['p_id']; ?>">
                                            <?php echo $row['p_name']; ?>
                                        </a></h3>
                                    <h4>
                                        $
                                        <?php echo $row['p_current_price']; ?>
                                        <?php if ($row['p_old_price'] != ''): ?>
                                            <del>
                                                $
                                                <?php echo $row['p_old_price']; ?>
                                            </del>
                                        <?php endif; ?>
                                    </h4>
                                    <div class="rating">
                                        <?php
                                        $t_rating = 0;
                                        $statement1 = $pdo->prepare("SELECT * FROM tbl_rating WHERE p_id=?");
                                        $statement1->execute(array($row['p_id']));
                                        $tot_rating = $statement1->rowCount();
                                        if ($tot_rating == 0) {
                                            $avg_rating = 0;
                                        } else {
                                            $result1 = $statement1->fetchAll(PDO::FETCH_ASSOC);
                                            foreach ($result1 as $row1) {
                                                $t_rating = $t_rating + $row1['rating'];
                                            }
                                            $avg_rating = $t_rating / $tot_rating;
                                        }
                                        ?>
                                        <?php
                                        if ($avg_rating == 0) {
                                            echo '';
                                        } elseif ($avg_rating == 1.5) {
                                            echo '
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        ';
                                        } elseif ($avg_rating == 2.5) {
                                            echo '
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        ';
                                        } elseif ($avg_rating == 3.5) {
                                            echo '
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        ';
                                        } elseif ($avg_rating == 4.5) {
                                            echo '
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        ';
                                        } else {
                                            for ($i = 1; $i <= 5; $i++) {
                                                ?>
                                                <?php if ($i > $avg_rating): ?>
                                                    <i class="fa fa-star-o"></i>
                                                <?php else: ?>
                                                    <i class="fa fa-star"></i>
                                                <?php endif; ?>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                    <?php if ($row['p_qty'] == 0): ?>
                                        <div class="out-of-stock">
                                            <div class="inner">
                                                Out Of Stock
                                            </div>
                                        </div>
                                    <?php else: ?>
                                        <p><a href="product.php?id=<?php echo $row['p_id']; ?>"><i class="fa fa-shopping-cart"></i>
                                                Add to Cart</a></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php
                        }
                        ?>

                    </div>


                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<!-- Top Sales -->

<!-- Get Our Products From -->
<section
    class="tw-self-stretch tw-flex tw-flex-row tw-bg-gainsboro-300 tw-pt-24 tw-pb-24 tw-items-start tw-justify-start tw-px-[37px] tw-box-border tw-max-w-full tw-text-left tw-text-17xl tw-text-darkslategray-200 tw-font-bold">
    <div
        class="tw-flex-1 tw-flex tw-flex-col tw-mx-auto tw-items-start tw-justify-start tw-gap-[44px] tw-max-w-full tw-mq800:gap-[22px_44px]">
        <div class="tw-self-stretch tw-flex tw-flex-row tw-items-start tw-justify-center tw-py-0 tw-pr-[21px] tw-pl-5">
            <h1
                class="tw-m-0 tw-relative tw-text-inherit tw-tracking-[0.04em] tw-leading-[140%] tw-capitalize tw-font-inherit tw-[text-shadow:1.1px_0_0_#285a43,_0_1.1px_0_#285a43,_-1.1px_0_0_#285a43,_0_-1.1px_0_#285a43] tw-mq450:text-3xl tw-mq450:leading-[30px] tw-mq800:text-10xl tw-mq800:leading-[40px]">
                Get Our Products From
            </h1>
        </div>
        <img src="public/Listing_Screen.png" class="tw-mx-auto">
    </div>
</section>
<!-- Get Our Products From -->

<!-- What do they say about us -->
<section
    class="tw-self-stretch tw-flex tw-pb-12 tw-bg-gainsboro-300 tw-flex-row tw-items-start tw-justify-center tw-pt-0 tw-px-5 tw-box-border tw-max-w-full tw-text-left tw-text-17xl tw-text-darkslategray-200 tw-font-lato">
    <div
        class="tw-w-[1220px] tw-flex tw-flex-col tw-items-start tw-justify-start tw-gap-[35px] tw-max-w-full tw-mq800:gap-[17px_35px]">
        <div class="tw-self-stretch tw-flex tw-flex-row tw-items-start tw-justify-center tw-py-0 tw-pr-[21px] tw-pl-5">
            <h1
                class="tw-m-0 tw-relative tw-text-inherit tw-tracking-[0.04em] tw-leading-[140%] tw-capitalize tw-font-inherit tw-[text-shadow:1.1px_0_0_#285a43,_0_1.1px_0_#285a43,_-1.1px_0_0_#285a43,_0_-1.1px_0_#285a43] tw-mq450:text-3xl tw-mq450:leading-[30px] tw-mq800:text-10xl tw-mq800:leading-[40px]">
                What do they say about us</h1>
        </div>
        <div
            class="tw-self-stretch tw-flex tw-flex-row tw-items-start tw-justify-center tw-gap-[70px] tw-max-w-full tw-text-xl tw-mq450:gap-[70px_17px] tw-mq800:gap-[70px_35px] tw-mq1125:flex-wrap">
            <div
                class="tw-flex-[0.7556] tw-rounded-3xs tw-bg-whitesmoke-100 tw-overflow-hidden tw-flex tw-flex-col tw-items-start tw-justify-start tw-pt-[58px] tw-px-11 tw-pb-[98px] tw-box-border tw-gap-[49px] tw-min-w-[270px] tw-max-w-full tw-mq450:gap-[24px_49px] tw-mq450:pl-5 tw-mq450:pr-5 tw-mq450:box-border tw-mq450:flex-1">
                <div class="tw-w-[360px] tw-h-[329px] tw-relative tw-bg-whitesmoke-100 tw-hidden tw-max-w-full"></div>
                <div class="tw-self-stretch tw-flex tw-flex-row tw-items-start tw-justify-end tw-py-0 tw-px-[52px]">
                    <div
                        class="tw-relative tw-leading-[140%] tw-font-black tw-z-[1] tw-mq450:text-base tw-mq450:leading-[22px]">
                        Jessica Watson</div>
                </div>
                <div
                    class="tw-w-[243px] tw-flex tw-flex-row tw-items-start tw-justify-start tw-relative tw-text-base tw-text-gray1-200 tw-font-body-medium">
                    <div class="tw-flex-1 tw-relative tw-leading-[150%] tw-font-medium tw-z-[2]">“ Highly recommend this
                        website for quality flowers and plants. Great prices, timely delivery and excellent customer
                        service. ”</div>
                    <div class="tw-h-[289px] tw-w-[316px] tw-absolute tw-!m-[0] tw-right-[-73px] tw-bottom-[-98px]"><img
                            class="tw-absolute tw-top-[61px] tw-left-[58px] tw-w-[258px] tw-h-[228px] tw-overflow-hidden tw-z-[1]"
                            loading="lazy" alt="" src="public/zz-plant-1.svg" /><img
                            class="tw-absolute tw-top-[0px] tw-left-[0px] tw-rounded-31xl tw-w-16 tw-h-16 tw-object-cover tw-z-[2]"
                            alt="" src="public/rectangle@2x.png" /></div>
                </div>
            </div>
            <div
                class="tw-flex-[0.7556] tw-rounded-3xs tw-bg-whitesmoke-100 tw-overflow-hidden tw-flex tw-flex-col tw-items-start tw-justify-start tw-py-[39px] tw-px-11 tw-box-border tw-gap-[39px] tw-min-w-[270px] tw-min-h-[329px] tw-max-w-full tw-mq450:gap-[19px_39px] tw-mq450:pl-5 tw-mq450:pr-5 tw-mq450:box-border tw-mq450:flex-1 tw-mq1125:min-h-[auto]">
                <div class="tw-w-[360px] tw-h-[329px] tw-relative tw-bg-whitesmoke-100 tw-hidden tw-max-w-full"></div>
                <div class="tw-h-16 tw-flex tw-flex-row tw-items-start tw-justify-start tw-gap-[19px]"><img
                        class="tw-h-16 tw-w-16 tw-relative tw-rounded-31xl tw-object-cover tw-z-[1]" alt=""
                        src="public/rectangle-1@2x.png" />
                    <div class="tw-flex tw-flex-col tw-items-start tw-justify-start tw-pt-[18px] tw-px-0 tw-pb-0">
                        <div
                            class="tw-relative tw-leading-[140%] tw-font-black tw-inline-block tw-min-w-[80px] tw-z-[1] tw-mq450:text-base tw-mq450:leading-[22px]">
                            Kate Szu</div>
                    </div>
                </div>
                <div
                    class="tw-w-[243px] tw-flex tw-flex-row tw-items-start tw-justify-start tw-relative tw-text-base tw-text-gray1-200 tw-font-body-medium">
                    <div class="tw-flex-1 tw-relative tw-leading-[150%] tw-font-medium tw-z-[1]">"Great service,
                        beautiful flowers, timely delivery. Highly recommend."</div><img
                        class="tw-h-[197px] tw-w-44 tw-absolute tw-!m-[0] tw-right-[-73px] tw-bottom-[-115px] tw-overflow-hidden tw-shrink-0 tw-z-[2]"
                        loading="lazy" alt="" src="public/snake-plant-1.svg" />
                </div>
            </div>
            <div
                class="tw-h-[329px] tw-flex-1 tw-relative tw-rounded-3xs tw-bg-whitesmoke-100 tw-overflow-hidden tw-min-w-[270px] tw-max-w-full tw-text-base tw-text-gray1-200 tw-font-body-medium">
                <div class="tw-absolute tw-top-[0px] tw-left-[0px] tw-bg-whitesmoke-100 tw-w-full tw-h-full tw-hidden">
                </div>
                <div
                    class="tw-absolute tw-top-[142px] tw-left-[54px] tw-leading-[150%] tw-font-medium tw-inline-block tw-w-[243px] tw-z-[1]">
                    "I am very happy with my purchase from this website, the plants were healthy and arrived on time.”
                </div>
                <img class="tw-absolute tw-top-[155px] tw-left-[162px] tw-w-[198px] tw-h-[174px] tw-overflow-hidden tw-z-[2]"
                    loading="lazy" alt="" src="public/bamboo-258.svg" />
                <div
                    class="tw-absolute tw-top-[39px] tw-left-[54px] tw-h-16 tw-flex tw-flex-row tw-items-start tw-justify-start tw-gap-[19px] tw-text-xl tw-text-darkslategray-200 tw-font-lato">
                    <img class="tw-h-16 tw-w-16 tw-relative tw-rounded-31xl tw-object-cover tw-z-[1]" alt=""
                        src="public/rectangle-2@2x.png" />
                    <div class="tw-flex tw-flex-col tw-items-start tw-justify-start tw-pt-[18px] tw-px-0 tw-pb-0">
                        <div
                            class="tw-relative tw-leading-[140%] tw-font-black tw-inline-block tw-min-w-[54px] tw-z-[1] tw-mq450:text-base tw-mq450:leading-[22px]">
                            Grace</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- What do they say about us -->


<?php require_once ('footer.php'); ?>