<?php 
include 'connect.php'; 
$tungay = date('Y-m-d', strtotime($_POST['tungay']));
$denngay = date('Y-m-d', strtotime($_POST['denngay']));
$makh = $_POST['makh'];
$stt = 0; 
 
$sql = "SELECT xe.soxe, xe.tenxe, thue.giathue FROM khachhang kh, xe, thue WHERE 
kh.makh=thue.makh and xe.soxe = thue.soxe and thue.ngaytra BETWEEN '$tungay' AND '$denngay' and kh.makh = '$makh'"; 
$result = mysqli_query($connect, $sql); 
 
echo "<table border='1' cellspacing='0' cellpadding='10'>"; 
echo "<th> STT</th>"; 
echo "<th> Số xe</th>"; 
echo "<th> Tên xe</th>"; 
echo "<th> Gía thuê</th>"; 
 
while($row = mysqli_fetch_row($result)){ 
    $stt++; 
    echo "<tr>"; 
    echo "<td>$stt</td>"; 
    echo "<td>$row[0]</td>"; 
    echo "<td>$row[1]</td>"; 
    echo "<td>$row[2]</td>"; 
    echo "</tr>"; 
} 
?>