<?php
// 세션시작
session_start();

// db 연결
include 'db.php';

// 값 저장
$id = $_POST['id'];
$pw = $_POST['pw'];

// sql 쿼리
$sql = "select * from users where id='$id' and password=PASSWORD('$pw')";

// 쿼리 결과 값
$result = mysqli_query($conn,$sql);

// 결과 값 저장
$row = mysqli_fetch_assoc($result);

// 값이 존재하면 세션에 저장 후 index.php로 이동 아니면 경고 창 띄운후 뒤로 이동
if($row !== null) {
    $_SESSION['id'] = $row['id'];
    $_SESSION['name'] = $row['name'];
?>
<script>location.href = "index.php"</script>
<?php
}else{?>
<script>alert('아이디 또는 비밀번호가 일치하지 않습니다.'); history.back();</script>
<?php }?>