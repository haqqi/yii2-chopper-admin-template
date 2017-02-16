$(document).ready(function () {

  var screenSmMin = 768;

  $(window).on("load resize", function () {
    var topOffset = $("#main-header").innerHeight();
    var bottomOffset = $("#main-footer").innerHeight();
    var windowWidth = getScreenOrWindowWidth();
    var windowHeight = $(window).innerHeight();

    // if (windowWidth < screenSmMin) {
    //   $('#main-sidebar').addClass('collapse');
    // } else {
    //   $('#main-sidebar').removeClass('collapse').css("height", "100%");
    // }

    if (windowHeight > (topOffset + bottomOffset)) {
      var pageHeight = $(window).height() - topOffset - bottomOffset;
      $("#page-wrapper").css("min-height", (pageHeight) + "px");
    }
  });

  function getScreenOrWindowWidth() {
    return (window.innerWidth > 0) ? window.innerWidth : screen.width;
  }
});
