//scrolltopbtnstart
$(function() {
  
  var pagetop = $('#topBtn');  //トップボタンの取得
  pagetop.hide();  //トップボタン隠す
  
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {  //100pxスクロールしたら表示
      pagetop.fadeIn();
    } else {
      pagetop.fadeOut();
    }
  });
  pagetop.click(function () {
    $('body,html').animate({
      scrollTop: 0
    }, 500); //0.5秒かけてトップへ移動
    return false; //イベントの伝播を止める
  });
//scrolltopbtnend
  

  






});
//scrolltopbtnend
