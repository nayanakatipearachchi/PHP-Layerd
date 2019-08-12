<?php
/**
 * Created by IntelliJ IDEA.
 * User: Piyumi Shashikala
 * Date: 7/26/2019
 * Time: 8:49 PM
 */


require_once __DIR__ . "/../dto/Orders.php";

interface OrderRepo
{

    public function setConnection(mysqli $connection): void;

    public function addOrder(Orders $orders): bool;

    public function updateOrder(Orders $orders): bool;

    public function deleteOrder(string $id): bool;

    public function allOrder(): array ;
}