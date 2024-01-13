<?php 
include "connect.php"; 
$soxe = $_POST['soxe']; 
$makh = $_POST['makh']; 
$ngaythue = date('Y-m-d', strtotime($_POST['ngaythue']));
// $ngaythue_str = $ngaytra->format('Y-m-d');
//foramt date

$sql = "select tinhtrang from xe where soxe='$soxe'"; 
$row = mysqli_fetch_row(mysqli_query($connect, $sql)); 
if($row[0] == 0)  
{ 
    $upt = "update xe set tinhtrang = 1 where soxe='$soxe'"; 
    $aff = "insert into THUE (MAKH, SOXE,NGAYTHUE) VALUES('$makh', '$soxe','$ngaythue')"; 
} 
else { 
    $upt = "update xe set tinhtrang= 0 where soxe='$soxe'"; 
    $aff = "delete from THUE where MAKH = '$makh' and soxe = '$soxe'"; 
} 
 
mysqli_query($connect, $upt); 
mysqli_query($connect, $aff); 
?> 