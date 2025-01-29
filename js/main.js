$(window).resize(function () {
  //ここにブラウザのウィンドウがリサイズされたときに処理する内容を記述
  if (window.matchMedia("(max-width: 960px)").matches) {
    $("#js-btn").removeClass("active");
    $(".l-sidebar").removeClass("open");
    $("#js-bg").fadeOut("fast");
    $(".l-main__left").removeClass("fixed");
  }
});

function isPC() {
  return window.innerWidth >= 960; // PCサイズの判定
}

$(document).ready(function () {
  $("#js-btn").on("click", function () {
    if (!isPC()) {
      // PCではなく、スマホやタブレットのとき
      if ($(this).hasClass("active")) {
        closeSidebar();
      } else {
        openSidebar();
      }
    }
  });

  $("#js-close, #js-bg").on("click", function () {
    if (!isPC()) {
      // PCではない場合のみ閉じる
      closeSidebar();
    }
  });

  function openSidebar() {
    $("#js-btn").addClass("active");
    $("#js-bg").fadeIn("fast");
    /*$(".l-sidebar").addClass("open").animate({ width: getSidebarWidth() }, 500);*/
    $(".l-sidebar").addClass("open").animate({ right: "0" }, 500);
    $(".l-main__left").addClass("fixed");
  }

  function closeSidebar() {
    $("#js-btn").removeClass("active");
    $("#js-bg").fadeOut("fast");
    /*$(".l-sidebar").animate({ width: "0" }, 500, function () {
      $(this).removeClass("open");
    });*/
    $(".l-sidebar").removeClass("open").animate({ right: "-100%" }, 500);
    $(".l-main__left").removeClass("fixed");
  }

  function getSidebarWidth() {
    var windowWidth = window.innerWidth;
    if (windowWidth >= 560 && windowWidth < 960) {
      return "44%"; // タブレット時の幅
    } else {
      return "87.5%"; // スマホ時の幅
    }
  }
});
