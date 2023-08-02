<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_GET["name"])) { // Kiểm tra xem dữ liệu đã được gửi lên hay chưa
        $ten = $_GET["name"];
    }
    ?>

    <h1><?php echo $ten; ?></h1>
</body>

</html>