<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./file.css">
    <title>Document</title>
    <?php
    if(isset($_POST["text1"]) && $_POST["text1"]!=null && 
    isset($_POST["text2"]) && $_POST["text2"]!=null){
        if($_POST["text1"] < $_POST["text2"])
        {
            $result = $_POST["text2"];
        } else {
            $result = $_POST["text1"];
        }
    } else {
        $result ="Incorrect";
    }
    ?>
</head>
<body>
<form method='post' name='frm' action="">
    <div class='title'>
        Tìm số lớn nhất
    </div>
    <div class='middle'>
        <div class='inputbox'>
            <div class='Textbox'>Giá trị 1:</div>
            <input type='text' name='text1' class='Textinput'>
        </div>
        <div class='inputbox'>
            <div class='Textbox'>Giá trị 2:</div>
            <input type='text' name='text2' class='Textinput'>
            <button>Thực hiện</button>
        </div>
    </div>
    <div class='title'>Kết quả</div>
    <div class='resultBox'>
        Số lớn nhất:
        <input type='text' disabled  value='<?php echo $result; ?>' class='Textinput'>
    </div>
    </form>
</body>
</html>