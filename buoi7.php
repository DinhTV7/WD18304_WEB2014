<?php
// Mảng đa chiều
// Là 1 mảng chưa MỘT HOẶC NHIỀU MẢNG BÊN TRONG NÓ

// Mảng tuần tự 2 chiều
$arr = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

// In ra giá trị của 1 phần tử
// cú pháp: $ten_mang[vị trị mảng muốn truy cập][vị trí của phần tử muốn lấy];
echo $arr[0][2];
echo $arr[1][2];
echo "<br>";
// In ra toàn bộ các số nguyên trong mảng
echo $arr[0][0];
echo $arr[1][0];
echo $arr[2][0];
echo "<br>";

// Sử dụng foreach
foreach ($arr as $row) {
    print_r($row);
    echo "<br>";
    foreach ($row as $value) {
        echo $value . "<br>";
    }
}

foreach ($arr as $key => $row) {
    print_r($row);
    echo "<br>";
    foreach ($row as $key_2 => $value) {
        echo "[$key][$key_2]: $value <br>";
    }
}

// Mảng liên hợp 2 chiều
// Đây chính là mảng dữ liệu mà database sẽ trả ra cho chúng ta
$sinh_vien = [
    // Mỗi phần tử chính là thông tin của 1 đối tượng sinh viên
    [
        "ten" => "Nguyễn Văn A",
        "nam_sinh" => 2004,
        "diemTB" => 4
    ],
    [
        "ten" => "Nguyễn Văn B",
        "nam_sinh" => 2004,
        "diemTB" => 7
    ],
    [
        "ten" => "Nguyễn Văn C",
        "nam_sinh" => 2004,
        "diemTB" => 9
    ],
];

// In ra giá trị
// cú pháp: $ten_mảng[vị trí mảng muốn truy cập][key]
echo $sinh_vien[0]['ten'];
echo "<br>";
// In ra toàn bộ thông tin của sv thứ 3
foreach ($sinh_vien[2] as $value) {
    echo $value . "<br>";
}
// Đổ dữ liệu ra HTML
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php foreach($sinh_vien as $sv) : ?>
        <h3><?php echo $sv["ten"] ?></h3>
        <h3><?php echo $sv["nam_sinh"] ?></h3>
        <h3 style="<?php echo "color: red;" ?>"><?php echo $sv["diemTB"] ?></h3>
    <?php endforeach; ?>
    <!-- 
        In toàn bộ thông tin sinh viên ra dưới dạng bảng
        Nếu điểTB < 5 thì hàng sinh viên đó có bg là đỏ
        Nếu điểTB >= 5 và <= 8 thì hàng sinh viên đó có bg là vàng
        Nếu điểTB > 8  thì hàng sinh viên đó có bg là xanh
     -->
</body>

</html>