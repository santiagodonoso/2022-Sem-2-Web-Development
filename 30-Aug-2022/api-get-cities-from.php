<?php
$cities = [
  ['city_name'=>'Copenhagen', 'city_image'=>'copenhagen.jpg', 'city_population'=>'2000000'],
  ['city_name'=>'Oslo', 'city_image'=>'oslo.jpg', 'city_population'=>'1000000'],
  ['city_name'=>'Miami', 'city_image'=>'miami.jpg', 'city_population'=>'4000000']
];
echo json_encode($cities);

