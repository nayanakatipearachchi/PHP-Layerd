<?php
/**
 * Created by IntelliJ IDEA.
 * User: Piyumi Shashikala
 * Date: 7/26/2019
 * Time: 8:46 PM
 */

require_once __DIR__ . "/../bo/impl/OrderBOImpl.php";
require_once __DIR__ . "/../dto/Orders.php";


$orderBO = new OrderBOImpl();

$method = $_SERVER["REQUEST_METHOD"];
switch ($method) {
    case "POST":
        $orderID = $_POST['orderID'];
        $custID = $_POST['custID'];
        $order_Date = $_POST['order_Date'];

        $order=new Orders($orderID,$custID,$order_Date);
        echo $orderBO->addOrder($order);

        break;

    case "GET":

        break;

}