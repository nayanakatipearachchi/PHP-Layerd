<?php
/**
 * Created by IntelliJ IDEA.
 * User: Piyumi Shashikala
 * Date: 7/16/2019
 * Time: 6:47 PM
 */


require_once __DIR__ . "/../dto/Customer.php";

interface CustomerRepo
{
    public function setConnection(mysqli $connection): void;

    public function addCustomer(Customer $customer): bool;

    public function updateCustomer(Customer $customer): bool;

    public function deleteCustomer(string $id): bool;

    public function allCustomer(): array ;


}