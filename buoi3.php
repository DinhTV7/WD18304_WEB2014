<?php
    // Ôn tập lại cấu trúc vòng lặp
    // Vòng lặp được sử dụng nhằm mục đích thực thi khối lệnh nào đó nhiều lần

    // Vòng lặp for
    // Sử dụng for khi chúng ta đã biết rõ số lần cần lặp lại

    // In ra màn hình lần lượt các số từ 0->10;
    for ($i=0; $i <= 10; $i++) { 
        echo "Số: $i <br>";
    }
    echo "<hr>";
    // Vòng lặp do...while
    // Thực thi khối lệnh, sau đó mới kiểm tra điều kiện
    // Nếu điều kiện vẫn là true thì lặp lại khối lệnh

    // In ra màn hình lần lượt các số từ 1->10
    $a = 1;
    do {
        echo "Số: $a <br>";
        $a++;
    } while ($a <= 10);
    echo "<hr>";

    // Vòng lặp while
    // Không cần biết số lần lặp lại khối lệnh
    // Điều kiện còn là true thì cón thực thi khối lệnh

    // In ra màn hình lần lượt các số từ 1->10
    $b = 1;
    while ($b <= 10) {
        echo "Số: $b <br>";
        $b++;
    }

    // Bài lab 3:
    // Bài 1: Tính tổng các số chẵn từ 1 -> 100
    // Bài 2: In ra màn hình bảng cửu chương 9
    // Bài 3: Tìm các số nguyên tố <100
