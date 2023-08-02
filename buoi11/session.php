<?php
    // Session và Cookie đề dùng để lưu trữ dữ liệu tạm thời

    // Session dùng để lưu trữ thông tin hoặc là trạng thái của người dùng 
    // trong suốt quá trình sử dụng (một phiên làm việc)

    // Session sẽ bị xóa khi đóng trình duyệt, hoặc chúng ta thực hiện việc xóa session

    // SESSION
    // session_start(); // Khai báo 1 phiên hoạt động (bặt buộc)

    // $weather = "Hôm nay trời nắng vãi";

    // // Khai báo biến trong session
    // $_SESSION['weather'] = $weather;

    // // Hiển thị giá trị của biến session
    // echo $_SESSION['weather'];
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">Tên đăng nhập:</label>
        <input type="text" name="username" require>

        <label for="">Email:</label>
        <input type="email" name="email" require>

        <button type="submit" name="submit">Đăng nhập</button>
    </form>
</body>
</html> -->
<?php
    // session_start();
    // if (isset($_POST["submit"])) {
    //     // Đăng ký dữ liệu gửi lên lưu trữ vào session
    //     $_SESSION["username"] = $_POST["username"];
    //     $_SESSION["email"] = $_POST["email"];
    // }

    // // Truy cập để lấy dữ liệu trong session
    // if (isset($_SESSION["username"])) {
    //     echo "Tên đăng nhập là: ". $_SESSION["username"];
    // }

    // if (isset($_SESSION["email"])) {
    //     echo "Email là: ". $_SESSION["email"];
    // }
?>

<!-- 
    Cho 1 mảng users
    Tạo 1 form đăng nhập gồm (username, password)
    Kiểm tra xem người dùng có nhập đúng tài khoản mật khẩu không
        - Nếu đúng thì in ra "Xin chào: $username"
        - Nếu sai tài khoản hoặc mật khẩu thì in ra (Sai thông tin đăng nhập)
 -->
<?php
    $dataUsers = [
        [
            "username" => "tavandinh",
            "password" => "12345678"
        ],
        [
            "username" => "dinhtv7",
            "password" => "12345678"
        ]
    ]
?>

<?php
    session_start();
    if (isset($_POST["submit"])) {
        $username = $_POST["username"];
        $pass = $_POST["password"];
        // Kiểm tra thông tin đăng nhập
        foreach ($dataUsers as $user) {
            if ($username == $user["username"] && $pass == $user["password"]) {
                // Lưu trữ thông tin vào session
                $_SESSION["taiKhoan"] = $username;
                $login_success = "Đăng nhập thành công";
                break;
            } else {
                $login_error = "Thông tin không đúng";
            }
        }
    }
    if(isset($_POST["logout"])) {
        unset($_SESSION["taiKhoan"]);
        echo "Đăng xuất thành công";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
        <label for="">Tên đăng nhập:</label>
        <input type="text" name="username" require>

        <label for="">Mật khẩu:</label>
        <input type="password" name="password" require>

        <button type="submit" name="submit">Đăng nhập</button>
    </form>
    <!-- Nếu người dùng đăng nhập rồi thì mới hiển thị nút đăng xuất -->
    <form action="" method="POST">
        <button type="submit" name="logout">Đăng xuất</button>
    </form>
    <!-- Hiển thị lỗi -->
    <?php
        if (isset($login_success)) {
            echo "<p style='color: green;'>$login_success. Xin chào: $username</p>";
        } else if (isset($login_error)) {
            echo "<p style='color: red;'>$login_error</p>";
        }
    ?>
</body>
</html>


