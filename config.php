<?php
 define ('db_server' , 'localhost:3306');
 define ('db_username' , 'root');
 define ('db_password' , '');
 define ('db_database' , 'login_portal_db');
 define ('db_database2', 'blue_slate');
 $db = mysqli_connect(db_server, db_username, db_password, db_database);
 $db2= mysqli_connect(db_server, db_username, db_password, db_database2);
 ?>