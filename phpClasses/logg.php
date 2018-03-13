<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
    width: 30%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 30%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 50%;
    }
}
</style>
</head>
<body>
<?php include "userLogin.php" ?>
<h2 align = 'center'>AAA</h2>


  <div class="imgcontainer" align = 'center'>
   <p>LOGIN HERE</p>
  </div>

  <div class="container" align = 'center'>
    <form method = "POST" action="userLogin.php">
    <input type="text" placeholder="Enter Username" name="userID" required><br>
    <input type="password" name="password" placeholder="Enter Password"  required><br>
        
    <button type="submit" name = "login">Login</button><br>
    <span>Forgot <a href="#">password?</a></span>
    </form>
  </div>

<!-- $password = "";

for ( $i = 0; $i < 8; $i++ ) {
  $password .= chr ( rand ( 0, 25 ) + 97 );
} -->

</body>
</html>