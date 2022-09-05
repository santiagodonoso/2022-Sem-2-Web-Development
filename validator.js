
// ##############################
function validate(callback){
  const form = event.target
  const validate_error = "rgba(240, 130, 240, 0.2)"
  document.querySelectorAll("[data-validate]",form).forEach(function(element){ 
    element.classList.remove("validate_error")
    element.style.backgroundColor = "white"
  })
  document.querySelectorAll("[data-validate]",form).forEach( function(element){
    switch(element.getAttribute("data-validate")){
      case "str":
        if( element.value.length < parseInt(element.getAttribute("data-min")) || 
            element.value.length > parseInt(element.getAttribute("data-max")) 
        ){
          element.classList.add("validate_error")
          element.style.backgroundColor = validate_error
        }
      break;
      case "int":
        if( ! /^\d+$/.test(element.value)  ||
            parseInt(element.value) < parseInt(element.getAttribute("data-min")) || 
            parseInt(element.value) > parseInt(element.getAttribute("data-max"))
        ){
          element.classList.add("validate_error")
          element.style.backgroundColor = validate_error
        }
      break;      
      case "email":
        let re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if( ! re.test(element.value.toLowerCase()) ){
          element.classList.add("validate_error")
          element.style.backgroundColor = validate_error
        }
      break;
      case "regex":       
        var regex = new RegExp(element.getAttribute("data-regex"))
        // var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/
        if( ! regex.test(element.value) ){
          console.log(element.value)
          console.log("regex error")
          element.classList.add("validate_error")
          element.style.backgroundColor = validate_error
        }
      break;
      case "match":
        if( element.value != document.querySelector(`[name='${element.getAttribute("data-match-name")}']`, form).value ){
          element.classList.add("validate_error")
          element.style.backgroundColor = validate_error
        }
      break;
    }
  })
  if( ! document.querySelector(".validate_error", form) ){ callback(); return }
  document.querySelector(".validate_error", form).focus()
}

// ##############################
function clear_validate_error(){
  // event.target.classList.remove("validate_error")
  // event.target.value = ""
}
