<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nayana
 * Date: 7/29/2019
 * Time: 11:21 AM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Pos System</title>
    <link rel="stylesheet" href="css/simple-sidebar.css" type="text/css">
    <link rel="stylesheet" href="css/indexStyle.css" type="text/css">
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
    +
</head>
<body>
<div class="d-flex" id="wrapper">

    <  <!-- Sidebar -->
    <div class="bg-dark border-right" style="color: white" id="sidebar-wrapper">
        <div class="sidebar-heading">Dashboard</div>
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
        <div class="m_content" style="padding-top: 20px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <a href="#">
                            <div class="small-box color1">
                                <div class="inner">
                                    <h3>150</h3>

                                    <p>Orders</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-shopping-bag"></i>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <a href="#">
                            <div class="small-box color2">
                                <div class="inner">
                                    <h3>100</h3>

                                    <p>Customers</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-user"></i>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <a href="#">
                            <div class="small-box color3">
                                <div class="inner">
                                    <h3>85%</h3>

                                    <p>Growth</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-chart-bar"></i>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <a href="#">
                            <div class="small-box color4">
                                <div class="inner">
                                    <h3>1.5k</h3>

                                    <p>Items</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-cubes"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="container row">
                    <div class="col-lg-6 col-xs-12">

                        <div class="m_shadow">

                            <img src="img/hgffh.png" width="400px">
                            <!--<canvas id="myChart"></canvas>-->

                        </div>
                    </div>
                    <div class="col-lg-6 col-xs-12">
                        <div class="m_shadow">
                            <img src="img/Weekly-Sales-Chart-2.jpg" width="400px">
                        </div>
                    </div>
                </div>
            </div>

            <!-------------------------Footer------------------------->
            <footer class="modal-footer">
                <span>© 2019 Runaya POS System. All rights reserved.</span>
            </footer>
        </div>


    </div>

</div>

</body>
<script src="js/common.js"></script>
</html>


