<?php require_once ('header.php'); ?>

<?php
$statement = $pdo->prepare("SELECT * FROM tbl_page WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row) {
    $about_title = $row['about_title'];
    $about_content = $row['about_content'];
    $about_banner = $row['about_banner'];
}
?>
<!-- 
<div class="page-banner" style="background-image: url(assets/uploads/<?php echo $about_banner; ?>);">
    <div class="inner">
        <h1><?php echo $about_title; ?></h1>
    </div>
</div>

<div class="page">
    <div class="container">
        <div class="row">            
            <div class="col-md-12">      
                <p>
                    <?php echo $about_content; ?>
                </p>
            </div>
        </div>
    </div>
</div> -->
<div
    class="tw-w-full  tw-relative tw-bg-gainsboro-300 tw-overflow-hidden tw-flex tw-flex-col tw-items-end tw-justify-start tw-gap-[148px] tw-tracking-[normal] tw-mq450:gap-[37px_148px] tw-mq750:gap-[74px_148px]">
    <section
        class="tw-w-[1370px] tw-mx-auto tw-my-60 tw-flex tw-flex-row tw-items-start tw-justify-end tw-pt-0 tw-px-[46px] tw-pb-7 tw-box-border tw-max-w-full tw-text-left tw-text-29xl tw-text-light-gray-11 tw-font-lato lg:tw-pl-[23px] lg:tw-pr-[23px] lg:tw-box-border">
        <div class="tw-flex-1 tw-flex tw-flex-col tw-items-start tw-justify-start tw-gap-[6px] tw-max-w-full">
            <div
                class="tw-w-[590px] tw-flex tw-flex-row tw-items-start tw-justify-start tw-py-0 tw-px-[5px] tw-box-border tw-max-w-full">
                <h2
                    class="tw-m-0 tw-flex-1 tw-relative tw-text-inherit tw-font-black tw-font-inherit tw-inline-block tw-max-w-full tw-mq450:text-10xl tw-mq1050:text-19xl">
                    About Us
                </h2>
            </div>
            <div
                class="tw-self-stretch tw-flex tw-flex-row tw-items-start tw-justify-start tw-gap-[69px] tw-max-w-full tw-text-5xl lg:tw-flex-wrap tw-mq450:gap-[69px_17px] tw-mq750:gap-[69px_34px]">
                <div
                    class="tw-w-[580px] tw-flex tw-flex-col tw-items-start tw-justify-start tw-pt-[21px] tw-px-0 tw-pb-0 tw-box-border tw-min-w-[580px] tw-max-w-full lg:tw-flex-1 tw-mq750:min-w-full">
                    <div class="tw-self-stretch tw-relative tw-mq450:text-lgi">
                        <p class="tw-m-0">
                            Started as a small plant nursery plant planet is now offering
                            home delivery service of various plant varities in 35+ cities.
                        </p>
                        <p class="tw-m-0">&nbsp;</p>
                        <p class="tw-m-0">
                            We work in the motto clean air with healthy plants. All the
                            plants are grown with natural manure.
                        </p>
                        <p class="tw-m-0">&nbsp;</p>
                        <p class="tw-m-0">Hope to hear more from you</p>
                        <p class="tw-m-0">&nbsp;</p>
                        <p class="tw-m-0">Team</p>
                        <p class="tw-m-0">Plant Plant</p>
                    </div>
                </div>
                <div
                    class="tw-h-[373px] tw-flex-1 tw-relative tw-rounded-xl tw-min-w-[409px] tw-flex tw-items-center tw-justify-center">
                    <img class="tw-h-full tw-flex-1 tw-max-w-full tw-overflow-hidden tw-min-w-[409px] tw-object-contain tw-absolute tw-left-[0px] tw-top-[7px] tw-w-full [transform:scale(1.038)] tw-mq750:min-w-full"
                        loading="lazy" alt="" src="public/rectangle-17@2x.png" />
                </div>
            </div>
        </div>
    </section>
</div>

<?php require_once ('footer.php'); ?>