<?php
include 'db.php';
mysqli_report(MYSQLI_REPORT_OFF);

$nm = $_POST['nm'];
$id = $_POST['id'];
$pw = $_POST['pw'];

$sql = "insert into users values('$id',PASSWORD('$pw'),'$nm',1)";

$result = mysqli_query($conn,$sql);

if($result) {
    echo "<script>alert('회원가입이 완료되었습니다.'); location.href='index.php';</script>";
}else {
    echo "<script>alert('이미 가입된 회원입니다.'); location.href='index.php';</script>";
}
?>