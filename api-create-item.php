<?php
require_once __DIR__.'/_x.php';

_validate_item_name();

$item = ['item_id'=>uniqid(), 'item_name'=>'A', 'item_price'=>10];

_respond($item);





