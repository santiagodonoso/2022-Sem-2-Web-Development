async function get_flights(){
  const conn = await fetch('api-search.php')
  const flights = await conn.json()
  console.log(flights)
}