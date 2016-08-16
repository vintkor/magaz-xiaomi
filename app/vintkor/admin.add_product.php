<?php

require_once 'Admin.php';

$query_add_product = "INSERT INTO product (name, category, price) VALUES ('Продукт 5', '1', '444.44')";
$admin->add_into_db($query_add_product);
