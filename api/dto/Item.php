<?php
/**
 * Created by IntelliJ IDEA.
 * User: Piyumi Shashikala
 * Date: 7/16/2019
 * Time: 9:04 PM
 */

class Item
{
    private $itemCOde;
    private $itemName;
    private $itemqty;
    private $itemPrice;

    /**
     * Item constructor.
     * @param $itemCOde
     * @param $itemName
     * @param $itemqty
     * @param $itemPrice
     */
    public function __construct($itemCOde, $itemName, $itemqty, $itemPrice)
    {
        $this->itemCOde = $itemCOde;
        $this->itemName = $itemName;
        $this->itemqty = $itemqty;
        $this->itemPrice = $itemPrice;
    }

    /**
     * @return mixed
     */
    public function getItemCOde()
    {
        return $this->itemCOde;
    }

    /**
     * @param mixed $itemCOde
     */
    public function setItemCOde($itemCOde): void
    {
        $this->itemCOde = $itemCOde;
    }

    /**
     * @return mixed
     */
    public function getItemName()
    {
        return $this->itemName;
    }

    /**
     * @param mixed $itemName
     */
    public function setItemName($itemName): void
    {
        $this->itemName = $itemName;
    }

    /**
     * @return mixed
     */
    public function getItemqty()
    {
        return $this->itemqty;
    }

    /**
     * @param mixed $itemqty
     */
    public function setItemqty($itemqty): void
    {
        $this->itemqty = $itemqty;
    }

    /**
     * @return mixed
     */
    public function getItemPrice()
    {
        return $this->itemPrice;
    }

    /**
     * @param mixed $itemPrice
     */
    public function setItemPrice($itemPrice): void
    {
        $this->itemPrice = $itemPrice;
    }


}