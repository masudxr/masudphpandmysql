<?php include 'header.html';?>
<?php include 'db.php';?>

<?php


// $sql = "SELECT * FROM `phptrip`";
// $result = mysqli_query($conn, $sql);

// $num =  mysqli_num_rows($result);
// echo "<h2>"."Number Of Rows: ". $num."</h2>";

// echo "<br>";
// Display the rows return by the sql Query without Loop

// if($num >0){
//     $row = mysqli_fetch_assoc($result);
//     echo var_dump($row);
// }
// echo "<br>";

// fetch all data from the Mysql Database table using Loop
// if($num >0){
// while ($row = mysqli_fetch_assoc($result)){
//     // echo var_dump($row); for full Array
//     echo "<h2>". "Hello ".$row['name'].", Your Age: ".$row['age']." And Gender: ".$row['gender']. "</h1>";
//    //  echo "<br>";
// }
// }

//Fetch Data using Where cause
$sql = "SELECT * FROM `phptrip` WHERE `age` = 30";
$result = mysqli_query($conn, $sql);

$num =  mysqli_num_rows($result);
echo "<h2>"."Number Of Rows: ". $num."</h2>";

echo "<br>";
if($num >0){
   while ($row = mysqli_fetch_assoc($result)){
       // echo var_dump($row); for full Array
       echo "<h2>". "Hello ".$row['name'].", Your Age: ".$row['age']." And Gender: ".$row['gender']. "</h1>";
       echo "<br>";
   }
   }

 ?>
<?php include 'footer.php';?>
