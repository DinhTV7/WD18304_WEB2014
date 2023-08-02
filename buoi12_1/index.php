<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Include/Require trong PHP</title>
</head>
<body>
    <h2>Include/Require đều dùng để kế thừ dữ liệu từ 1 file PHP khác</h2>
    <?php
        // Include
        // include('header.php');
        // include('header.php');
        // include('header.php');
        // include('header.php');
        // include('header.php');
        // include('header.php');
        // echo "Đây là nội dung của trang";
        // include('footer.php');

        // Require
        // require('header.php');
        // require('header1.php');
        // echo "Đây là nội dung của trang";
        // require('footer.php');

        // include_once
        include_once('header.php');
        include_once('header.php');
        echo "Đây là nội dung của trang";
        include_once('footer.php');

        // require_once
        require_once('header.php');
        require_once('header.php');
        echo "Đây là nội dung của trang";
        require_once('footer.php');
    ?>

    <!-- 
        Cho 1 file db.php chứa mảng liên hợp 2 chiều $dataNYC
        Tạo 1 file trang_chu.php xử lý dữ liệu in ra danh sách NYC
        Sử dụng các cách kế thừa tùy ý
     -->
</body>
</html>
<!-- 
    Sự khác nhau:
    - Include: Chèn nội dung từ tệp vào trang web. Nếu tệp không tồn tại hoặc có lỗi
                nó chỉ hiển thị cảnh báo và tiếp tục thực thi mã PHP
    
    - Require: Yêu cầu tệp phải tồn tại. Nếu tệp không tồn tại hoặc bị lỗi
                nó sẽ ngừng thực thi toàn bộ mã PHP và hiển thị lỗi
                
    - include_once: Chèn nội dung từ tệp vào trang web duy nhất 1 lần
                Nếu tệp đã được chèn trước đó, nó sẽ không chèn lại

    - require_once: Yêu cầu tệp phải tồn tại và chèn nội dung vào trang web 1 lần duy nhất
                Nếu tệp đã được chèn trước đó, nó sẽ không chèn lại
 -->