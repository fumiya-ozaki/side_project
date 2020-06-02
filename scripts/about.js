document.addEventListener('DOMContentLoaded', function(){

  // modalstart
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
  // modalend

},false);