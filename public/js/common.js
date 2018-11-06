$(document).ready(function() {
  function banner() {
    var hW = $(window).height();
    $('.banner-login').height(hW);
    $('.col-sm-6.border-left').css('min-height', hW);
  }
  banner();
  $(window).resize(function() {
    banner();
  });
});