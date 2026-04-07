<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="upload_ok.php" method="post" enctype="multipart/form-data">
        <input type="text" name="title">
        <input type="text" name="content">
        <input type="file" name="my_image">
        <input type="date" name="start_date">
        <input type="date" name="end_date">
        <button type="submit">업로드</button>
    </form>
</body>
</html>