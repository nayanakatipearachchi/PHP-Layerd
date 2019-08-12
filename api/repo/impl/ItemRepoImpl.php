<?php
/**
 * Created by IntelliJ IDEA.
 * User: Piyumi Shashikala
 * Date: 7/16/2019
 * Time: 9:02 PM
 */

require_once __DIR__ . "/../ItemRepo.php";
require_once __DIR__ . "/../../dto/Item.php";
require_once __DIR__ . "/../../db/DBConnection.php";

class ItemRepoImpl implements ItemRepo
{
    private $connection;

    /**
     * ItemRepoImpl constructor.
     */
    public function __construct()
    {
        $this->connection = (new DBConnection())->getConnection();
    }

    public function setConnection(mysqli $connection): void
    {
        $this->connection = $connection;
    }


    public function addItem(Item $item): bool
    {
        $resp = $this->connection->query("INSERT INTO item VALUES ('{$item->getItemCOde()}','{$item->getItemName()}','{$item->getItemqty()}','{$item->getItemPrice()}')");
        return ($resp > 0);
    }
    public function updateItem(Item $item): bool
    {
        $resp = $this->connection->query("update item set item_name='{$item->getItemName()}',price='{$item->getItemPrice()}',qty='{$item->getItemqty()}' where item_code='{$item->getItemCOde()}'");
        return ($resp > 0);
    }

    public function deleteItem(string $id): bool
    {
        $resp = $this->connection->query("delete from item where item_code='{$id}' ");
        return ($resp > 0);
    }

    public function allItem(): array
    {
        $resultset=$this->connection->query("SELECT * FROM Item ");
        return $resultset->fetch_all();
    }


}