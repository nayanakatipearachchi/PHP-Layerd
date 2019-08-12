<?php
/**
 * Created by IntelliJ IDEA.
 * User: Piyumi Shashikala
 * Date: 7/26/2019
 * Time: 8:47 PM
 */

require_once __DIR__ . "/../db/DBConnection.php";
require_once __DIR__ . "/../dto/Orders.php";

interface OrderBO
{
    public function addOrder(Orders $orders): bool;
}