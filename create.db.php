<?php
// Connection with DB
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "dbTable";
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

 if(!$conn){
    echo "Connection was failed";
 }else{
    echo "Connection was successful. Now Explore Your World <br>";
 }

// Create DB using Code
// $sql = "CREATE DATABASE dbTable";
// $result = mysqli_query($conn, $sql);


// if(!$result){
//     echo "DB was created Successfully";
//  }else{
//     echo "DB creation Failed <br>";
//  }

// Create DB Table using Code
$sql = "CREATE TABLE `phptrip` (`no` INT(6) NOT NULL AUTO_INCREMENT , `name` VARCHAR(12) NOT NULL , `age` INT(6) NOT NULL, `gender` VARCHAR(12) NOT NULL, PRIMARY KEY(`no`))";

$result = mysqli_query($conn, $sql);

if(!$result){
    echo "DB Table was created Successfully";
 }else{
    echo "DB Table creation Failed <br>".mysqli_error($conn);
 }

 ?>
 <?php include 'footer.php';?>