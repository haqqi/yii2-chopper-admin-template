$(document).ready(function () {

  var screenSmMin = 768;

  $(window).on("load resize", function () {
    var topOffset = $("#main-header").innerHeight();
    var bottomOffset = $("#main-footer").innerHeight();
    var windowWidth = getScreenOrWindowWidth();
    var windowHeight = getScreenOrWindowHeight();

    // if (windowWidth < screenSmMin) {
    //   $('#main-sidebar').addClass('collapse');
    // } else {
    //   $('#main-sidebar').removeClass('collapse').css("height", "100%");
    // }

    if (windowHeight > (topOffset + bottomOffset)) {
      var pageHeight = windowHeight - topOffset - bottomOffset;
      $("#page-wrapper").css("min-height", (pageHeight) + "px");
    }
  });


  function getScreenOrWindowWidth() {
    return (window.innerWidth > 0) ? window.innerWidth : screen.width;
  }

  function getScreenOrWindowHeight() {
    return ((window.innerHeight > 0) ? window.innerHeight : screen.height) - 1;
  }
});
