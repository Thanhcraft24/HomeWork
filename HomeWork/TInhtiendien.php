<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./file.css">
    <?php
    if(isset($_POST["text1"]) && $_POST["text1"]!=null && 
    isset($_POST["text2"]) && $_POST["text2"]!=null && 
    isset($_POST["text3"]) && $_POST["text3"]!=null){
        $result = ($_POST["text2"]-$_POST["text1"]) * $_POST["text3"];
    } else {
        $result ="Incorrect";
    }
    ?>
    <title>Document</title>
</head>
<body>
    <form method='post' name='frm' action="">
    <div class='title'>
        Tính tiền điện
    </div>
    <div class='middle'>
        <div class='inputbox'>
            <div class='Textbox'>Họ tên</div>
            <input type='text' class='Textinput'>
        </div>
        <div class='inputbox'>
            <div class='Textbox'>Chỉ số củ:</div>
            <input type='text' name='text1' class='Textinput'>
        </div>
        <div class='inputbox'>
            <div class='Textbox'>Chỉ số mới:</div>
            <input type='text' name='text2' class='Textinput'>
        </div>
        <div class='inputbox'>
            <div class='Textbox'>Đơn giá:</div>
            <input type='text' name='text3' class='Textinput'>
            <button>Thực hiện</button>
        </div>
    </div>
    <div class='title'>Kết quả</div>
    <div class='resultBox'>
        Thành tiền:
        <input type='text' disabled  value='<?php echo $result; ?>' class='Textinput'>
    </div>
    </form>
</body>
</html>