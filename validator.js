function validate(){
  // console.log("validating...")
  const txt_name = document.querySelector("#txt_name")
  if( txt_name.value.length < 2 ){
    txt_name.style.backgroundColor = "red"
  }
  if( txt_name.value.length > 20 ){
    txt_name.style.backgroundColor = "red"
  }  
}