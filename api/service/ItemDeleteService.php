<?php
/**
 * Created by IntelliJ IDEA.
 * User: Piyumi Shashikala
 * Date: 7/9/2019
 * Time: 11:28 PM
 */

require_once __DIR__ . "/../bo/impl/ItemBOImpl.php";
require_once __DIR__ . "/../dto/Item.php";

$itemBO = new ItemBOImpl();


$method = $_SERVER["REQUEST_METHOD"];

switch ($method) {
    case "POST":
        $itemCOde = $_POST['itemCOde'];
        $itemName = $_POST['itemName'];
        $itemqty = $_POST['itemqty'];
        $itemPrice = $_POST['itemPrice'];
        $item=new Item($itemCOde,$itemName,$itemqty,$itemPrice);
        echo $itemBO->deleteItem($itemCOde);
        break;

    case "GET":
//        echo json_encode($itemBO->allItem());
        break;

}