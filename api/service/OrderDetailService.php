<?php
/**
 * Created by IntelliJ IDEA.
 * User: Piyumi Shashikala
 * Date: 7/26/2019
 * Time: 8:47 PM
 */

require_once __DIR__ . "/../bo/impl/OrderDetailBOImpl.php";
require_once __DIR__ . "/../dto/OrderDetail.php";


$OrderDetailBO = new OrderDetailBOImpl();

$method = $_SERVER["REQUEST_METHOD"];
switch ($method) {
    case "POST":
        $orderID = $_POST['orderID'];
        $itemCode = $_POST['itemCode'];
        $quantity = $_POST['quantity'];
        $unitPrice = $_POST['unitPrice'];

        $orderdetail=new OrderDetail($orderID,$itemCode,$quantity,$unitPrice);
        echo $OrderDetailBO->addOrderDetails($orderdetail);

        break;

    case "GET":

        break;

}