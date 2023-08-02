<?php
// Mảng là một tập hợp gồm nhiều phần tử có hoặc không cùng kiểu dữ liệu

// Mảng có 2 thành phần: Vị trí và giá trị
// Vị trí 0 -> n-1 (n là tổng số phần tử trong mảng)

// Cách khai báo
$mang = array(1, 2, 3, 4, 5); // Đối với phiên bản php 5.x trở về trước
$mang_1 = [1, 2, 3, 4, 5, "xin chào baby", 5.5]; // Sử dụng cách thứ 2

// Cách hiển thị thông tin của mảng
var_dump($mang_1); // Hiển thị chi tiết hơn. Thường được dùng để debug
echo "<br>";
print_r($mang_1); // Chỉ hiển thị vị trí và giá trị
echo "<br>";
// Mảng trong PHP
// Loại 1: Mảng rỗng
$arr = []; // Mảng không có phần tử nào cả

// Loại 2: Mảng tuần tự
// Mảng tuần tự là mảng mà các phần tử được xác định vị trí từ 0 -> n-1
$arr_1 = ['apple', 'banana', 'orange'];

// In ra giá trị của 1 phần tử trong mảng
// Cú pháp: $ten_mảng[vị_trí];
echo $arr_1[1];
echo "<br>";
// Dùng for để in ra toàn bộ giá trị trong mảng mang_1
// $mang_1 = [1, 2, 3, 4, 5, "xin chào baby", 5.5];

// count() hàm có sẵn dùng để đếm tổng số phần tử trong mảng
for ($i = 0; $i < count($mang_1); $i++) {
    echo $mang_1[$i] . ", ";
}
echo "<br>";

// foreach
// Cú pháp: foreach ($mảng_cần_duyệt as $giá_trị) { công việc }
foreach ($mang_1 as $nyc) {
    echo $nyc . ", ";
}
echo "<br>";

// Cho 1 mảng ngẫu nhiên có 10 phần tử là số nguyên
// hiển thị tất cả các phần tử là số lẻ trong mảng ( duyệt bằng 2 cách for, foreach)
$numbers = [1, 2, 3, 5, 4, 6, 8, 9, 11, 13, 16, 19, 14];
// For
for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] % 2 != 0) {
        echo $numbers[$i] . ", ";
    }
}
echo "<br>";
// foreach
foreach ($numbers as $number) {
    if ($number % 2 != 0) {
        echo $number . ", ";
    }
}
    
// Đếm và tính tổng các sỗ chẵn có trong mảng
// Tìm giá trị lớn nhất trong mảng