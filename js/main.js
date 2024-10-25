$("#js-btn").on("click", function () {
  //クリックされた時
  //activeがある時の処理
  if ($(this).hasClass("active")) {
    $(this).removeClass("active"); //activeを削除
    $(".l-sidebar").removeClass("open"); //#js-menuの.openを削除
    $(".l-sidebar__bg").removeClass("open"); //#menu-bgの.openを削除
  } else {
    $(this).addClass("active"); //activeを追加
    $(".l-sidebar").addClass("open");
    $(".l-sidebar__bg").addClass("open");
  }
});

$(window).resize(function () {
  //ここにブラウザのウィンドウがリサイズされたときに処理する内容を記述
  $("js-btn").removeClass("active");
  $("#js-menu").hide();
  $("#js-bg").removeClass("open");
});
1;
