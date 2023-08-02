<?php
    require('connection.php');
    // Tạo một mảng để chứa các lỗi
    $error = [];

    if (isset($_POST["btn-submit"])) {
        // Lấy thông tin người dùng vừa nhập từ form
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $role_id = $_POST["role"];
        $status = $_POST["status"];
        // Lấy thông tin của ảnh
        $hinh = $_FILES["image"];
        // var_dump($hinh);
        // echo $hinh["name"];


        // Kiểm tra tên có để trống hay không
        if (empty($name)) { // Nếu name để trống thì sẽ trả ra true
            $error["name"] = "Bạn chưa nhập tên";
        }

        // Kiểm tra email và phone
        if (empty($email)) { // Nếu name để trống thì sẽ trả ra true
            $error["email"] = "Bạn chưa nhập email";
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { // filter_var đi cùng với những hàm validate có sẵn trong php
            $error["email"] = "Email không hợp lệ";
        } 

        $regex_phone = '/^0\d{9}$/'; // Regex kiểm tra số điện thoại
        if (empty($phone)) { // Nếu name để trống thì sẽ trả ra true
            $error["phone"] = "Bạn chưa nhập số điện thoại";
        } else if (!preg_match($regex_phone, $phone)) { // preg_match đi kèm với regex (không kiểm tra bằng các hàm có sẵn)
            $error["phone"] = "Số điện thoại không hợp lệ";
        }

        // Kiểm tra nếu chúng ta tải ảnh lên
        if (isset($hinh)) {
            // Tạo 1 thư mục để chứa ảnh
            $target_dir = "img/";
            // Lấy tên của hình ảnh trong phần form tải lên
            $image = $hinh["name"];
            // Tạo đường dẫn đầy đủ của ảnh trên máy chủ
            $target_file = $target_dir . $image;
            // Di chuyển ảnh vào thư mục
            move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
        }

        // Thực hiện việc post dữ liệu và database
        if (!$error) {
            $sql_add = "INSERT INTO users VALUES (null, '$name', '$email', '$phone', '$image', '$role_id', '$status')";
            // Để chạy câu truy cấn thêm dữ liệu
            $connect->query($sql_add);
            header("Location: index.php");
            echo "Thêm người dùng thành công";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm người dùng</title>
</head>
<body>
    <!-- enctype="multipart/form-data"  BẮT BUỘC PHẢI CÓ ĐỂ POST ẢNH -->
    <form action="" method="POST" enctype="multipart/form-data">
        <!-- ID ko cần nhập mà mặc định sẽ tự tăng khi thêm dữ liệu -->
        <label for="">Name</label>
        <input type="text" name="name">
        <span><?php echo isset($error["name"]) ? $error["name"] : '' ?></span>
        <br>
        <label for="">Email</label>
        <input type="email" name="email">
        <span><?php echo isset($error["email"]) ? $error["email"] : '' ?></span>
        <br>
        <label for="">Phone</label>
        <input type="text" name="phone">
        <span><?php echo isset($error["phone"]) ? $error["phone"] : '' ?></span>
        <br>
        <label for="">Image</label>
        <!-- accept="image/*" quy định file gửi lên bắt buộc phải là ảnh -->
        <input type="file" name="image" accept="image/*">
        <br>
        <label for="">Role</label>
        <select name="role">
            <option value="1">Giảng viên</option>
            <option value="2">Sinh viên</option>
            <!-- 
                Đổ dữ liệu từ bảng roles ra option
                value = id của role
                nội dung trong option = name_role
             -->
        </select>
        <br>
        <label for="">Status</label>
        <select name="status">
            <option value="0">Hoạt động</option>
            <option value="1">Ngừng hoạt động</option>
        </select>
        <br>
        <button type="submit" name="btn-submit">Thêm mới</button>
    </form>
</body>
</html>