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
    if (windowWidth < lastWindowWidth) {
      if (windowWidth < screenSmMin) {
        $('#main-sidebar').addClass('collapse');
        $("#sidebar-wrapper").scrollator('hide'); // @note: there is a bug in scrollator if not hidden after resizing. The html content might be taller.
      }
    } else { // expand
      if (windowWidth >= screenSmMin) {
        $('#main-sidebar').removeClass('collapse').css("height", "100%");
        $("#sidebar-wrapper").scrollator('show');
      }
    }

    if (windowHeight > (topOffset + bottomOffset)) {
      var pageHeight = windowHeight - topOffset - bottomOffset;
      $("#page-wrapper").css("min-height", (pageHeight) + "px");
    }

    lastWindowWidth = windowWidth;
  });

  $("#sidebar-toggle").on("click", function (e) {
    $("body").toggleClass("main-sidebar-closed");
    $(this).find("i.mdi").toggleClass("mdi-rotate-270");
    $(this).find("i.mdi").toggleClass("mdi-rotate-90");
    
    if($("body").hasClass("main-sidebar-closed")) {
      console.log("lepas metis");
      $("#main-sidebar ul.sidebar-nav > li > a").attr("aria-disabled", "true");
    } else {
      console.log("pasang metis");
      $("#main-sidebar ul.sidebar-nav > li > a").attr("aria-disabled", "false");
    }
  });

  // navbar toggle change
  $("#main-sidebar").on("hidden.bs.collapse", function (e) {
    $("#sidebar-drop-toggle i").addClass("mdi-menu").removeClass("mdi-close");
  });

  $("#main-sidebar").on("shown.bs.collapse", function (e) {
    $("#sidebar-drop-toggle i").removeClass("mdi-menu").addClass("mdi-close");
  });

  $("#sidebar-wrapper").scrollator({
    customClass: 'sidebar-scroll'
  });
});
