<?php
/**
 * Created by IntelliJ IDEA.
 * User: Piyumi Shashikala
 * Date: 7/16/2019
 * Time: 6:47 PM
 */


require_once __DIR__ . "/../CustomerRepo.php";
require_once __DIR__ . "/../../dto/Customer.php";
require_once __DIR__ . "/../../db/DBConnection.php";

class CustomerRepoImpl implements CustomerRepo
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

    public function addCustomer(Customer $customer): bool
    {
        $resp = $this->connection->query("INSERT INTO Customer VALUES ('{$customer->getCustomerID()}','{$customer->getCustFirstName()}','{$customer->getCustLastName()}','{$customer->getCustAddress()}','{$customer->getCustSalary()}')");
        return ($resp > 0);
    }

    public function allCustomer(): array
    {
        $resultset=$this->connection->query("SELECT * FROM Customer ");
        return $resultset->fetch_all();
    }

    public function deleteCustomer(string $id): bool
    {
        $resp = $this->connection->query("delete from customer where cid='{$id}' ");
        return ($resp > 0);
    }

    public function updateCustomer(Customer $customer): bool
    {
        $resp = $this->connection->query("update  Customer  set  fname='{$customer->getCustFirstName()}',lname='{$customer->getCustLastName()}',address='{$customer->getCustAddress()}',salary='{$customer->getCustSalary()}' where cid='{$customer->getCustomerID()}'");
        return ($resp > 0);
    }
}