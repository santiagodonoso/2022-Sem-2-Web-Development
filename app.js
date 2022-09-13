function toogle_menu(){
  const domMenu = document.getElementById('menu');
  if(domMenu.classList.contains('active')){
    domMenu.classList.remove('active')
  }else{
    domMenu.classList.add('active')
  }    
}
