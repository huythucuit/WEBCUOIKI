<body>
    Họ tên khách hàng
    <select class="makh" name="makh">
        <?php
        include 'connect.php';
        $sql = 'select makh,tenkh from khachhang';
        $result = mysqli_query($connect, $sql);
        while ($row = mysqli_fetch_row($result)) {
            echo "<option value='$row[0]'>$row[1]</option>";
        }
        ?>
    </select>
    Ngày thuê xe
    <input type="date" name="ngaythue" class="ngaythue" placeholder="">

    <div id='chuathue'></div>
    <div id='dangthue'></div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    function showData() {
        $.ajax({
            type: 'post',
            url: 'cau3_chuathue.php',
            success: function(data) {
                $("#chuathue").html(data)
            }
        })
        $.ajax({
            type: 'post',
            url: 'cau3_dangthue.php',
            success: function(data) {
                $("#dangthue").html(data)
            }
        })
    }

    $(document).ready(function() {
        var makh = $(".makh").val();
        showData()

        $(document).on('click', '.thue', function() {
            var soxe = $(this).val();
            var ngaythue = $(".ngaythue")[0].valueAsDate;
            var makh = $(".makh").val();


            if (ngaythue) {
                ngaythue = ngaythue.toISOString().split('T')[0]; // Format date to 'YYYY-MM-DD'
            }
            $.ajax({
                type: 'post',
                url: 'cau3_ds.php',
                data: {
                    soxe: soxe,
                    makh: makh,
                    ngaythue: ngaythue
                }
            });
            showData()
        })

        $(document).on('click', '.khongthue', function() {
            var soxe = $(this).val();
            var ngaythue = $(".ngaythue")[0].valueAsDate;
            var makh = $(".makh").val();


            if (ngaythue) {
                ngaythue = ngaythue.toISOString().split('T')[0]; // Format date to 'YYYY-MM-DD'
            }
            $.ajax({
                type: 'post',
                url: 'cau3_ds.php',
                data: {
                    soxe: soxe,
                    makh: makh,
                    ngaythue: ngaythue
                }
            });
            showData()
        })
    })
</script>