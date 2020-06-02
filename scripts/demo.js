document.addEventListener('DOMContentLoaded', function(){

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

},false);
