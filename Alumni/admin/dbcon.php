<?php
$server="localhost";
$username="root";
$password="";
$dbname="tracking";
$conn =  mysqli_connect($server, $username,'', $dbname)or die(mysqli_error($conn));
?>