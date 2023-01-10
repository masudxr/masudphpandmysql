<?php include 'header.html';?>
<?php include 'db.php';?>

<?php

//  $sql = "CREATE TABLE `phptrip` (`no` INT(6) NOT NULL AUTO_INCREMENT , `name` VARCHAR(12) NOT NULL , `age` INT(6) NOT NULL, `gender` VARCHAR(12) NOT NULL, PRIMARY KEY(`no`))";

$sql = "INSERT INTO `phptrip` (`name`, `age`, `gender`) VALUES ('Rasel', 30, 'Male')";
$result = mysqli_query($conn, $sql);

if(!$result){
    echo "Insert Data into the Table was Successfully";
 }else{
    echo "Insert Data into the Table failed<br>".mysqli_error($conn);
 }

 ?>
 <?php include 'footer.php';?>
