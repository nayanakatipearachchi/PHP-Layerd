<?php
/**
 * Created by IntelliJ IDEA.
 * User: Piyumi Shashikala
 * Date: 7/26/2019
 * Time: 8:48 PM
 */


require_once __DIR__ . "/../OrderBO.php";
require_once __DIR__ . "/../../db/DBConnection.php";
require_once __DIR__ . "/../../dto/Orders.php";
require_once __DIR__ . "/../../repo/impl/OrderRepoImpl.php";

class OrderBOImpl implements OrderBO
{

    public function addOrder(Orders $orders): bool
    {
        $connection = (new DBConnection())->getConnection();
        $orderRepo = new OrderRepoImpl();
        $orderRepo->setConnection($connection);
        return $orderRepo->addOrder($orders);
    }
}