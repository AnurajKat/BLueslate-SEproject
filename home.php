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
    <body class="homie">
        <h1 class="quoteunquote"><?php
                $user_id=$login_session;
                $tot_count=23;
                $q1=mt_rand(1,$tot_count);
                $q2=mt_rand(1,$tot_count);
                $get_quote_query= mysqli_query($db2,"select quote_me, author from quotes where Q_ID=$q1");
                while($quote_whole = mysqli_fetch_array($get_quote_query,MYSQLI_ASSOC)) {
                    $quote_content=$quote_whole['quote_me'];
                    $quote_author=$quote_whole['author'];
                    echo "$quote_content   -$quote_author";
                    }
                ?>
        </h1>
        <br/>
        <h1 class="quoteunquote"><?php
        $get_quote_query1= mysqli_query($db2,"select quote_me, author from quotes where Q_ID=$q2");
                while($quote_whole1 = mysqli_fetch_array($get_quote_query1,MYSQLI_ASSOC)) {
                    $quote_content1=$quote_whole1['quote_me'];
                    $quote_author1=$quote_whole1['author'];
                    echo "$quote_content1   -$quote_author1";
                }
            ?>
        </h1>
        </body>
</html>
        