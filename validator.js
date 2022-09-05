function validate(){
  // console.log("validating...")
  const txt_name = document.querySelector("#txt_name")
  if( txt_name.value.length < name_min_len ){
    txt_name.style.backgroundColor = "red"
  }
  if( txt_name.value.length > name_max_len ){
    txt_name.style.backgroundColor = "red"
  }  
}