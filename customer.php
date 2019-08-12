<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nayana
 * Date: 7/29/2019
 * Time: 11:20 AM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Place Order - Pos System</title>
    <link rel="stylesheet" href="css/simple-sidebar.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/84a9e6584a.js"></script>
</head>
<body>
<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-dark border-right" style="color: white" id="sidebar-wrapper">
        <div class="sidebar-heading">Place Order</div>
        <div class="list-group list-group-flush">
            <a href="index.php" class="list-group-item list-group-item-action bg-light">Dashboard</a>
            <a href="customer.php" class="list-group-item list-group-item-action bg-light">Customer</a>
            <a href="item.php" class="list-group-item list-group-item-action bg-light">Item</a>
            <a href="placeorder.php" class="list-group-item list-group-item-action bg-light">Place Order</a>
            <a href="report.php" class="list-group-item list-group-item-action bg-light">Reports</a>
        </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">

                <span id="ClickId" style="background-color: white;color: black">
  <i class="fas fa-bars fa-3x"></i>
  </span>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <h1> POS System</h1>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Dashboard <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="customer.php">Customer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="item.php">Item</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="placeorder.php">Place Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="report.php">Report</a>
                    </li>

                </ul>
            </div>
        </nav>

        <div class="container-fluid">
            <div class="card m-1" style="height: fit-content;!important;">
                <div class="card-body">
                    <form>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="OrderDate">Order Date</label>
                                    <input type="date" class="form-control" id="OrderDate"
                                           placeholder="Enter Order Date">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label for="orderID">Order ID</label>
                                <input type="text" class="form-control" id="orderID"
                                       placeholder="Enter Order ID">
                            </div>
                            <div class="col">
                                <label for="custID">Customer ID</label>
                                <select class="form-control" id="custID">
                                </select>
                            </div>
                            <div class="col">
                                <label for="custName">Customer Name</label>
                                <input type="text" class="form-control" id="custName" disabled
                                       placeholder="Enter Customer Name ">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="itemCode">Item Code</label>
                                    <select class="form-control" id="itemCode">
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <label for="itemName">Item Name</label>
                                <input type="text" class="form-control" id="itemName" disabled
                                       placeholder="Enter Item Name">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label for="unitPrice">Unit Price</label>
                                <input type="text" class="form-control" id="unitPrice" disabled
                                       placeholder="Enter unit Price">
                            </div>
                            <div class="col">
                                <label for="OrderedQty">Ordered Qty</label>
                                <input type="text" class="form-control" id="OrderedQty"
                                       placeholder="Enter Ordered Qty ">
                            </div>
                            <div class="col">
                                <label for="qtyonHand">Qty On Hand</label>
                                <input type="text" class="form-control" id="qtyonHand" disabled
                                       placeholder="Enter qtyonhand ">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col">
                                <div class="form-group align-content-center">
                                    <button type="button" id="btnaddcart" class="btn btn-outline-primary col-2">
Add to Cart
</button>
                                    <button type="button" id="btndel" class="btn btn-outline-danger col-2">
Remove
                                    </button>
                                    <button type="button" id="btnchange" class="btn btn-outline-success col-2">
Change
                                    </button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>

                <div class="card m-1" style="height: fit-content;!important;">
                    <div class="card-header">
                        <h3><i class="fa fa-users"></i>Cart Table</h3>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-responsive-xl table-hover display">
                            <thead>
                            <tr>
                                <th>Item Code</th>
                                <th>Item Name</th>
                                <th>Ordered Qty</th>
                                <th>Price</th>
                                <th>amount</th>
                            </tr>
                            </thead>
                            <tbody id="cartTable">
<!--                            <tr>-->
<!--                                <td>I001</td>-->
<!--                                <td>Suger</td>-->
<!--                                <td>12</td>-->
<!--                                <td>100</td>-->
<!--                                <td>1000</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td>I003</td>-->
<!--                                <td>Rice</td>-->
<!--                                <td>122</td>-->
<!--                                <td>100</td>-->
<!--                                <td>1200</td>-->
<!--                            </tr>-->
                            </tbody>
                        </table>

                    </div>
                </div>


<!--                <label for="fullAmount">Full Amount</label>-->
<!--                <input type="text" class="form-control" id="fullAmount"-->
<!--                       placeholder="Enter Full Amount">-->
                <pre>


                </pre>


                <div class="form-row">
                    <div class="col">
                        <div class="form-group align-content-center">
                            <button type="button" id="subpayment"  class="btn btn-outline-primary col-2">
Submit Payment
</button>
                            <button type="button"  class="btn btn-outline-danger col-2">
Cancel
                            </button>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>

</body>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="dist/controller/placeorderController.js"></script>
<script src="js/common.js"></script>
</html>

