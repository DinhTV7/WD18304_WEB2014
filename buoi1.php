<?php 
    // Tất cả các biến của PHP đều được khai báo bắt đầu bằng ký tự $
    // Cấu trúc: $tên_biến = giá trị;
    
    $a = 5; // bắt buộc mỗi câu lệnh phải đc kết thúc bằng dấu ;
    // echo được sử dụng để hiển thị giá trị đầu ra
    echo $a;

    // Để chạy đc file: localhost:cổng/tên thư mục trong htdocs/tên file cần chạy

    // Xuống dòng
    echo "<br>";

    // Nối chuỗi
    echo "Đây là số a: " . $a;

    // Hiển thị nhiều giá trị 1 lúc ( ngăn cách chúng bằng dấu ,)
    $b = "hello";
    echo $b, " Đây là số a: " . $a;

    // Ôn tập về kiểu dữ kiểu
    // PHP Có cơ chế hiểu các kiểu dữ liệu theo từng tình huống sử dụng
    // Kiểu số nguyên
    $number = 3;
    // Kiểu số thực
    $myFloat = 3.5;
    // Kiểu chuỗi
    $myString = "Chào mừng đến với bình nguyên vô tận";
    // Kiểu boolean
    $myBoolean = true; // Chỉ có 2 giá trị true hoặc false
    // Kiểu null
    $myNull = null; // Cho biết biến chẳng có gì cả (trống rỗng)

    // Khai báo thông tin của 3 nyc (họ tên, năm sinh, quê quán, sđt)
    // Mỗi nyc in ra 1 dòng riêng biệt
    // Các thuộc tính được ngăn cách với nhau bởi dấu -

    $ho_ten = "Nguyễn Thị A";
    $nam_sinh = 2005;
    $que_quan = "Nam Định";
    $sdt = "0987654321";

    echo "<br>";
    echo "Họ tên: " . $ho_ten . " - Năm sinh: " . $nam_sinh . " - Quê quán: " . $que_quan;

    // Ôn tập lại về toán tử
    // Toán tử số học
    // +, -, *, /(lấy giá trị), % ( chia lấy phần dư), **( bình phương )

    // Toán tử so sánh
    // >, <, >=, <=, == (so sánh bằng về mặt giá trị)
    // != ( so sánh không bằng )
    // <> ( khác )
    // === ( so sánh cả về mặt giá trị và kiểu dữ liệu )
    // !== ( không bằng giá trị hoặc kiểu dữ liệu )
    // x <=> y (trả về 0 khi x và y bằng nhau; 
    // trả về 1 nếu x > y; trả về -1 khi y > x )

    // Toán tử logic: && (xảy ra đồng thời), || (xảy ra 1 trong 2)

    // Toán tử gán
    /**
     * x = y (gán giá trị y cho x)
     * x += y   x = x + y   (Cộng thêm giá trị y cho x)
     * x -= y   x = x - y   (Bớt đi y giá trị của x)
     * x *= y   x = x * y   (Nhân thêm y lần)
     * x /= y   x = x / y   (Chia y lần giá trị của x)
     * x %= y   x = x % y   (Chia cho y lấy phần dư giá trị của x)
     */

    // Toán tử tăng giảm: ++, --
    echo "<hr>";
    $test = 5;
    $c = $test++;
    echo $c;
?>