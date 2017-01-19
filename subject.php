<?php
    include('session.php');
    $current_subject = $_SESSION['current_subject'];
    ?>
<DOCTYPE! HTML>
<html>
<head>
    <link rel="stylesheet" href="mystyle.css"/>
    <script src="js/jquery-3.1.1.js"></script>
    <script src="js/myjavascript.js"></script>
    <title><?php echo $current_subject; ?> </title>
    
</head>
<body class="cantEven">
    <center>
        <h1 class="logoname"><?php echo "$current_subject"; ?></h1>
    </center>
</body>
</html>