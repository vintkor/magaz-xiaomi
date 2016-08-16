<?php

require_once 'Database.php';

$base = new Database();

$get_all_products = 'SELECT * FROM product';
$products = $base->get_all_items($get_all_products);

$category_query = 'SELECT `name`, `code` FROM category';
$category_name = $base->get_all_items($category_query);

$tmp_array = array();
for($i=0; $i<count($category_name); $i++) {
    foreach ($category_name[$i] as $item) {
        $tmp_array[$i] = '.' . $item;
    }
}

$list_cat = implode(", ", $tmp_array);

echo $cat;
