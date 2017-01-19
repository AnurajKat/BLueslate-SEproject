<?php

include('session.php');
    ?>
<!DOCTYPE HTML>
    <html>
    <head>
        <title>Welcome</title>
        <link rel="stylesheet" href="mystyle.css"/>
        <script src="js/myjavascript.js"></script>
       
       </head>
    <body class="welcome">
         <div class="titlebar">
          <span style="float:left">
              <h2 class="TitletoDaLeft">
                    BlueSlate</h2> 
            </span>
             <span style="float:right">
                 <button type="button" onclick="gotoLogin()" style="background:transparent;border:none;outline:none"><div class="logoutl"></div></button></span>
         
        </div>
            <!--  navigation sidebar -->
         <div id="mysidenav" class="sidenav">
             <p id="userName">
                <label>
                    <?php 
                    $name1="";
                    $rowname = mysqli_query($db,"select NAME from login_students where ID='$login_session'");
                    while($name2 = mysqli_fetch_array($rowname,MYSQLI_ASSOC)){
                    echo $name2['NAME']; } 
                    ?>
                 </label> 
             </p>
            <a href="home.php" target="selectedfromside">Home</a>
            <!--- <a onclick="alertuser()">Locker</a>  --->
            <a href="academic.php" target="selectedfromside">Academics</a>
            <a href="Placements.php" target="selectedfromside">Placements</a>
            <a href="Event.php" target="selectedfromside">Events</a>
            
        </div>
        <!--    iframe for displaying pages     -->
        <div class="mainframe">
            <iframe  src="home.php" name="selectedfromside" >
            </iframe>
        </div>
        </body>
    </html>