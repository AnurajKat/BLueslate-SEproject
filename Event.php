<?php 
 include ('session.php');
 $get_event_query= mysqli_query($db2,"SELECT * from college_events order by DATE ASC");
 ?>
 <!DOCTYPE HTML>
 <html style="overflow:auto">
 <head>
    <title>Events</title>
    <link rel="stylesheet" href="mystyle.css"/>
    <script src="js/myjavascript.js"></script>
 </head>
 <body class="cantEven">
    <center>
        <h2 id="upcoming_event_title">Upcoming Events</h2>
     </center>
    <table style="width:100%"  >  
          <?php 
            $count =0;
            while($current_event = mysqli_fetch_array($get_event_query, MYSQLI_ASSOC)) {
                $event_name = $current_event['EVENTS'];
                $event_date = $current_event['DATE'];
                if($count % 3== 0)
                {
                   echo "</tr><tr><th>" ;
                    $count = $count + 1;
          ?>
                    <button class="cardEvent" style=" display:inline;padding-top:0px">
                    <h3 class="title_name"><b><?php echo $event_name ?> </b></h3>
                    <h4 class="date_content"> <?php echo $event_date ?></h4>
                    </button>
                    </br>   
                    </th> 
                 <?php      
                }
                else 
                { 
                    echo "<th>"; 
                    $count = $count +1; ?>
                    <button class="cardEvent" style=" display:inline;padding-top:0px">
                    <h3 class="title_name"><b><?php echo $event_name ?> </b></h3>
                    <h4 class="date_content"><?php echo $event_date ?></h4>
                    </button>
                    </br> 
                    </th>
            <?php    }
         } ?>
        </table>             
 </body>
 </html>