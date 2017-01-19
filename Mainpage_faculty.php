<?php
include('session.php');
?>

<html>
<head>
    <title> Welcome <?php  $name1="";
                    $rowname = mysqli_query($db,"select NAME from login_faculty where ID='$login_session'");
                    while($name2 = mysqli_fetch_array($rowname,MYSQLI_ASSOC)){
                    echo $name2['NAME']; }
        ?></title>
    <link rel="stylesheet" href="mystyle.css"/>
    <script src="js/jquery-3.1.1.js"></script>
    <script src="js/myjavascript.js"></script>
    </head>
    <body class="welcome">
        <div class="titlebar">
            <span style="float:left">
                <h2 class="TitletoDaLeft">Blue Slate</h2>
        </span>
    <span style = "float:right">
       <p> <label class="nameisname">
         <!--   <?php  $name1="";
                    $rowname = mysqli_query($db,"select NAME from login_faculty where ID='$login_session'");
                    while($name2 = mysqli_fetch_array($rowname,MYSQLI_ASSOC)){
                    echo $name2['NAME']; }
            ?>-->
           </label>
        <div class="logoutl"></div>
        </p>
        </span>
    </div>
    </body>
</html>