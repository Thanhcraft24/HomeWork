<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./file.css">
    <?php
    if(isset($_POST["text1"]) && $_POST["text1"]!=null && 
    isset($_POST["text2"]) && $_POST["text2"]!=null){
        $result = $_POST["text1"] * $_POST["text2"];
    } else {
        $result ="Incorrect";
    }
    ?>
    <title>Document</title>
</head>
<body>
    <form method='post' name='frm' action="">
    <div class='title'>
        Tính diện tích hình chữ nhật
    </div>
    <div class='middle'>
        <div class='inputbox'>
            <div class='Textbox'>Chiều dài:</div>
            <input type='text' name='text1' class='Textinput'>
        </div>
        <div class='inputbox'>
            <div class='Textbox'>Chiều rộng:</div>
            <input type='text' name='text2' class='Textinput'>
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