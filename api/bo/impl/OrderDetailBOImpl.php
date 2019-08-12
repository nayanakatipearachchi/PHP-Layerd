<?php
/**
 * Created by IntelliJ IDEA.
 * User: Piyumi Shashikala
 * Date: 7/26/2019
 * Time: 8:49 PM
 */


require_once __DIR__ . "/../OrderDetailBO.php";
require_once __DIR__ . "/../../db/DBConnection.php";
require_once __DIR__ . "/../../dto/OrderDetail.php";
require_once __DIR__ . "/../../repo/impl/OrderDetailSRepoImpl.php";

class OrderDetailBOImpl implements OrderDetailBO
{

    public function addOrderDetails(OrderDetail $orderDetail): bool
    {
        $connection = (new DBConnection())->getConnection();
        $orderDetailRepo = new OrderDetailSRepoImpl();
        $orderDetailRepo->setConnection($connection);
        return $orderDetailRepo->addOrderDetails($orderDetail);
    }
}