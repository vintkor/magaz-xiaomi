<?php

require_once '../Database.php';

/**
 * Created by PhpStorm.
 * User: MediaOne
 * Date: 16.08.2016
 * Time: 14:25
 */
class Admin extends Database
{
    public function __construct()
    {
        parent::__construct();
    }

    public function add_into_db($query) {
        $this->pdo->exec($query);
    }

    public function add_product(array $data) {
        $query_add_product = "INSERT INTO product (name, category, price) VALUES ('Продукт 5', '1', '444.44')";
        self::add_into_db($query_add_product);
    }
}

$admin = new Admin();
$query_get_all_products = 'SELECT * FROM product';
$product_list = $admin->get_all_items($query_get_all_products);

$query_get_all_category = 'SELECT * FROM category';