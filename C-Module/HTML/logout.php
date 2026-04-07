<?php
// 세션 시작
session_start();

// 세션 삭제
session_unset();
session_destroy();
?>
<!-- 경고 창 띄운후 index.php이동 -->
<script>alert('로그아웃이 정상적으로 완료되었습니다.'); location.href="index.php";</script>