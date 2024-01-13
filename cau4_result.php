<?php 
include 'connect.php'; 
$ngay = date('Y-m-d', strtotime($_POST['ngay']));
$stt = 0; 
 
$sql = "SELECT kh.tenkh,xe.soxe, xe.tenxe FROM khachhang kh, xe, thue WHERE 
kh.makh=thue.makh and xe.soxe = thue.soxe and thue.ngaythue = '$ngay' and thue.ngaytra is null"; 
$result = mysqli_query($connect, $sql); 
 
echo "<table border='1' cellspacing='0' cellpadding='10'>"; 
echo "<th> STT</th>"; 
echo "<th> Họ tên khách hàng</th>"; 
echo "<th> Số xe</th>"; 
echo "<th> Tên xe</th>"; 
 
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