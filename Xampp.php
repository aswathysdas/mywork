<?php
$servername = "127.6.1.8";
$username   = "root";
$password   = "";
$dbname     = "test";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$pp="INSERT INTO.$regtr.VALUES ($fname,$ph,$emailAddress,$state,$cntry);
    $trp = mysqli_query($conn, "SELECT * FROM statetbl");
    $rows = array();
    while($r = mysqli_fetch_assoc($trp)) {
        $rows[] = $r;
    }
     $output='';
    $ftr=mysqli_query($conn,"SELECT * FROM cntrytbl WHERE fk_int_id=$output");
      $rows=array();
      while($k=mysqli_fetch_assoc($ftr)){
         $rows[]=$k;
     }
    print json_encode($rows); //convert php data to json data
?>
