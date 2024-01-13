<body> 
    Chọn Ngày<input type="date" name="ngay" id="ngay"><br> 
    <div id='result'></div> 
</body> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script> 
    $(document).ready(function() { 
        $("#ngay").keyup(function(e) { 
            if (e.keyCode == 13) { 
                var ngay  = $("#ngay")[0].valueAsDate;
                if (ngay) {
                ngay = ngay.toISOString().split('T')[0]; // Format date to 'YYYY-MM-DD'
            }
      $.ajax({ 
                 type: 'post', 
                 url: 'cau4_result.php', 
                 data: { 
                     ngay: ngay 
                 }, 
                 success: function(data) { 
                    $("#result").html(data); 
                 }      
                }); 
            } 
        }) 
}) 
</script>