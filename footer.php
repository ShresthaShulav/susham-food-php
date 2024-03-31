<?php
$statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row) {
  $footer_about = $row['footer_about'];
  $contact_email = $row['contact_email'];
  $contact_phone = $row['contact_phone'];
  $contact_address = $row['contact_address'];
  $footer_copyright = $row['footer_copyright'];
  $total_recent_post_footer = $row['total_recent_post_footer'];
  $total_popular_post_footer = $row['total_popular_post_footer'];
  $newsletter_on_off = $row['newsletter_on_off'];
  $before_body = $row['before_body'];
}
?>


<footer
  class="tw-self-stretch tw-bg-darkslategray-400 tw-overflow-hidden tw-flex tw-flex-col tw-items-center tw-justify-end tw-py-16 tw-px-20 tw-box-border tw-max-w-full tw-text-left tw-text-3xs tw-text-gainsboro-300 tw-font-body-2-medium tw-mq750:py-[42px] tw-mq750:px-10 tw-mq750:box-border">
  <div
    class="tw-self-stretch tw-flex tw-flex-col tw-items-start tw-justify-start tw-relative tw-gap-[128px] tw-max-w-full lg:tw-gap-[64px_128px] tw-mq450:gap-[16px_128px] tw-mq750:gap-[32px_128px]">
    <div class="tw-self-stretch tw-flex tw-flex-row tw-items-start tw-justify-start tw-gap-[16px] tw-max-w-full">
      <div
        class="tw-flex-1 tw-overflow-hidden tw-flex tw-flex-row tw-items-start tw-justify-start tw-min-w-[411px] tw-max-w-full tw-mq750:min-w-full">
        <img class="tw-h-[312px] tw-w-[279px] tw-relative tw-object-cover" alt="" src="public/sfp-1@2x.png" />
      </div>
      <div
        class="tw-flex-1 tw-flex tw-flex-col tw-items-start tw-justify-start tw-gap-[96px] tw-min-w-[411px] tw-max-w-full tw-mq450:gap-[24px_96px] tw-mq750:gap-[48px_96px] tw-mq750:min-w-full">
        <div
          class="tw-self-stretch tw-flex tw-flex-row tw-items-start tw-justify-start tw-gap-[16px] tw-mq750:flex-wrap">
          <div
            class="tw-flex-1 tw-flex tw-flex-col tw-items-start tw-justify-start tw-py-0 tw-pr-[81px] tw-pl-0 tw-box-border tw-gap-[32px] tw-min-w-[200px] tw-mq450:gap-[16px_32px] tw-mq450:pr-5 tw-mq450:box-border">
            <div class="tw-flex tw-flex-row tw-items-center tw-justify-start tw-gap-[11px]">
              <div class="tw-flex tw-flex-row tw-items-start tw-justify-start tw-gap-[5px]">
                <div class="tw-h-2 tw-w-2 tw-relative tw-rounded-[50%] tw-bg-gainsboro-300"></div>
                <div
                  class="tw-h-2 tw-w-2 tw-relative tw-rounded-[50%] tw-box-border tw-border-[0px] tw-border-solid tw-border-gainsboro-300">
                </div>
              </div>
              <div
                class="tw-relative tw-tracking-[0.04em] tw-leading-[140%] tw-uppercase tw-font-medium tw-inline-block tw-min-w-[26px]">
                Info
              </div>
            </div>
            <div
              class="tw-self-stretch tw-flex tw-flex-col tw-items-start tw-justify-start tw-text-9xl tw-font-spectral">
              <div
                class="tw-relative tw-tracking-[-0.02em] tw-leading-[34px] tw-font-extrabold tw-mq450:text-3xl tw-mq450:leading-[27px]">
                My Account
              </div>
              <div
                class="tw-relative tw-tracking-[-0.02em] tw-leading-[34px] tw-font-extrabold tw-mq450:text-3xl tw-mq450:leading-[27px]">
                Track Your Order
              </div>
              <div
                class="tw-relative tw-tracking-[-0.02em] tw-leading-[34px] tw-font-extrabold tw-inline-block tw-min-w-[70px] tw-mq450:text-3xl tw-mq450:leading-[27px]">
                FAQs
              </div>
            </div>
          </div>
          <div
            class="tw-flex-[0.5551] tw-flex tw-flex-col tw-items-start tw-justify-start tw-pt-[46px] tw-pb-0 tw-pr-[182px] tw-pl-0 tw-box-border tw-min-w-[200px] tw-text-9xl tw-font-spectral tw-mq450:pr-5 tw-mq450:box-border tw-mq450:flex-1">
            <a href="about.php"
              class="tw-relative tw-tracking-[-0.02em] tw-leading-[34px] tw-font-extrabold tw-inline-block tw-min-w-[116px] tw-mq450:text-3xl tw-mq450:leading-[27px]">
              About us
            </a>
            <div
              class="tw-relative tw-tracking-[-0.02em] tw-leading-[34px] tw-font-extrabold tw-inline-block tw-min-w-[126px] tw-mq450:text-3xl tw-mq450:leading-[27px]">
              View Cart
            </div>
          </div>
        </div>
        <div
          class="tw-self-stretch tw-flex tw-flex-row tw-items-start tw-justify-start tw-gap-[16px] tw-mq750:flex-wrap">
          <div
            class="tw-flex-[0.7078] tw-flex tw-flex-col tw-items-start tw-justify-start tw-py-0 tw-pr-[90px] tw-pl-0 tw-box-border tw-gap-[32px] tw-min-w-[200px] tw-mq450:gap-[16px_32px] tw-mq450:pr-5 tw-mq450:box-border tw-mq450:flex-1">
            <div class="tw-flex tw-flex-row tw-items-center tw-justify-start tw-gap-[11px]">
              <div class="tw-flex tw-flex-row tw-items-start tw-justify-start tw-gap-[5px]">
                <div
                  class="tw-h-2 tw-w-2 tw-relative tw-rounded-[50%] tw-box-border tw-border-[0px] tw-border-solid tw-border-gainsboro-300">
                </div>
                <div class="tw-h-2 tw-w-2 tw-relative tw-rounded-[50%] tw-bg-gainsboro-300"></div>
              </div>
              <div
                class="tw-relative tw-tracking-[0.04em] tw-leading-[140%] tw-uppercase tw-font-medium tw-inline-block tw-min-w-[70px]">
                Contact us
              </div>
            </div>
            <div class="tw-self-stretch tw-flex tw-flex-col tw-items-start tw-justify-start tw-gap-[12px] tw-text-sm">
              <div class="tw-self-stretch tw-flex tw-flex-col tw-items-start tw-justify-start tw-gap-[4px]">
                <div
                  class="tw-relative tw-leading-[20px] tw-font-medium tw-inline-block tw-min-w-[127px] tw-whitespace-nowrap">
                  +977-9843273516
                </div>
                <div class="tw-relative tw-leading-[20px] tw-font-medium tw-whitespace-nowrap">
                  sushamfoodproduct@gmail.com
                </div>
              </div>
              <div
                class="tw-relative tw-text-mini-1 tw-leading-[20px] tw-font-medium tw-text-darkseagreen tw-inline-block tw-min-w-[63px]">
                Get a call
              </div>
            </div>
          </div>
          <div
            class="tw-flex-1 tw-flex tw-flex-col tw-items-start tw-justify-start tw-pt-[46px] tw-px-0 tw-pb-0 tw-box-border tw-min-w-[200px] tw-text-sm">
            <div class="tw-flex tw-flex-row tw-items-start tw-justify-start tw-py-0 tw-px-0 tw-relative">
              <img
                class="tw-h-[168.6px] tw-w-[254.6px] tw-absolute tw-!m-[0] tw-top-[calc(50%_-_84px)] tw-left-[calc(50%_-_127px)]"
                alt="" src="public/shape-26.svg" />

              <div class="tw-relative tw-leading-[20px] tw-font-semibold tw-inline-block tw-min-w-[106px] tw-z-[1]">
                Fill out the brief
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div
      class="tw-self-stretch tw-flex tw-flex-row tw-items-center tw-justify-between tw-gap-[20px] tw-text-right tw-text-gray1-300 tw-mq450:flex-wrap">
      <div class="tw-h-[25px] tw-w-[81px] tw-flex tw-flex-row tw-items-center tw-justify-start tw-gap-[32px]">
        <img class="tw-h-6 tw-w-6 tw-relative" loading="lazy" alt="" src="public/instagram.svg" />

        <img class="tw-h-[25px] tw-w-[25px] tw-relative tw-min-h-[25px]" loading="lazy" alt=""
          src="public/vector-1.svg" />
      </div>
      <div class="tw-w-[100px] tw-relative tw-leading-[140%] tw-font-medium tw-inline-block tw-min-w-[100px]">
        © 2023 — Copyright
      </div>
    </div>
    <div
      class="tw-w-[400px] tw-h-[400px] tw-absolute tw-!m-[0] tw-top-[calc(50%_-_259.5px)] tw-left-[calc(50%_-_640px)] tw-z-[1] tw-flex tw-items-center tw-justify-center">
      <img
        class="tw-w-full tw-h-full tw-z-[1] tw-object-contain tw-absolute tw-left-[210px] tw-top-[60px] [transform:scale(2.45)]"
        loading="lazy" alt="" src="public/blur.svg" />
    </div>
  </div>
</footer>


<a href="#" class="scrollup">
  <i class="fa fa-angle-up"></i>
</a>

<?php
$statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row) {
  $stripe_public_key = $row['stripe_public_key'];
  $stripe_secret_key = $row['stripe_secret_key'];
}
?>

<script src="assets/js/jquery-2.2.4.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="https://js.stripe.com/v2/"></script>
<script src="assets/js/megamenu.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/owl.animate.js"></script>
<script src="assets/js/jquery.bxslider.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/rating.js"></script>
<script src="assets/js/jquery.touchSwipe.min.js"></script>
<script src="assets/js/bootstrap-touch-slider.js"></script>
<script src="assets/js/select2.full.min.js"></script>
<script src="assets/js/custom.js"></script>
<script>
  function confirmDelete() {
    return confirm("Sure you want to delete this data?");
  }
  $(document).ready(function () {
    advFieldsStatus = $('#advFieldsStatus').val();

    $('#paypal_form').hide();
    $('#stripe_form').hide();
    $('#bank_form').hide();

    $('#advFieldsStatus').on('change', function () {
      advFieldsStatus = $('#advFieldsStatus').val();
      if (advFieldsStatus == '') {
        $('#paypal_form').hide();
        $('#stripe_form').hide();
        $('#bank_form').hide();
      } else if (advFieldsStatus == 'PayPal') {
        $('#paypal_form').show();
        $('#stripe_form').hide();
        $('#bank_form').hide();
      } else if (advFieldsStatus == 'Stripe') {
        $('#paypal_form').hide();
        $('#stripe_form').show();
        $('#bank_form').hide();
      } else if (advFieldsStatus == 'Bank Deposit') {
        $('#paypal_form').hide();
        $('#stripe_form').hide();
        $('#bank_form').show();
      }
    });
  });


  $(document).on('submit', '#stripe_form', function () {
    // createToken returns immediately - the supplied callback submits the form if there are no errors
    $('#submit-button').prop("disabled", true);
    $("#msg-container").hide();
    Stripe.card.createToken({
      number: $('.card-number').val(),
      cvc: $('.card-cvc').val(),
      exp_month: $('.card-expiry-month').val(),
      exp_year: $('.card-expiry-year').val()
      // name: $('.card-holder-name').val()
    }, stripeResponseHandler);
    return false;
  });
  Stripe.setPublishableKey('<?php echo $stripe_public_key; ?>');
  function stripeResponseHandler(status, response) {
    if (response.error) {
      $('#submit-button').prop("disabled", false);
      $("#msg-container").html('<div style="color: red;border: 1px solid;margin: 10px 0px;padding: 5px;"><strong>Error:</strong> ' + response.error.message + '</div>');
      $("#msg-container").show();
    } else {
      var form$ = $("#stripe_form");
      var token = response['id'];
      form$.append("<input type='hidden' name='stripeToken' value='" + token + "' />");
      form$.get(0).submit();
    }
  }
</script>
<?php echo $before_body; ?>
</body>

</html>