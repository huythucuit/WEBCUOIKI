<?php
include "connect.php";
if (isset($_POST["traxe"])) {
  $makh = $_POST["tenkh"];
  $soxe = $_POST["soxe"];
  $ngaythue = $_POST["ngaythue"];
  $ngaytra = $_POST["ngaytra"];
  // Chuyển đổi chuỗi ngày thành đối tượng DateTime
  $ngaythue = new DateTime($ngaythue);
  $ngaytra = new DateTime($ngaytra);

  // Tính số ngày giữa hai ngày
  $diff = $ngaytra->diff($ngaythue);
  $songay = $diff->days;

  if ($songay == 0) {
    $songay = 1;
  }

  // Lấy số tiền thuê xe ạ
  $sql1 = "select dgthue from XE where soxe = '$soxe'";
  $res1 = mysqli_query($connect, $sql1);

  if ($row = mysqli_fetch_assoc($res1)) {
    $dgthue = $row['dgthue'];
    $tongtien = $songay * $dgthue;

}
$ngaytra_str = $ngaytra->format('Y-m-d');
$sql = "UPDATE THUE SET ngaytra = '$ngaytra_str', giathue = '$tongtien' WHERE makh = '$makh' AND soxe = '$soxe' AND ngaythue = '" . $ngaythue->format('Y-m-d') . "'";
$sql1 = "UPDATE XE SET TINHTRANG = '0' WHERE soxe = '$soxe'";
$res1 = mysqli_query($connect, $sql1);
$res = mysqli_query($connect, $sql);
  if ($res) {
    echo "insert thanh cong";
  } else {
    echo "insert that bai";
  }
  $connect->close();
};
