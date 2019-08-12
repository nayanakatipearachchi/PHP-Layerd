<?php
/**
 * Created by IntelliJ IDEA.
 * User: Piyumi Shashikala
 * Date: 7/26/2019
 * Time: 8:54 PM
 */

class Orders
{
    private $orderID;
    private $custID;
    private $order_Date;

    /**
     * Orders constructor.
     * @param $orderID
     * @param $custID
     * @param $order_Date
     */
    public function __construct($orderID, $custID, $order_Date)
    {
        $this->orderID = $orderID;
        $this->custID = $custID;
        $this->order_Date = $order_Date;
    }

    /**
     * @return mixed
     */
    public function getOrderID()
    {
        return $this->orderID;
    }

    /**
     * @param mixed $orderID
     */
    public function setOrderID($orderID): void
    {
        $this->orderID = $orderID;
    }

    /**
     * @return mixed
     */
    public function getCustID()
    {
        return $this->custID;
    }

    /**
     * @param mixed $custID
     */
    public function setCustID($custID): void
    {
        $this->custID = $custID;
    }

    /**
     * @return mixed
     */
    public function getOrderDate()
    {
        return $this->order_Date;
    }

    /**
     * @param mixed $order_Date
     */
    public function setOrderDate($order_Date): void
    {
        $this->order_Date = $order_Date;
    }



}