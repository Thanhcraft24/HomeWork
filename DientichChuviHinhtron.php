<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./file.css">
    <title>Document</title>
    <?php
    if(isset($_POST["text1"]) && $_POST["text1"]!=null){
        $result1 = 3.14 * $_POST["text1"] * 2;
        $result2 = 3.14 * $_POST["text1"] * $_POST["text1"];
    } else {
        $result1 ="Incorrect";
        $result2 ="Incorrect";
    }
    ?>
</head>
<body>
    <div class='title'>
        Diện tích và chu vi hình tròn
    </div>
    <form method='post'>
    <div class='resultBox'>
        <div class='Textbox'>Bán kính:</div>
        <input type='text' name='text1' class='Textinput'>
        <button>Thưc hiện</button>
    </div>
    </div>
    <div class='title'>Kết quả</div>
    <div class='middle'>
        <div class='inputbox'>
            <div class='Textbox'>Chu vi:</div>
            <input type='text' disabled  value='<?php echo $result1; ?>' class='Textinput'>
        </div>
        <div class='inputbox'>
             <div class='Textbox'>Diện tích:</div>
             <input type='text' disabled  value='<?php echo $result2; ?>' class='Textinput'>
        </div>
    </div>
    </form>
</body>
</html>