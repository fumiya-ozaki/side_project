  document.addEventListener('DOMContentLoaded', function(){  //DOMloadstart
  
//hamburgermenustart
  class MobileMenu{
    constructor(){
      this.DOM = {};
      this.DOM.btn = document.querySelector('.mobile-menu__btn');
      this.DOM.cover = document.querySelector('.mobile-menu__cover');
      this.DOM.container = document.querySelector('#global-container');
      this.eventType = this._getEventType();
      this._addEvent();
    }
    _getEventType(){
      return window.ontouchstart ? 'touchstart' : 'click';
    }
    _toggle(){
      this.DOM.container.classList.toggle('menu-open');
    }
    _addEvent(){
      this.DOM.btn.addEventListener(this.eventType,this._toggle.bind(this));
      this.DOM.cover.addEventListener(this.eventType,this._toggle.bind(this));
    }
  }
  new MobileMenu();
//hamburgermenuend

//scrolltopbtnstart
jQuery(function() {
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
});
//scrolltopbtnend

//serchbtnstart
  document.getElementById("searchBtn").addEventListener("click",function(){
    document.getElementById("searchForm").classList.toggle("active");
  });
  
  document.getElementById("langSelector").addEventListener("click",function(){
    document.getElementById("langBox").classList.toggle("active");
  })
//serchbtnend

},false);  //DOMloadend

