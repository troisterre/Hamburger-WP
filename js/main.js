$(window).resize(function () {
  //ここにブラウザのウィンドウがリサイズされたときに処理する内容を記述
  if (window.matchMedia("(max-width: 960px)").matches) {
    $("#js-btn").removeClass("active");
    $(".l-sidebar").removeClass("open");
    $("#js-bg").fadeOut("fast");
    $(".l-main__left").removeClass("fixed");
  }
});

$("#js-btn").on("click", function () {
  //クリックされた時
  //$("#js-bg").fadeIn("fast"); //#menu-bgの.openを削除
  //activeがある時の処理
  if ($(this).hasClass("active")) {
    $(this).removeClass("active"); //activeを削除
    $(".l-sidebar").removeClass("open"); //#js-menuの.openを削除
    $(".l-main__left").removeClass("fixed");
  } else {
    $(this).addClass("active"); //activeを追加
    $("#js-bg").fadeIn("fast");
    $(".l-sidebar").addClass("open");
    $(".l-main__left").addClass("fixed");
  }
});

$("#js-close").on("click", function () {
  $("#js-bg").fadeOut();
  if ($(this).hasClass("active")) {
    $(this).addClass("active");
  } else {
    $(this).removeClass("active");
    $(".l-main__left").removeClass("fixed");
    $(".l-sidebar").removeClass("open");
  }
});
