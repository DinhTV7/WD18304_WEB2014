<!-- 
    - Cookie cũng dùng để lưu trữ dũ liệu tạm thời nhưng chỉ trong 1 khoảng thời gian nhất định
    - Cookie sẽ bị xóa khi nó hết hạn
    - Muốn xóa Cookie thì Set thời gian < realtime
 -->
<?php
$name = "DinhTV7";
$class = "WD18304";
// Đăng ký khởi tạo Cookie
// cú pháp: setcookie(tên cookie, giá trị, thời gian tồn tại)
setcookie("name", $name, time() + 5); // Cookie name sẽ tồn tại trong 5s
setcookie("class", $class, time() + 5);
if (isset($_COOKIE["name"])) {
    echo "Xin chào " . $_COOKIE["name"];
} else {
    echo "Cookie không tồn tại hoặc là hết hạn";
}
?>
<!-- 
    Cho một mảng dữ liệu users
    Tạo 1 form đăng nập (username và password)
    Kiểm tra người dùng có nhập đúng tài khoản hay không\
        - Đưa toàn bộ thông tin đăng nhập vào COOKIE
        - Nếu đúng Thì hiển thị "Xin chào, $username" sang 1 trang mới
        - Nếu sai thì hiển thị "Sai thông tin đăng nhập" sang 1 trang mới
        - Sau 1 khoảng thời gian bằng với thời gian tồn tại của cookie thì reload lại trang
            Nếu cookie không còn thì hiển thị "Phiên đăng nhập của bạn đã hết"
    
    header("Location: test_cookie.php")     // Chuyển sang trang mới
    header("Refresh: thời gian (s)")        // Reload lại sang sau bảo nhiêu giây
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