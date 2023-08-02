<?php
// Hàm là một khối code dùng để thực hiện 1 công việc cụ thể
// Và có tính tái sử dụng cao

// Cách tạo hàm:
function ten_ham()
{
    // Nơi thực hiện công việc
}
// Cách gọi hàm
ten_ham(); // Hàm chỉ thực thi khi nó được gọi

// Hàm không trả về không có tham số
function thong_bao()
{
    echo "Xin chào các bro";
}
thong_bao();

// Hàm không trả về có tham số
function xin_chao($name)
{ // Tham số được đặt trong giữa khe ngoặc đơn
    echo "Xin chào, $name";
}
// Gọi hàm và truyền tham số
xin_chao("Định");
xin_chao("Các bro");

// Hàm có trả về
// Hàm có tham số
function tong($a, $b) { // ngăn cách giữa các tham số bằng dấu ,
    $sum = $a + $b;
    return $sum;
}
echo "Tổng là ". tong(6, 3);
// Hàm không có tham số
function randomNumber() {
    $number = rand(1, 100); // hàm có sẵ trong php
    return $number;
}
echo "Số ngẫu nhiên là: ". randomNumber();

// Tính diện tích hình chữ nhật 
// ( sử dụng hàm trả về có tham số )

// Bài tập lab 4:
// Bài 1: Sử dụng hàm không trả về có tham số. Giải phương trình bậc 1
// Bài 2: Sử dụng hàm trả về có tham số. Tính diện tích hình thang
// Bài 3: Kiểm tra số truyền vào có phải là số nguyên tố hay không 
// (hàm trả về và hàm không trả về)