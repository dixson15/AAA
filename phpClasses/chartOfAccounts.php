<!DOCTYPE html>
<html lang="en">
 <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">



    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<?php
include "Configuration.php";

$object = new Configuration;
$object -> setHostName('localhost');
$object -> setHostUserName('root');
$object -> setHostPassword('');
$object -> setDatabaseName('AAAcounting');

$serverName = $object -> getHostName();
$userName = $object->getHostUserName();
$serverPassword = $object -> getHostPassword();
$dbName =$object -> getDatabaseName();
$conn = mysqli_connect($serverName, $userName, $serverPassword, $dbName);
$session = session_start();

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if (isset($_POST['submit'])) {
    $accountNumber = $_POST['acctNumber'];
    $accountName = $_POST['acctName'];
    $accountType = $_POST['acctType'];
    $accountSubType = $_POST['acctSubType'];
    $accountNormalSide = $_POST['acctNormalSide'];
    $accountBalance = $_POST['initialBalance'];
    $accountStatus = $_POST['status'];

    $sql = " INSERT INTO accounts (acctID, acctNumber, acctName, acctCategory, acctSubCategory, NormalSide,initialBalance,acctStatus) 
        VALUES('', '$accountNumber', '$accountName', '$accountType', '$accountSubType', '$accountNormalSide', '$accountBalance','$accountStatus')";
    $result = mysqli_query($conn, $sql);
    echo "'<script>alert('You are successfully registered')</script>'";
    if ($sql) {
        header("location: welcome.php?message=Account created successfully");
    }
    mysqlI_close($conn);
}

?>
    <div id="wrapper">

        <!-- Navigation (upper right corner)-->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">



                <!--                                                       MESSAGES HERE                             -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>

                        </li>
                        <li class="divider"></li>
                        <li>

                        </li>
                        <li class="divider"></li>

                        <li class="divider"></li>

                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown  -->


                <!--                                                       TASKS HERE                              -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>

                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">

                            </a>
                        </li>
                        <li class="divider"></li>

                        <li class="divider"></li>

                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>

                    <!-- /.dropdown-tasks -->
                </li>

               <!-- /.dropdown -->


                <!--                                                       ALERTS HERE                             -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>

                        </li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->


                <!-- User account here -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw" href=" ../phpClasses.php/logout.php"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->



                <!--                                                       LEFT SIDE MENU HERE                            -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="#"><i class="fa  fa-users   fa-fw"></i>Admin</a>
                        </li>
                        <li>
                            <a href="chartOfAccounts.html"><i class="fa fa-table fa-fw"></i> Chart of Accounts</a>
                        </li>
                        <li>
                           <a href="#"><i class="fa fa-book fa-fw"></i> Accounts</a>
                        </li>
                         <li>
                           <a href="#"><i class="fa fa-edit fa-fw"></i> Journalize</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Logs</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>



                 <!--                                                      CHART OF ACCOUNTS TABLE HERE                          -->

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Chart of Accounts</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">

                    <div class="chart-of-accounts">
                      <!-- Trigger the modal with a button -->
                      <button type="button" class="btn btn-outline btn-info" data-toggle="modal" data-target="#myModal" data-backdrop="static" data-keyboard="false" >Add Account</button>

                      <!-- Modal -->
                      <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">

                          <!-- Modal content-->
                            <div class="modal-content chart-accounts-modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title" align="center">Add an Account to your Chart of Accounts</h4>
                            </div>

<!--                                All input tags need to be inside the form tab Example: <form method="POST">  Here ...</form> to use php for fetching data to the backend-->
                                <form method="POST" action="">

                                    <div class="modal-dialog">

                                        <div class="modal-dialog">
                                    <label for="accountSubCSelect">Account Category</label>
                                    <select id="accountTypeSelect" name="acctType" class="form-control" name = "accountCategory">
                                        <option value = "Asset">Asset</option>
                                        <option value = " Liability">Liability</option>
                                        <option value = "Equity">Equity</option>
                                        <option value = "Expense">Expense</option>
                                        <option value = "Revenue">Revenue</option>
                                    </select>

                                    <label for="accountSubCSelect">Account Subcategory</label>
                                    <select id="accountSubCSelect" name="acctSubType"class="form-control" name="acctSubCat">
                                        <option value="Cash">Cash</option>
                                        <option value ="acctReceivable">Accounts Receivable</option>
                                        <option value ="equipement">Equipment</option>
                                        <option value ="acctPybl">Accounts Payable</option>
                                        <option value = "notePybl">Notes Payable</option>
                                    </select>

                                    <label name="accountNumber">Account Number</label>
                                    <input class="form-control" name ="acctNumber"type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');" id="accountNumber" required>
                                    <label>Account Name</label><br>
                                    <input class="form-control" name ="acctName" id="accountName" required></div><hr>
                                        <div class="modal-dialog">
                                    <label for="accountNormalSide">Normal Side</label>
                                    <select id="accountNormalSide" class="form-control" name="normalSide">
                                        <option value="right">Right</option>
                                        <option value="left">Left</option>
                                    </select>

                                    <label>Initial Balance</label></li>
                                    <input class="form-control" name="initialBalance" type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');" id="" required>
                                    <label for="accountStatus">Account Status</label>

                                    <select id="accountStatus" name="accountStatus"class="form-control">
                                        <option value ="Active">Active</option>
                                        <option value = "Inactive">Inactive</option>
                                    </select>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="submit" name = "submit"class="btn btn-outline btn-success" id="addAccount-buttn" >submit</button>
                                        <button type="button" class="btn btn-outline btn-success" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-outline btn-danger" id= "delAccount-buttn" onclick="cancelDialog()">Cancel</button>
                                    </div>

                                </form>

                            </div>
                          </div>
                        </div>
                      </div>
                      </div>

                        <div class="panel-body">

                            <table width="100%" class="table table-striped  table-hover" id="chart-of-accounts-table">
                                <thead>
                                    <tr class ="chart-of-accounts-header-row">
                                        <th>Account Code</th>
                                        <th>Account Name</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                            </table>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->



        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->



    <!-- Page-Level Demo Scripts - Tables - Use for reference   see sb-admin-2.js-->

</body>

</html>
