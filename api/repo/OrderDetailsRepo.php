<?php
/**
 * Created by IntelliJ IDEA.
 * User: Piyumi Shashikala
 * Date: 7/26/2019
 * Time: 8:50 PM
 */

require_once __DIR__ . "/../dto/OrderDetail.php";
interface OrderDetailsRepo
{
    public function setConnection(mysqli $connection): void;

    public function addOrderDetails(OrderDetail $orderDetail): bool;

}