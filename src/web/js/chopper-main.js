$(document).ready(function () {

  var screenSmMin = 768;

  // activate metis menu
  $("#sidebar-menu").metisMenu();

  $(window).on("load resize", function () {
    var topOffset = $("#main-header").innerHeight();
    var bottomOffset = $("#main-footer").innerHeight();
    var windowWidth = getScreenOrWindowWidth();
    var windowHeight = $(window).innerHeight();

    if (windowWidth < screenSmMin) {
      $('#main-sidebar').addClass('collapse');
      // topOffset = 100; // 2-row-menu
    } else {
      $('#main-sidebar').removeClass('collapse').css("height", "100%");
    }

    if (windowHeight > (topOffset + bottomOffset)) {
      var pageHeight = $(window).height() - topOffset - bottomOffset;
      $("#page-wrapper").css("min-height", (pageHeight) + "px");
    }
  });

  // navbar toggle change
  $("#main-sidebar").on("hidden.bs.collapse", function (e) {
    $("#sidebar-toggle i").addClass("mdi-menu").removeClass("mdi-close");

  });

  $("#main-sidebar").on("shown.bs.collapse", function (e) {
    $("#sidebar-toggle i").removeClass("mdi-menu").addClass("mdi-close");
  });

  $("#main-sidebar").scrollator({
    customClass: 'sidebar-scroll'
  });

  function getScreenOrWindowWidth() {
    return (window.innerWidth > 0) ? window.innerWidth : screen.width;
  }
});
