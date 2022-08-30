function show_from_results(){
  const the_input = document.querySelector("#from-input")
  if( the_input.value.length > 0 ){
    document.querySelector("#from-results").style.display = "block"
    get_cities_from()
  }else{
    document.querySelector("#from-results").style.display = "none"
  }
  // document.querySelector("#from-results").style.display = "block"
}
 
// ##############################
function hide_from_results(){
  document.querySelector("#from-results").style.display = "none"
}

// ##############################
async function get_cities_from(){
  let conn = await fetch('api-get-cities-from')
  let data = await conn.json() // [{"city_name":"a"},{"city_name":"b"}]
  let div_city = `<div class="from-city">
                    <img src="city.png">
                    <p>xxx</p>
                  </div>`    
  let all_cities = ""
  //        0                1                    2
  // [{"city_name":"a"},{"city_name":"b"}, {"city_name":"c"}]
  for( let i = 0; i < data.length; i++ ){
    let city = data[i] // {"city_name":"a"}
    let city_name = city.city_name
    console.log(city_name)
    let copy_div_city = div_city
    copy_div_city = copy_div_city.replace("xxx", city_name)
    all_cities += copy_div_city
  }               
  console.log(data)
  document.querySelector("#from-results").insertAdjacentHTML("afterbegin", all_cities)
}














