<?php 
  include "connect.php"; 
  if(isset($_POST["them"])){ 
    $maxe = $_POST["soxe"]; 
    $tenxe = $_POST["tenxe"]; 
    $socho = $_POST["socho"]; 
    $hangxe = $_POST["hangxe"];
    $namsx = $_POST["namsx"]; 
    $dgthue = $_POST["dgthue"];
 
    $sql= "insert into XE values ('$maxe', '$tenxe','$hangxe', '$socho',' $namsx', '$dgthue', 0)"; 
    $res = mysqli_query($connect, $sql); 
    if($res){ 
      echo "insert thanh cong"; 
    } else { 
      echo "insert that bai"; 
    } 
    $connect->close(); 
  }; 
?> 