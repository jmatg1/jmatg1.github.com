jQuery(document).ready(function () {
  /*Ajax hide notice forever  */
  jQuery(".wd_bp_notice_dissmiss").on("click", function () {
    jQuery("#wd_bp_notice_cont").hide();
    jQuery.post(faqwd_bp_url);
  })
});

// Set option status 1 - never show again during install btn click in notice
function faqwd_bp_notice_install() {
  jQuery.post(faqwd_bp_url);
}