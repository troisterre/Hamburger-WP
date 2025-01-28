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
  // activeがある時の処理
  if ($(this).hasClass("active")) {
    $(this).removeClass("active"); // activeを削除
    $(".l-sidebar").removeClass("open"); // サイドバーを閉じる
    $(".l-main__left").removeClass("fixed"); // メインコンテンツの固定解除
    $("#js-bg").fadeOut("fast"); // 背景をフェードアウト
    $("body").css("overflowX", "auto"); // スクロールを許可
  } else {
    $(this).addClass("active"); // activeを追加
    $("#js-bg").fadeIn("fast"); // 背景をフェードイン
    $(".l-sidebar").addClass("open"); // サイドバーを開く
    $(".l-main__left").addClass("fixed"); // メインコンテンツを固定
    $("body").css("overflowX", "hidden"); // スクロールを無効
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
