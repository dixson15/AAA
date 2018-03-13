<?php
// include "databaseConnection.php";
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


  if(isset($_POST['login'])) {
 
    $userID = $_POST['userID'];
    $password = $_POST['password'];
    $role = '';

    $sql = " SELECT * FROM users WHERE userID = '$userID' AND password = '$password' ";
    try {
            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_array($result,MYSQLI_BOTH)) {

                  if ($row['userID'] == $userID && $row['password'] == $password ) {
                    $_SESSION['userID'] = $row['userID'];
                    $_SESSION['role'] = $row['role'];

                      if ($row['role'] == 'admin') 
                        header("Location: ../pages/adminDashboard.html");
                        //echo userID
                
                      if ($row['role'] == 'manager') 
                        header("Location: ../pages/managerDashboard.html");
                        //echo $userID;
                  
                      if ($row['role'] == 'ordinary') {
                        header("Location: ../pages/ordinaryDashboard.html"); }
                        //echo 'hello regular user';  
                  }

                  else {
                      echo 'Data not found!';   
                  }
          }
    } 
    catch(Exception $ex) {
      $_SESSION["errorType"] = "danger";
      $_SESSION["errorMsg"] = $ex->getMessage();
    }
       
  } //ENDIF

?>