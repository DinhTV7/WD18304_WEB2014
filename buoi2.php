<?php
    // Cấu trúc câu điều kiện
    // Nếu ( thỏa mãn điều kiện ) {thì thực hiện công việc}
    // Ngược lại { thì làm sao đó }

    // Bài tập
    // Kiểm tra xem số cho trước là số chẵn hay số lẻ

    $a = 51;
    if ( $a % 2 == 0 ) {
        echo "Số " . $a . " là số chẵn";
    } else {
        echo "Số " . $a . " là số lẻ";
    }

    // Cấu trúc if-else-if
    // Bài tập: Giải phương trình bậc 1

    // Toán tử 3 ngôi
    // Điều kiện ? Giá trị đúng : Giá trị sai

    // Lab:
    // Bài 1: Tính phương trình bậc 2
    // Bài 2:
    // Cho trước thông tin: họ tên, năm sinh, giới tính (nam là 0, nữ là 1)
    // Kiểm tra người này có đủ tuổi đi NVQS không
    // "Ông/Bà có/không đủ tuổi đi nvqs"
    // Ông/Bà lấy từ giới tính 0/1
    // tuổi = năm hiện tại - năm sinh;
    // gợi ý: get current year in php
    // >= 18 và <= 27 thì đủ tuổi đi NVQS

    
    $ho_ten = "Tạ Văn Định";
    $nam_sinh = 2004;
    $gioi_tinh = 0;
    $tuoi = date('Y') - $nam_sinh;
    // Cách 1: If-else-if
    if($gioi_tinh == 0 && $tuoi >= 18 && $tuoi <= 27) {
        echo "Ông $ho_ten đủ tuổi đi NVQS";
    } else if ($gioi_tinh == 0 && $tuoi < 18 || $tuoi > 27) {
        echo "Ông $ho_ten không đủ tuổi đi NVQS";
    } else if($gioi_tinh == 1 && $tuoi >= 18 && $tuoi <= 27) {
        echo "Bà $ho_ten đủ tuổi đi NVQS";
    } else if ($gioi_tinh == 1 && $tuoi < 18 || $tuoi > 27) {
        echo "Bà $ho_ten không đủ tuổi đi NVQS";
    } 
    // Toán tử 3 ngôi
    $checkGioiTinh = $gioi_tinh == 0 ? "Ông" : "Bà";
    $checkTuoi = $tuoi >= 18 && $tuoi <= 27 ? "đủ tuổi đi NVQS" : "không đủ tuổi đi NVQS";
    echo "$checkGioiTinh $ho_ten $checkTuoi";
?>