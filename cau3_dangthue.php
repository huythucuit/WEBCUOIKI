<?php 
include "connect.php";

echo "Danh sách các xe đang thuê";
$sql = "select * from xe where tinhtrang= 1"; 
$result = mysqli_query($connect, $sql); 
$stt = 0; 
 
 
echo " <table border=' 1' cellspacing='0'>"; 
echo "<th>Số xe</th>"; 
echo "<th>Tên xe</th>"; 
echo "<th>Hãng xe</th>"; 
echo "<th>Năm sản xuất</th>"; 
echo "<th>Số chỗ</th>";
echo "<th>Năm sản xuất</th>";
echo "<th>Đơn giá thuê</th>";
echo "<th>Chọn thuê</th>";
 
while ($row = mysqli_fetch_row($result)) { 
    $stt++; 
    echo "<tr>"; 
    echo "<td> $stt </td>"; 
    echo "<td> $row[0] </td>"; 
    echo "<td> $row[1] </td>"; 
    echo "<td> $row[2] </td>"; 
    echo "<td> $row[3] </td>"; 
    echo "<td> $row[4] </td>"; 
    echo "<td> $row[5] </td>"; 
    echo "<td> <button class='khongthue' value=$row[0]> Không Thuê </button> </td>"; 
    echo "</tr>"; 
} 
?>