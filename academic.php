<?php

include('session.php');
$attendance_list= array();
$subjects1= array("not a subject", "Software Engineering", "Microprocessor & Microcontroller","Design & Analysis of Algorithms", "Theory of Computer Science", "Digital Signal Processing", "Programming for Analytics", "Computer Graphics"); 
$get_rollno=mysqli_query($db,"select ROLL_NUMBER from login_students where ID=$login_session");
$rollno="";
while( $got_roll = mysqli_fetch_array($get_rollno,MYSQLI_ASSOC)){
      $rollno = implode("",$got_roll);
}
 $user_attendance = mysqli_query($db2,"select * from attendance where ROll_NUMBER='$rollno'");
$sum=0;$i=0;
while($got_attendance = mysqli_fetch_array($user_attendance,MYSQLI_ASSOC)) {
     for($i = 1 ; $i < 8 ; $i++) {
         $current_subject =  $subjects1[$i];
         $percentage = $got_attendance[$current_subject];
         $sum += $percentage;
         $attendance_list[$current_subject]= $percentage;
     } 
 }
$average = $sum / 7;
$average = round($average);

    ?>

<html style="overflow:auto">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
<head>
<title>Academics</title>
    <link rel="stylesheet" href="mystyle.css"/>
    <script src="js/jquery-3.1.1.js"></script>
    <script src="js/myjavascript.js"></script>
</head>
<body class="cantEven" >
    <!--    I don't now why but the first or the rest of the card's position is off. this can be seen on chrome browser in pc 
    16-10-16: It is gone,the off position is gone. I dont know how but it's gone. I had just increased the size of the box and i'ts gone
    12-11-16 : I linked the cards to the database but the alignment problem started occurring again, but this time the misalignment is huge.
    14-11-16 : set the width of the card to 97%. Noe every cards occupies one row-->
     <div class="cardcontainer" >
        <div class="cards"  id="attendance_card" style="height:225px"  >
            <div class="text_heading_card">Attendance</div>
            <div class="text_card" >
                <br/>
                <a  class="average_attendance" onClick="toggleattendance()">Overall : <?php echo $average; ?>%</a>
                <table id="attendance_table_only" style=" display:none; height:80% ">
                    <?php
                        foreach($attendance_list as $key_subject => $percentage_attendance)
                        {
                         echo "<tr><th class=\"watt\"><h3 class=\"title_name\"> $key_subject</h3><th>";
                            echo"<th class=\"att\"><h3 class=\"title_name\"> $percentage_attendance </h3></th></tr>";
                        }
                    ?>
                </table>
                
            </div>
        </div>
        <div class="cards" style="height:225px" id="announcement_card" onClick="toggleheight()">
            <div class="text_heading_card" >Announcements</div><br/>
                <div class="text_card" >
                <?php
                 $user_id= $login_session;
                 $sql_query= mysqli_query($db,"select stream from login_students where ID='$login_session'");
                        $v1="";
                 while ($current_stream = mysqli_fetch_array($sql_query,MYSQLI_ASSOC)) {
                    $v1=$current_stream['stream'];
                 }
                    $get_announcements=mysqli_query($db2,"select topic, ID, announcement_content from announcements where stream='$v1'");
                     $announcement_arrray = new SplFixedArray(mysqli_num_rows($get_announcements) * mysqli_num_fields($get_announcements));
                     $count3=0;
                    while($topic = mysqli_fetch_array($get_announcements,MYSQLI_ASSOC)) {
                         $count_temp=0;
                            $announcement_array[$count3 + 0]= $topic['topic'];
                            $announcement_array[$count3 + 1]= $topic['ID'];
                            $announcement_array[$count3 + 2]= $topic['announcement_content'];
                        echo "<label id=\"l_$count3\"  ";
                         echo ">";
                        echo "$announcement_array[$count3] " ;  echo "</label><br/>";
                        $count_temp= $count3 + 2;
                        echo "<textarea id='label_$count3' style='display:none'>$announcement_array[$count_temp]</textarea> ";
                  
                $count3 = $count3 +1;
                    echo "<br/><br/>"; }?> 
         </div>
       </div>
        <div class="cards" style="height:225px">
            <div class="text_heading_card">Submission</div>
            <div class="text_card">
            <ul  style=" color:#203E3D; list-style-type:none; text-align:left">
                <li><a  href=# class="subject_list">Assignment : Computer Graphics</a></li>
                <li><a href=# class="subject_list">Experiment 4 : Design &amp; Analysis of Algorithms</a></li>
                <li><a  href=# class="subject_list">Experiment 7 : Microprocessor &amp; Microcontroller</a></li>
                <li><a  href=# class="subject_list">Assignment 2: Digital Signal Processing</a></li>
                <li><a href=# class="subject_list">Expermient 6 : Research Methodology</a></li>
             </ul></div>
        </div>
        <div class="cards" style="height:225px">
            <div class="text_heading_card">Course Docs.</div>
            <div class="text_card">
                <?php 
                $get_subjects =mysqli_query($db2, "select subject from subjects where stream='$v1'");
                 ?>
            <ul style="list-style-type:none; text-align:left">
                <?php
                    while($current_subject =mysqli_fetch_array($get_subjects,MYSQLI_ASSOC) ) 
                    {
                        $sub = $current_subject['subject'];
                        echo "<li><a"; 
                        $current_subject = $sub;
                        echo " href=\"subject.php\"  class=\"subject_list\"> $sub </a></li> ";
                    }
                ?>   
                </ul>
            </div>
         </div>
        <div class="cards" style="height:225px">
            <div class="text_heading_card">Performance</div>
            <div class="text_card">Sorry. No data available.</div>
        </div>
        </div>
</body>
</html>