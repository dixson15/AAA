<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
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
    <div class="container" align="center">
   <h1>Add Account</h1>
 

  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add an Account
</button>
</select>
</div>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
        <form method="POST" action="">
          <label name="accountNumber">Account Number</label>
          <input class="form-control" name ="acctNumber"type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');" id="accountNumber" required>
          <label>Account Name</label>
          <input class="form-control" name ="acctName" id="accountName" required>
            <select class="custom-select" name="acctType">
              <option selected>Account Type</option>
              <option value="Asset">Asset</option>
              <option value="Liability">Liability</option>
              <option value="Equity">Equity</option>
              <option value="Expense">Expense</option>
              <option value="Revenue">Revenue</option>
            </select>
            <select class="custom-select" name="acctSubType">
              <option selected>Account SubType</option>
              <option value="Equipment">Equipment</option>
              <option value="Cash">Cash</option>
              <option value="Note Payable">Note Payable</option>
            </select>
            <select class="custom-select" name="acctNormalSide">
              <option selected>Normal side</option>
              <option value="Right">Right</option>
              <option value="Left">Left</option>
            </select>
            <label >Initial Balance</label>
          <input class="form-control" name="initialBalance" id="accountName" required>
          <select class="custom-select" name="status">
              <option selected>Account status</option>
              <option value="Active">Active</option>
              <option value="Inactive">Inactive</option>
            </select>

            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="submit"class="btn btn-primary">Submit</button>

          </form>
      </div>
      
  
    </div>
  </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>