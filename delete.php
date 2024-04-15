
<?php
    $masv = $masv = $_POST["Masv"];
    $connect = mysqli_connect("localhost","root","");
    mysqli_select_db($connect,"qlsv");
    mysqli_set_charset($connect,"utf8");
    $sql3 = "DELETE FROM sinhvien WHERE masv = '".$masv."';";
    mysqli_query($connect,$sql3);
   header("location:chuyendoiso.php");
?>