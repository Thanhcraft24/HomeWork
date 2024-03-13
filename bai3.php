<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bai2/bai2.css">
    <?php
        $n= $_POST["text1"];
    ?>
</head>
<body>



<div class='title'>
        Bảng cửu chương
    </div>
    <form method='post'>
    <div class='resultBox'>
        <div class='Textbox'>Bắt đầu từ:</div>
        <input type='text' name='text1' class='Textinput'>
        <div class='Textbox'>Kết thúc từ:</div>
        <input type='text' name='text2' class='Textinput'>
        <button>Thưc hiện</button>
    </div>
    </div>
    <div class='title'>Kết quả</div>
    <div class='middle'>
        <table>
        <?php
            $y = $_POST["text2"];
            for ($i = 1; $i <= 10;$i++) {
                echo"<tr>";
            for ($j = 2; $j <= $y; $j++) {
                $n=$j;
                echo "
                <td>$n</td>
                <td>*</td>
                <td name='si'>$i</td>
                <td>=</td>
                <td>".$n*$i."</td>
                ";
                
            }
            echo"</tr>";
            }
        ?>
        </table>        
    </div>
    </form>
</body>
</html>