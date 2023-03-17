<?php
$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "btth03_cse485";
    $conn = mysqli_connect($servername, $username, $password, $dbname,3306 );
    mysqli_select_db($conn, $dbname);
    mysqli_query($conn, "SET NAMES 'utf8'");
if(!$conn) {
    die('Kết nối tới Server lỗi');
}    