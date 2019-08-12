<?php
/**
 * Created by IntelliJ IDEA.
 * User: Piyumi Shashikala
 * Date: 7/16/2019
 * Time: 6:43 PM
 */

require_once __DIR__ . "/../CustomerBO.php";
require_once __DIR__ . "/../../db/DBConnection.php";
require_once __DIR__ . "/../../dto/Customer.php";
require_once __DIR__ . "/../../repo/impl/CustomerRepoImpl.php";

class CustomerBOImpl implements CustomerBO
{

    public function addCustomer(Customer $customer): bool
    {
        $connection = (new DBConnection())->getConnection();
        $customerRepo = new CustomerRepoImpl();
        $customerRepo->setConnection($connection);
       return $customerRepo->addCustomer($customer);
    }

    public function allCustomer(): array
    {
        $connection=(new DBConnection())->getConnection();
        $customerRepo= new CustomerRepoImpl();
        $customerRepo->setConnection($connection);
        return $customerRepo->allCustomer();
    }

    public function deleteCustomer(string $id): bool
    {
        $connection=(new DBConnection())->getConnection();
        $customerRepo= new CustomerRepoImpl();
        $customerRepo->setConnection($connection);
        return $customerRepo->deleteCustomer($id);
    }

    public function updateCustomer(Customer $customer): bool
    {
        $connection=(new DBConnection())->getConnection();
        $customerRepo= new CustomerRepoImpl();
        $customerRepo->setConnection($connection);
        return $customerRepo->updateCustomer($customer);
    }
}