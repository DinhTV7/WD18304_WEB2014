<?php
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// In ra giá trị của các phần tử trong mảng
// echo implode(' - ', $arr); // Trả ra dữ liệu có kiểu dữ liệu là string

// Thay thế phần tử ở vị trí nào đó trong mảng
$arr[5] = 7;

// Thêm phần tử vào cuối mảng
$arr[] = 11;

// Hiển thị ra giá trị của phần tử cuối cùng trong mảng
// echo end($arr);

// Tính tổng số phần tử trong mảng
// $sum = array_sum($arr);
// echo $sum;

// Tính tổng 2 phần tử
// $sum = $arr[0] + $arr[1];
// $sum = array_sum([$arr[0], $arr[1]]);
// echo $sum;
// echo "<br>";

// Tìm phần tử lớn nhất trong mảng
// $max = max($arr);
// echo $max;
// echo "<br>";

// Tìm phần tử nhỏ nhất trong mảng
// $min = min($arr);
// echo $min;
// echo "<br>";

// Sắp xếp mảng
// Sắp sếp theo thứ tự tăng dần
// $arr_2 = [3, 5, 2, 10, 7];
// sort($arr_2);
// echo implode(' - ', $arr_2);
// echo "<br>";

// Giảm dần
// arsort($arr_2);
// echo implode(' - ', $arr_2);
// echo "<br>";

// Kiểm tra xem phần tử có trong mảng hay không
// $search = 9;
// echo in_array($search, $arr);

// Chỉnh sửa mảng
// array_splice($arr, 3); // Cắt bỏ mảng từ vị trí thứ 3
// array_splice($arr, 3, 1); // Cắt bỏ từ vị trí thứ 3 đi 1 phần tử
// array_splice($arr, 3, 1, 'abc'); // Chèn thêm hoặc thay thế phần tử
// echo implode(' - ', $arr);

// echo "<br>";
// print_r($arr);

// ----------------------//

// Mảng liên hợp
// Là mảng mà các phần tử được chỉ định bởi các khóa (key) duy nhất
// thay vì các số nguyên mặc định
// Cú pháp: $tên_mảng = [ "key" => giá trị ];

$ng_iu = [
    'toi' => 'I',
    'yeu' => 'Love',
    'em' => 'You',
    2003 => "Very Muck"
];
var_dump($ng_iu);

// In ra giá trị
// cú pháp: $tên_mảng[key]
echo $ng_iu['yeu'];
echo $ng_iu[2003];
echo "<br>";

// In ra toàn bộ giá trị sắp xếp thành câu có nghĩa
echo $ng_iu['toi'] . ' ' . $ng_iu['yeu'] . ' ' . $ng_iu['em'] . ' ' . $ng_iu[2003];
echo "<br>";

// Duyệt mảng theo 2 cách for và foreach
// array_keys($ng_iu); trả ra 1 mảng chính các key trong mảng cần duyệt
$keys = array_keys($ng_iu);
print_r($keys);
echo "<br>";
for ($i=0; $i < count($keys); $i++) {
    echo $ng_iu[$keys[$i]]. "<br>";
}

// array_values($ten_mang); Trả ra 1 mảng mới chính là các giá trị ở trong mảng liên hợp
$values = array_values($ng_iu);
print_r($values);
echo "<br>";
for ($i=0; $i < count($values); $i++) {
    echo $values[$i]. "<br>";
}


