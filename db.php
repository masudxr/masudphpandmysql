<?php include 'header.html';?>


<?php
// Connection the DB
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "dbTable";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);

 if(!$conn){
    echo "Connection was failed";
 }

 echo "Connection was successful. Now Explore Your World ";

 ?>
