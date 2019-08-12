<?php
/**
 * Created by IntelliJ IDEA.
 * User: Piyumi Shashikala
 * Date: 7/26/2019
 * Time: 8:48 PM
 */

require_once __DIR__ . "/../db/DBConnection.php";
require_once __DIR__ . "/../dto/OrderDetail.php";

interface OrderDetailBO
{
    public function addOrderDetails(OrderDetail $orderDetail): bool;
}