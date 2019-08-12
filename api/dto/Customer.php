<?php
/**
 * Created by IntelliJ IDEA.
 * User: Piyumi Shashikala
 * Date: 7/16/2019
 * Time: 6:40 PM
 */

class Customer
{
    private $customerID;
    private $custFirstName;
    private $custLastName;
    private $custAddress;
    private $custSalary;

    /**
     * Customer constructor.
     * @param $customerID
     * @param $custFirstName
     * @param $custLastName
     * @param $custAddress
     * @param $custSalary
     */
    public function __construct($customerID, $custFirstName, $custLastName, $custAddress, $custSalary)
    {
        $this->customerID = $customerID;
        $this->custFirstName = $custFirstName;
        $this->custLastName = $custLastName;
        $this->custAddress = $custAddress;
        $this->custSalary = $custSalary;
    }

    /**
     * @return mixed
     */
    public function getCustomerID()
    {
        return $this->customerID;
    }

    /**
     * @param mixed $customerID
     */
    public function setCustomerID($customerID)
    {
        $this->customerID = $customerID;
    }

    /**
     * @return mixed
     */
    public function getCustFirstName()
    {
        return $this->custFirstName;
    }

    /**
     * @param mixed $custFirstName
     */
    public function setCustFirstName($custFirstName)
    {
        $this->custFirstName = $custFirstName;
    }

    /**
     * @return mixed
     */
    public function getCustLastName()
    {
        return $this->custLastName;
    }

    /**
     * @param mixed $custLastName
     */
    public function setCustLastName($custLastName)
    {
        $this->custLastName = $custLastName;
    }

    /**
     * @return mixed
     */
    public function getCustAddress()
    {
        return $this->custAddress;
    }

    /**
     * @param mixed $custAddress
     */
    public function setCustAddress($custAddress)
    {
        $this->custAddress = $custAddress;
    }

    /**
     * @return mixed
     */
    public function getCustSalary()
    {
        return $this->custSalary;
    }

    /**
     * @param mixed $custSalary
     */
    public function setCustSalary($custSalary)
    {
        $this->custSalary = $custSalary;
    }




}