<body> 
    Thông tin trả xe <br>
<form action="traxe.php" method="post"> 
Họ tên khách hàng
<select name="tenkh"> 
<?php 
include "connect.php"; 
$sql = 'select makh, tenkh from khachhang'; 
$result = mysqli_query($connect, $sql); 
while ($row = mysqli_fetch_row($result)) { 
echo "<option value='$row[0]'>$row[1]</option>"; 
} 
?> 
</select><br>
 
Số xe<input type="text" name="soxe" placeholder="51E-xxx.xx"><br> 
Ngày thuê<input type="date" name="ngaythue" placeholder=""><br> 
Ngày trả<input type="date" name="ngaytra" placeholder=""><br> 
<input type="submit" name="traxe" value="Trả xe"> 
</form> 
</body> 