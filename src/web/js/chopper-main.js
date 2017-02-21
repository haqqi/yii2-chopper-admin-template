$(document).ready(function () {

  var screenSmMin = 768;
  var lastWindowWidth = $(window).width();

  // activate metis menu
  $(".sidebar-nav").metisMenu();

  $(window).on("load resize", function () {
    var topOffset = $("#main-header").innerHeight();
    var bottomOffset = $("#main-footer").innerHeight();
    var windowWidth = $(window).width();
    var windowHeight = $(window).height();
    
    // shrink
    if(windowWidth < lastWindowWidth) {
      if (windowWidth < screenSmMin) {
        $('#main-sidebar').addClass('collapse');
        $("#main-sidebar").scrollator('hide'); // @note: there is a bug in scrollator if not hidden after resizing. The html content might be taller.
      }
    } else { // expand
      if (windowWidth >= screenSmMin) {
        $('#main-sidebar').removeClass('collapse').css("height", "100%");
        $("#main-sidebar").scrollator('show');
      }
    }
    
    if (windowHeight > (topOffset + bottomOffset)) {
      var pageHeight = windowHeight - topOffset - bottomOffset;
      $("#page-wrapper").css("min-height", (pageHeight) + "px");
    }
    
    lastWindowWidth = windowWidth;
  });

  // navbar toggle change
  $("#main-sidebar").on("hidden.bs.collapse", function (e) {
    $("#sidebar-drop-toggle i").addClass("mdi-menu").removeClass("mdi-close");
  });

  $("#main-sidebar").on("shown.bs.collapse", function (e) {
    $("#sidebar-drop-toggle i").removeClass("mdi-menu").addClass("mdi-close");
  });

  $("#main-sidebar").scrollator({
    customClass: 'sidebar-scroll'
  });
});
