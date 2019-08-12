<?php
/**
 * Created by IntelliJ IDEA.
 * User: Piyumi Shashikala
 * Date: 7/16/2019
 * Time: 9:01 PM
 */


require_once __DIR__ . "/../ItemBO.php";
require_once __DIR__ . "/../../db/DBConnection.php";
require_once __DIR__ . "/../../dto/Item.php";
require_once __DIR__ . "/../../repo/impl/ItemRepoImpl.php";

class ItemBOImpl implements ItemBO
{

    public function addItem(Item $item): bool
    {
        $connection = (new DBConnection())->getConnection();
        $itemRepo = new ItemRepoImpl();
        $itemRepo->setConnection($connection);
        return $itemRepo->addItem($item);
    }

    public function updateItem(Item $item): bool
    {
        $connection = (new DBConnection())->getConnection();
        $itemRepo = new ItemRepoImpl();
        $itemRepo->setConnection($connection);
        return $itemRepo->updateItem($item);
    }

    public function deleteItem(string $id): bool
    {
        $connection = (new DBConnection())->getConnection();
        $itemRepo = new ItemRepoImpl();
        $itemRepo->setConnection($connection);
        return $itemRepo->deleteItem($id);
    }

    public function allItem(): array
    {
        $connection = (new DBConnection())->getConnection();
        $itemRepo = new ItemRepoImpl();
        $itemRepo->setConnection($connection);
        return $itemRepo->allItem();
    }
}