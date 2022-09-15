function select_city(){
  const city_name = event.target.querySelector(".city_name").innerText
  console.log(city_name)
  document.querySelector("#from_city").value = city_name
  document.querySelector("#from_results").style.display = "none"
  // document.querySelector("#from_results").classList.add('hide')
  document.querySelector("#from_results").innerHTML = ""
}











