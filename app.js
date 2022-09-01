async function get_flights(){
  const conn = await fetch('api-search.php?from_city=a')
  const flights = await conn.json()
  console.log(flights)
  flights.forEach( flight => {
    console.log(flight)
  } )
}