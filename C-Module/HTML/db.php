<?php
// db 연결
$conn = mysqli_connect('localhost','root','','library_db');
mysqli_set_charset($conn, 'utf8');

// db 연결 확인
if(!$conn) {
    die("연결 실패:". mysqli_connect_error());
}

?>