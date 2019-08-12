<?php
/**
 * Created by IntelliJ IDEA.
 * User: Piyumi Shashikala
 * Date: 7/26/2019
 * Time: 8:54 PM
 */


require_once __DIR__ . "/../OrderRepo.php";
require_once __DIR__ . "/../../dto/Orders.php";
require_once __DIR__ . "/../../db/DBConnection.php";

class OrderRepoImpl implements OrderRepo
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

    public function addOrder(Orders $orders): bool
    {
        $resp = $this->connection->query("insert into orders values
            ('{$orders->getOrderID()}',
            '{$orders->getCustID()}',
            '{$orders->getOrderDate()}')");
        return ($resp > 0);
    }

    public function updateOrder(Orders $orders): bool
    {
        // TODO: Implement updateOrder() method.
    }

    public function deleteOrder(string $id): bool
    {
        // TODO: Implement deleteOrder() method.
    }

    public function allOrder(): array
    {
        // TODO: Implement allOrder() method.
    }
}