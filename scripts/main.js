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


//modalopenclose
const modalAreaOpen = () => document.getElementById("modalArea").classList.add("active");
const modalAreaClose = () => document.getElementById("modalArea").classList.remove("active");
const maskAdd = () =>  document.getElementById("mask").classList.add("active");
const maskRemove = () =>  document.getElementById("mask").classList.remove("active");

document.getElementById("modalOpen1").addEventListener("click",function(){
  modalAreaOpen();
  maskAdd();
  document.getElementById("modal1").classList.add("active");
})
document.getElementById("modalOpen2").addEventListener("click",function(){
  modalAreaOpen();
  maskAdd();
  document.getElementById("modal2").classList.add("active");
})
document.getElementById("modalOpen3").addEventListener("click",function(){
  modalAreaOpen();
  document.getElementById("modal3").classList.add("active");
  maskAdd();
})
document.getElementById("modalOpen4").addEventListener("click",function(){
  modalAreaOpen();
  document.getElementById("modal4").classList.add("active");
  maskAdd();
})

document.getElementById("modalClose").addEventListener("click",function(){
  modalAreaClose();
  maskRemove();
  document.getElementById("modal1").classList.remove("active");
  document.getElementById("modal2").classList.remove("active");
  document.getElementById("modal3").classList.remove("active");
  document.getElementById("modal4").classList.remove("active");
})
document.getElementById("mask").addEventListener("click",function(){
  modalAreaClose();
  maskRemove();
  document.getElementById("modal1").classList.remove("active");
  document.getElementById("modal2").classList.remove("active");
  document.getElementById("modal3").classList.remove("active");
  document.getElementById("modal4").classList.remove("active");
})
//modalopenclose

window.addEventListener("scroll",function(){
  let scroll = document.documentElement.scrollTop;
  document.getElementById("scrollValue").textContent = scroll;
  if(scroll > 300){
    document.querySelector("main").classList.add("test");
  }else{
    document.querySelector("main").classList.remove("test");
  }
})


