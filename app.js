async function get_flights(){
  // Get the data from the input field
  const search_for = document.querySelector("#search_flight_from").value
  const conn = await fetch('api-search.php?from_city='+search_for)
  const flights = await conn.json()
  console.log(flights)
  let all_flights = ""
  const original_flight_blueprint = `
    <div class="flight">
      <div class="from_container">
        <p>#from_city#</p>
        <p>Departure: #departure_time#</p>
      </div>
      <div class="to_container">
        <p>#to_city#</p>
        <p>Arrival: #arrival_time#</p>
      </div>
    </div>`
  flights.forEach( flight => {
    console.log(flight)
    let div_flight = original_flight_blueprint
    div_flight = div_flight.replace('#from_city#', flight.from_city_name)
    div_flight = div_flight.replace("#departure_time#", flight.departure_time)
    all_flights += div_flight
  })
  document.querySelector("#flights").insertAdjacentHTML('afterbegin', all_flights);


}