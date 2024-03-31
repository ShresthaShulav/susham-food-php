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

<div id="bootstrap-touch-slider" class="carousel bs-slider fade control-round indicators-line tw-bg-chestnut-600"
    data-ride="carousel" data-pause="hover" data-interval="false">

    <!-- Indicators -->
    <ol class="carousel-indicators">
        <?php
        $i = 0;
        $statement = $pdo->prepare("SELECT * FROM tbl_slider");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $row) {
            ?>
            <li data-target="#bootstrap-touch-slider" data-slide-to="<?php echo $i; ?>" <?php if ($i == 0) {
                   echo 'class="active"';
               } ?>></li>
            <?php
            $i++;
        }
        ?>
    </ol>

    <!-- Wrapper For Slides -->
    <div class="carousel-inner" role="listbox">

        <?php
        $i = 0;
        $statement = $pdo->prepare("SELECT * FROM tbl_slider");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $row) {
            ?>
            <div class="item <?php if ($i == 0) {
                echo 'active';
            } ?>" style="background-image:url(assets/uploads/<?php echo $row['photo']; ?>);">
                <div class="bs-slider-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="slide-text <?php if ($row['position'] == 'Left') {
                            echo 'slide_style_left';
                        } elseif ($row['position'] == 'Center') {
                            echo 'slide_style_center';
                        } elseif ($row['position'] == 'Right') {
                            echo 'slide_style_right';
                        } ?>">
                            <h1 data-animation="animated <?php if ($row['position'] == 'Left') {
                                echo 'zoomInLeft';
                            } elseif ($row['position'] == 'Center') {
                                echo 'flipInX';
                            } elseif ($row['position'] == 'Right') {
                                echo 'zoomInRight';
                            } ?>">
                                <?php echo $row['heading']; ?>
                            </h1>
                            <p data-animation="animated <?php if ($row['position'] == 'Left') {
                                echo 'fadeInLeft';
                            } elseif ($row['position'] == 'Center') {
                                echo 'fadeInDown';
                            } elseif ($row['position'] == 'Right') {
                                echo 'fadeInRight';
                            } ?>">
                                <?php echo nl2br($row['content']); ?>
                            </p>
                            <a href="<?php echo $row['button_url']; ?>" target="_blank" class="btn btn-primary"
                                data-animation="animated <?php if ($row['position'] == 'Left') {
                                    echo 'fadeInLeft';
                                } elseif ($row['position'] == 'Center') {
                                    echo 'fadeInDown';
                                } elseif ($row['position'] == 'Right') {
                                    echo 'fadeInRight';
                                } ?>">
                                <?php echo $row['button_text']; ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            $i++;
        }
        ?>
    </div>

    <!-- Slider Left Control -->
    <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
        <span class="fa fa-angle-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>

    <!-- Slider Right Control -->
    <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
        <span class="fa fa-angle-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>

</div>


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

<?php if ($home_latest_product_on_off == 1): ?>
    <div class="product bg-gray pt_70 pb_30">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="headline">
                        <h2>
                            <?php echo $latest_product_title; ?>
                        </h2>
                        <h3>
                            <?php echo $latest_product_subtitle; ?>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">

                    <div class="product-carousel">

                        <?php
                        $statement = $pdo->prepare("SELECT * FROM tbl_product WHERE p_is_active=? ORDER BY p_id DESC LIMIT " . $total_latest_product_home);
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


<?php if ($home_popular_product_on_off == 1): ?>
    <div class="product pt_70 pb_70">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="headline">
                        <h2>
                            <?php echo $popular_product_title; ?>
                        </h2>
                        <h3>
                            <?php echo $popular_product_subtitle; ?>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">

                    <div class="product-carousel">

                        <?php
                        $statement = $pdo->prepare("SELECT * FROM tbl_product WHERE p_is_active=? ORDER BY p_total_view DESC LIMIT " . $total_popular_product_home);
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

<?php require_once ('footer.php'); ?>