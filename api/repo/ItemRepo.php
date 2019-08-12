<?php
/**
 * Created by IntelliJ IDEA.
 * User: Piyumi Shashikala
 * Date: 7/16/2019
 * Time: 9:01 PM
 */

require_once __DIR__ . "/../dto/Item.php";

interface ItemRepo
{
    public function setConnection(mysqli $connection): void;
    public function addItem(Item $item): bool;
    public function updateItem(Item $item): bool;
    public function deleteItem(string $id): bool;
    public function allItem(): array ;
}