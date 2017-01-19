<?php
include ("config.php");
session_start(); //starting session

if($_SERVER['REQUEST_METHOD'] == "POST") {
    $uid= $_POST['username'];
    $passwd = $_POST['password'];
   $username = mysqli_real_escape_string($db,$uid);
    $password = mysqli_real_escape_string($db, $passwd);
    
    //for student
    
    $sql = "SELECT id FROM login_students WHERE ID='$username' and PASSWORD='$password'";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    
    //for faculty
    
    $sql1 =  "SELECT id FROM login_faculty WHERE ID='$username' and PASSWORD='$password'";
    $result1 = mysqli_query($db, $sql1);
    $row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);
    
    $count = mysqli_num_rows($result);
   $count1 = mysqli_num_rows($result1);
   
    // no. of rows should be 1 if a username exists and the password matches
     if($count == 1 ){//|| $count1 == 1){
       $_SESSION['login_user'] = $username;
        header("Location:welcomepage.php");
    } else if ($count1 == 1) {
        $_SESSION['login_user'] = $username;
        header("Location:Mainpage_faculty.php");
    } else {
          echo " <script> alert(\"Your login id or password is invalid!\") </script>";    
        }
    }
?>

<!DOCTYPE HTML>
<html>
<head>

<title>Login BlueSlate</title>
<link rel="stylesheet" href="mystyle.css" />
<script src="js/papaparse.js"></script>
<script src="js/jquery-3.1.1.js"></script>

<script src="js/myjavascript.js"></script>
<script type='text/javascript'></script>
</head>
<body class="loginpage">
  <center>
        <h1 class="logoname">BlueSlate</h1>
</center>
<center>
    <form action=""  method="post">
    <div >
    <p class="loginf">
         <input type="text" id="loginfonts" placeholder="Username" name="username" required />
      </p>
      <p class="loginf">
      <input type="password" id="loginfonts" placeholder="Password" name="password" required/>
      <!--/center--></p>
  </div>
       <input type="submit" class="loginbut" name="login" value = "Submit"/>
      </form>
   </center>
</body>
</html>
