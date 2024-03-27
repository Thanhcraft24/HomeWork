<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="file2.css">
    <title>Document</title>
    <?php
    $connect = mysqli_connect("localhost","root","");
    mysqli_select_db($connect,"qlsv");
    mysqli_set_charset($connect,"utf8");
    $sql = "SELECT * FROM sinhvien ORDER BY masv;";
    $kq = mysqli_query($connect,$sql);
    ?>
</head>
<body>
    <div class='heading'>
        <img src='./Images/chuyendoiso.png'>
        <ul>
            <li><a>Trang Chủ</a></li>
            <li><a>Diễn Đàn</a></li>
            <li><a>Tin Tức</a></li>
            <li><a>Hỏi Đáp</a></li>
            <li><a>Góc Học Tập</a>
                <ul class='dropdown'>
                    <li><a>Chuyên đề Tin Học</a></li>
                    <li><a>Chuyên đề Âm Nhạc</a></li>
                    <li><a>Chuyên đề Thể Thao</a></li>
                </ul>
            </li>
        </ul>        
    </div>
    
    <div class='middle'>
        <form action="" method='POST'>
        <div class='left'>
            <p>Mã sinh viên: <input type='text' name='Masv'></p>
            <p>Họ sinh viên:<input type='text' name='Ho'></p>
            <p>Tên sinh viên:<input type='text' name='Ten'></p>
            Nam<input type='radio' value='1' name='choose'>Nữ<input type='radio' value='0' name='choose'>
            <input type='submit' value='nhập'>
            <?php
            $masv = $_POST["Masv"];
            $hosv = $_POST["Ho"];
            $tensv = $_POST["Ten"];
            $phai = $_POST["choose"];
            if ($phai == 1) {
                $phai = 1;
                $sql2 = "INSERT INTO sinhvien(masv, hosv, tensv, phai) VALUES ('".$masv."','".$hosv."','".$tensv."','".$phai."');";
                mysqli_query($connect,$sql2);
            } else {
                $phai = 0;
                $sql2 = "INSERT INTO sinhvien(masv, hosv, tensv, phai) VALUES ('".$masv."','".$hosv."','".$tensv."','".$phai."');";
                mysqli_query($connect,$sql2); 
            }
            ?>
        </div>
        </form>
        <div class='right'>
            <?php 
                echo "<table>
                    <tr>
                        <td colspan='4'>Danh sách sinh viên</td>
                    </tr>
                    <tr>
                        <td>STT</td>
                        <td>Mã sinh viên</td>
                        <td>Tên sinh viên</td>
                        <td>Phái</td>
                    </tr>
                </table>";
                $STT=1;
                while ($row = mysqli_fetch_row($kq)) {
                    
                    echo "<table>
                        <tr>
                            <td>".$STT."</td>
                            <td>".$row[0]."</td>
                            <td>".$row[1]." ".$row[2]."</td>
                            <td>";
                                if ($row[3]==1) {
                                    echo "Nam";
                                } else {
                                    echo "Nữ";
                                }
                            echo "</td>
                        </tr>
                    </table>";
                    $STT++;
                }
                echo "<table>
                    <tr>
                        <td colspan='4'>Tổng số sinh viên: ".mysqli_num_rows($kq)."</td>
                    </tr>
                </table>";
                mysqli_close($connect);
            ?>
        </div>
    </div>
    <div class='footer'>
        <h2>CÂU LẠC BỘ TIN HỌC - NGOẠI NGỮ - BỒI DƯỠNG VĂN HOÁ</h2>
        <h3>Địa chỉ: 11 đường 14B, Phường Bình Hưng Hoà A, Quận Bình Tân, Tp.HCM</h3>
        <h3>Điện thoại: 0903.97.92.18</h3>
        <h3>Website:http://khonggiankythuat.com</h3>
    </div>

</body>
</html>