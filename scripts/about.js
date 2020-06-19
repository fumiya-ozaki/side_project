document.addEventListener('DOMContentLoaded', function(){
  
  const controller = new ScrollMagic.Controller();
  for (let i = 0; i < 5; i++) {
    const myScene = new ScrollMagic.Scene({
      triggerElement: `#scrollTrigger${i}`
    })
    .setClassToggle(`#scrollelement${i}`,'fade-in')
    .addTo(controller);
  }

},false);