<?php 
include('session.php');
$get_company_query= mysqli_query($db2,"select * from companies where COMP_ID=10");
$companies= array();
$company_name='';
$company_arrival_date;
while ($current_company = mysqli_fetch_array($get_company_query,MYSQLI_ASSOC)) {
    $company_name = $current_company['COMPANY'];
    $company_arrival_date = $current_company['DATE'];
    $companies[$company_name] = $company_arrival_date;
}

?>
<!DOCTYPE HTML>
<html style="overflow:auto">
<head>
    <link rel="stylesheet" href="mystyle.css"/>
    <script src="js/jquery-3.1.1.js"></script>
    <script src="js/myjavascript.js"></script>
    <title>Placements</title>
    </head>
    <body class="cantEven">
       <center> <h2 id="upcoming_event_title">Upcoming Interviews</h2>
           </center>
        <button class="cardEvent" style = "padding-top:3px;width:97%; height:100px">
        <h3 class="title_name" style="vertical-align:middle"><?php echo "$company_name &emsp;&emsp; $company_arrival_date "; ?></h3></button> 
           
    </body>
</html>