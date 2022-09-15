<?php
$languages_allowed = ['en', 'dk', 'sp'];
$language = $_GET['language'] ?? 'en';
if( ! in_array($language, $languages_allowed) ){
  $language = 'en';
}
$dictionary=[
  'en_houses'=>'houses',
  'dk_houses'=>'huser',
  'en_cars'=>'cars',
  'dk_cars'=>'biler',
  'sp_houses'=>'casas',
  'sp_cars'=>'carros'  
]
?>
