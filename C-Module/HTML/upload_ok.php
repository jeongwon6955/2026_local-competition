<?php
include 'db.php';

$target_dir = "./uploads/"; // 저장할 폴더
$file_name = $_FILES['my_image']['name']; // 원래 파일 이름
$target_file = $target_dir . $file_name; // 최종 경로 (./uploads/test.jpg)
$title = $_POST['title'];
$content = $_POST['content'];
$start = $_POST['start_date'];
$end = $_POST['end_date'];

$sql= "insert into popup values('$title','$content','$file_name','$start','$end')";

$result = mysqli_query($conn,$sql);

if (move_uploaded_file($_FILES['my_image']['tmp_name'], $target_file)&& $result) {
    echo '<script>location.href="popup.php";</script>'
} else {
    echo $end.$start;
}
?>


<script>
    const now = new Date();
    const start = new Date('<?= $start?> 00:00:00');
    const end = new Date('<?= $end?> 23:59:59');

    if(now >= start && now <= end) {
        console.log('오늘은 포함이야');
    }
</script>