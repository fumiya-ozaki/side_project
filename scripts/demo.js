document.addEventListener('DOMContentLoaded', function(){ //DOMloadStart
  "use script"
//sliderstart***********************************************************************
const slider1 = new Swiper ('#swiper-1', {
  // Optional parameters
  loop: true, //ループ
  autoplay:{ //自動再生
    delay:2000, //再生間隔
    disableOnInteraction: false, //ユーザー操作後の自動再生 false=on
  },
  effect: "slide",  //スライドエフェクト "slide", "fade", "cube", "coverflow","flip"
  speed:3000,  //スライドスピード
  // grabCursor:true, //グラブポインター
  direction: "horizontal",  // 横スライド'horizontal' 縦スライド'vertical'
  initialSlide:0, //初期スライド 0スタート
  spaceBetween: 50, //スライド間余白
  slidesPerView: 1,  //１枚のスライドに入れる画像枚数
  slidesPerGroup: 1,  //１回のスライドで流れる画像枚数
  // freeMode: true, // slideの境目をなくす
  // freeModeMomentum:true,  //slide慣性有無
  // freeModeMomentumRatio: 1, //slide慣性距離 数字が大きいほど強い
  // freeModeMomentumVelocityRatio: 1, //slide慣性速度 数字が大きいほど強い
  allowTouchMove: false, //スマホスワイプ/pcドラッグ許可falseでナビやサムネイルのみの操作
  //pagination
  pagination: {
    el: '.swiper-pagination',
    type: 'bullets',  // "bullets", "fraction", "progressbar"
    dynamicBullets:'true', //bullets使用時オプション
    // clickable: false, //falseでクリック無効化
  },
  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
})


const slider2 = new Swiper ('#swiper-2', {
  // Optional parameters
  loop: true, //ループ
  autoplay:{ //自動再生
    delay:2000, //再生間隔
    disableOnInteraction: false, //ユーザー操作後の自動再生 false=on
  },
  effect: "fade",  //スライドエフェクト "slide", "fade", "cube", "coverflow","flip"
  speed:3000,  //スライドスピード
  direction: "horizontal",  // 横スライド'horizontal' 縦スライド'vertical'
  initialSlide:0, //初期スライド 0スタート
  spaceBetween: 0, //スライド間余白
  slidesPerView: 1,  //１枚のスライドに入れる画像枚数
  slidesPerGroup: 1,  //１回のスライドで流れる画像枚数
  allowTouchMove: false, //スマホスワイプ/pcドラッグ許可falseでナビやサムネイルのみの操作
  //pagination
  pagination: {
    el: '.swiper-pagination',
    type: 'fraction',  // "bullets", "fraction", "progressbar"
    dynamicBullets:'true', //bullets使用時オプション
  },
  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
})

const slider3 = new Swiper ('#swiper-3', {
  // Optional parameters
  loop: true, //ループ
  autoplay:{ //自動再生
    delay:2000, //再生間隔
    disableOnInteraction: false, //ユーザー操作後の自動再生 false=on
  },
  effect: "cube",  //スライドエフェクト "slide", "fade", "cube", "coverflow","flip"
  speed:3000,  //スライドスピード
  direction: "horizontal",  // 横スライド'horizontal' 縦スライド'vertical'
  initialSlide:0, //初期スライド 0スタート
  spaceBetween: 0, //スライド間余白
  slidesPerView: 1,  //１枚のスライドに入れる画像枚数
  slidesPerGroup: 1,  //１回のスライドで流れる画像枚数
  allowTouchMove: false, //スマホスワイプ/pcドラッグ許可falseでナビやサムネイルのみの操作
  //pagination
  pagination: {
    el: '.swiper-pagination',
    type: 'bullets',  // "bullets", "fraction", "progressbar"
    dynamicBullets:'true', //bullets使用時オプション
  },
  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
})

const slider4 = new Swiper ('#swiper-4', {
  // Optional parameters
  loop: true, //ループ
  autoplay:{ //自動再生
    delay:2000, //再生間隔
    disableOnInteraction: false, //ユーザー操作後の自動再生 false=on
  },
  effect: "flip",  //スライドエフェクト "slide", "fade", "cube", "coverflow","flip"
  speed:1000,  //スライドスピード
  direction: "horizontal",  // 横スライド'horizontal' 縦スライド'vertical'
  initialSlide:0, //初期スライド 0スタート
  spaceBetween: 0, //スライド間余白
  slidesPerView: 1,  //１枚のスライドに入れる画像枚数
  slidesPerGroup: 1,  //１回のスライドで流れる画像枚数
  allowTouchMove: false, //スマホスワイプ/pcドラッグ許可falseでナビやサムネイルのみの操作
  //pagination
  pagination: {
    el: '.swiper-pagination',
    type: 'bullets',  // "bullets", "fraction", "progressbar"
    dynamicBullets:'true', //bullets使用時オプション
  },
  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
})

const slider5 = new Swiper ('#swiper-5', {
  // Optional parameters
  loop: true, //ループ
  autoplay:{ //自動再生
    delay:2000, //再生間隔
    disableOnInteraction: false, //ユーザー操作後の自動再生 false=on
  },
  effect: "slide",  //スライドエフェクト "slide", "fade", "cube", "coverflow","flip"
  speed:3000,  //スライドスピード
  direction: "horizontal",  // 横スライド'horizontal' 縦スライド'vertical'
  initialSlide:1, //初期スライド 0スタート
  spaceBetween: 20, //スライド間余白
  slidesPerView: 3,  //１枚のスライドに入れる画像枚数
  slidesPerGroup: 2,  //１回のスライドで流れる画像枚数
  allowTouchMove: false, //スマホスワイプ/pcドラッグ許可falseでナビやサムネイルのみの操作
  //pagination
  pagination: {
    el: '.swiper-pagination',
    type: 'bullets',  // "bullets", "fraction", "progressbar"
    dynamicBullets:'true', //bullets使用時オプション
  },
  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  scrollbar: {
    el: '.swiper-scrollbar',
    hide: true,
  },
})

const slider6 = new Swiper ('#swiper-6', {
  // Optional parameters
  loop: true, //ループ
  autoplay:{ //自動再生
    delay:2000, //再生間隔
    disableOnInteraction: false, //ユーザー操作後の自動再生 false=on
  },
  effect: "coverflow",  //スライドエフェクト "slide", "fade", "cube", "coverflow","flip"
  speed:3000,  //スライドスピード
  initialSlide:1, //初期スライド 0スタート
  slidesPerView: 3,  //１枚のスライドに入れる画像枚数
  slidesPerGroup: 1,  //１回のスライドで流れる画像枚数
  allowTouchMove: false, //スマホスワイプ/pcドラッグ許可falseでナビやサムネイルのみの操作
  //pagination
  pagination: {
    el: '.swiper-pagination',
    type: 'bullets',  // "bullets", "fraction", "progressbar"
    dynamicBullets:'true', //bullets使用時オプション
  },
  // Navigation arrows
  
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  pagination: {
    el: '.swiper-pagination',
    type: 'bullets',  // "bullets", "fraction", "progressbar"
    dynamicBullets:'true', //bullets使用時オプション
  },
})
//sliderend***********************************************************************


//textanimationstart***********************************************************************
const el = document.querySelector('#aniChar2');
chars = el.innerHTML.trim().split("").reduce(function(acc, curr){
  curr = curr.replace(/\s+/, '&nbsp;');
  return `${acc}<span class="stagChar" style="display:inline-block">${curr}</span>`
},"");
el.innerHTML = chars;

const tlCharAnimation = new TimelineMax();
tlCharAnimation.fromTo('#aniChar1', 1, { x:-50 , y:-50, opacity:0, scale:.9 },{ x:0, y:0, opacity:1, scale:1 })
.staggerFrom('.stagChar', .5, { y:-20, opacity:0, ease: Bounce.easeOut }, 0.1)
  .staggerFrom('.block-animation', 1.5, { y: -50, opacity:0, ease:Elastic.easeOut }, 1);  
  
  $('.playButton').click(function(){
    tlCharAnimation.play(false);
  });
  
  $('.pauseButton').click(function(){
    tlCharAnimation.pause();
  });
  
  $('.resumeButton').click(function(){
    tlCharAnimation.resume();
  });
  
  $('.reverseButton').click(function(){
    if (tlCharAnimation.reversed()) {
      tlCharAnimation.play();
    } else {
      tlCharAnimation.reverse();
    }
  });
  
  $('.slowButton').click(function(){
    tlCharAnimation.timeScale(0.5);
  });
  
  $('.fastButton').click(function(){
    tlCharAnimation.timeScale(1.5);
  });
  
  $('.seekButton').click(function(){
    tlCharAnimation.seek(3);
  });
  
  $('.progressButton').click(function(){
    tlCharAnimation.progress(0.5);
  });
  //textanimationend***********************************************************************
  
  const tabLabels = document.querySelectorAll('.tab-demo__label li a');
  const tabContents = document.querySelectorAll('.tab-demo__content');

  tabLabels.forEach(function(clickedLabel){
    clickedLabel.addEventListener('click',function(e){
      e.preventDefault();
      tabLabels.forEach(function(label){
        label.classList.remove('active');
      });
      clickedLabel.classList.add('active');
      tabContents.forEach(function(content){
        content.classList.remove('active');
      });
      document.getElementById(clickedLabel.dataset.id).classList.add('active');
    })
  })

  $(function(){
    "use script"
    //１つだけ開くアコーディオン
    //タイトルクリックで開閉
    $('#acordion1 dt').on('click',function(){
      $(this).next('dd').slideToggle();
      $(this).siblings('dt').removeClass('active');
      $('.acordion__content1').not($(this).next('.acordion__content1')).slideUp();
      $(this).toggleClass("active");
    });
    
    //閉じるボタンで閉
    $('.closeBtn1').on('click',function(){
      $(this).parent('dd').slideToggle();
      $(this).siblings('dt').removeClass('active');
      $('.acordion__content1').not($(this).next('.acordion__content1')).slideUp();
      $('#acordion1 dt').removeClass('active');
    });

    //複数開くアコーディオン
    //タイトルクリックで開閉
    $('#acordion2 dt').on('click', function() {
      $(this).next().slideToggle();
      $(this).toggleClass("active");
    });

    //閉じるボタンで閉
    $('.closeBtn2').on('click',function(){
      $(this).parent('dd').slideToggle();
      $(this).parent().parent().find('dt').removeClass('active');
    })
  });


//   // modalstart
  const modalAreaAction = () => document.getElementById("modalArea").classList.toggle("active"),
  maskAction = () =>  document.getElementById("mask").classList.toggle("active"),
  modalArry = ["modal1","modal2","modal3","modal4"],
  modalBtnArry = ["modalOpen1","modalOpen2","modalOpen3","modalOpen4"];
  
  const modalOpen = function(el){
    for (let i=0; i<modalArry.length; i++){
      document.getElementById(modalBtnArry[i]).addEventListener("click",function(){
        modalAreaAction();
        maskAction();
        document.getElementById(modalArry[i]).classList.add("active");
      })
    }
  }
  modalOpen()
  
  const modalClose = function(el){
    document.getElementById(el).addEventListener("click",function(){
      modalAreaAction();
      maskAction();
      for (let i=0; i< modalArry.length; i++){
        document.getElementById(modalArry[i]).classList.remove("active");
      }
    })
  }
  modalClose("modalClose")
  modalClose("mask")
//   // modalend



},false);//DOMloadEnd
            