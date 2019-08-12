<?php
/**
 * Created by IntelliJ IDEA.
 * User: Piyumi Shashikala
 * Date: 7/26/2019
 * Time: 8:53 PM
 */


require_once __DIR__ . "/../OrderDetailsRepo.php";
require_once __DIR__ . "/../../dto/OrderDetail.php";
require_once __DIR__ . "/../../db/DBConnection.php";

class OrderDetailSRepoImpl implements OrderDetailsRepo
{
    private $connection;

    /**
     * CustomerRepoImpl constructor.
     * @param $connection
     */
    public function __construct()
    {
        $this->connection = (new DBConnection())->getConnection();
    }

    public function setConnection(mysqli $connection): void
    {
        $this->connection = $connection;
    }

    public function addOrderDetails(OrderDetail $orderDetail): bool
    {
        $resp = $this->connection->query("insert into orderdetails values
            ('{$orderDetail->getOrderID()}',
            '{$orderDetail->getItemCode()}',
            '{$orderDetail->getQuantity()}',
            '{$orderDetail->getUnitPrice()}')");
        return ($resp > 0);
    }
}