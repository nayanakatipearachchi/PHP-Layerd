<?php
/**
 * Created by IntelliJ IDEA.
 * User: Piyumi Shashikala
 * Date: 7/16/2019
 * Time: 8:45 PM
 */
require_once __DIR__ . "/../bo/impl/CustomerBOImpl.php";
require_once __DIR__ . "/../dto/Customer.php";


$customerBO = new CustomerBOImpl();

$method = $_SERVER["REQUEST_METHOD"];

switch ($method) {
    case "POST":
        $customerID = $_POST['customerID'];
        $custFirstName = $_POST['custFirstName'];
        $custLastName = $_POST['custLastName'];
        $custAddress = $_POST['custAddress'];
        $custSalary = $_POST['custSalary'];

//        $customer=new Customer($customerID,$custFirstName,$custLastName,$custAddress,$custSalary);
        echo $customerBO->deleteCustomer($customerID);
        break;

    case "GET":
//        echo json_encode($customerBO->allCustomer());
        break;

}