<body> 
    TỪ Ngày<input type="date" name="tungay" id="tungay">
    ĐẾN Ngày<input type="date" name="denngay" id="denngay"><br> <br>
    Họ tên khách hàng<select id="tenkh"> 
        <?php 
        include 'connect.php'; 
        $sql = "select makh, tenkh from khachhang"; 
        $result = mysqli_query($connect, $sql); 
        while ($row = mysqli_fetch_row($result)) { 
            echo "<option value='$row[0]'>$row[1]</option>"; 
        } 
        ?> 
    </select><br> <br>
   
    <div id='result'></div> 
</body> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script> 
    $(document).ready(function() { 
        $('#tenkh').change(function() { 
            var makh = $('#tenkh').val(); 
            var tungay  = $("#tungay")[0].valueAsDate;
                if (tungay) {
                    tungay = tungay.toISOString().split('T')[0];}
            var denngay  = $("#denngay")[0].valueAsDate;
                if (denngay) {
                    denngay = denngay.toISOString().split('T')[0];} // Format date to 'YYYY-MM-DD'
            $.post('cau5_result.php', { 
                makh: makh,
                tungay: tungay,
                denngay: denngay
            }, function(data) { 
                $('#result').html(data); 
            }) 
        }) 
    }) 
</script>