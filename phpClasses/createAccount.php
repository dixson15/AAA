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
    $accountStatus = $_POST['acctStatus'];

    $sql = " INSERT INTO accounts (acctID, acctNumber, acctName, acctCategory, acctSubCategory, NormalSide,initialBalance,acctStatus) 
        VALUES ('', '$accountNumber', '$accountName', '$accountType', '$accountSubType', '$accountNormalSide', '$accountBalance','$accountStatus')";
              $result = mysqli_query($conn, $sql);
      echo "'<button type='submit' class='btn btn-outline btn-success' id='addAccount-buttn' onclick='addRow()'>submit</button>'";
              if ($sql) {
                header("location: chartOfAccounts.php?message=Account created successfully");
                  //header('Location: welcome.php');
                  exit;
              }
              mysqli_close($conn);
  }

?>