<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Các phương thức HTTP</title>
</head>

<body>
    <form action="" method="">
        <!-- 
            action: chỉ định đích đến của dữ liệu sẽ tới khi ta nhấn submit
                    (nếu để trống thì dữ liệu sẽ xử lý ở trang hiện tại luôn)
            method: Xác phương thức để gửi dữ liệu (GET, POST)
         -->
        <input type="text" name="name">
        <!-- 
            name chính là tên của các trường input
            nó sẽ được dùng để xác định key của trường dữ liệu khi gửi dữ liệu lên server
         -->
    </form>

    <h1>Phương thức GET</h1>
    <!-- 
        - Dữ liệu gửi lên thông url, và sẽ hiển thị trực tiếp trong thanh url
        - Ưu điểm: Dữ liệu sẽ được gửi đi rất nhanh
        - Thường được sử dụng cho các tác vụ nhỏ (tìm kiếm, truyền dữ liệu giữa các trang)
            không cần đến độ bảo mật cao
     -->
    <form action="test.php" method="GET">
        <label for="">Name:</label>
        <input type="text" name="name" placeholder="Nhập vào họ tên">
        <button type="submit">Submit</button>
    </form>

    <h1>Phương thức POST</h1>
    <!-- 
        - Dữ liệu sẽ được gửi ngầm đi, không thông qua url
        - Không giới hạn độ dài của dữ liệu
        - Thường được sử dụng cho các tác vụ lớn với dữ liệu, cần độ bảo mật cao
            (đăng nhập, thêm sửa dữ liệu, liên quan đến thông cá nhân)
     -->
    <form action="" method="POST">
        <label for="">Name:</label>
        <input type="text" name="name" placeholder="Nhập vào họ tên">
        <button type="submit">Submit</button>
    </form>
    <?php
    // Khi sử dụng GET dữ liệu sẽ được truyền lên url
    // dữ liệu sẽ trả về dưới dạng là 1 mảng liên hợp
    // Cách để lấy ra được giá trị
    // $_GET
    // var_dump($_GET);

    // Lấy ra thông tin
    // cú pháp: $_GET[key] // key chính là phương thức name ở trong phần tử HTML
    // echo $_GET["name"];

    // Trức khi xử lý dữ liệu bắt buộc phải kiểm tra xem người dùng đã ấn submit chưa
    // (đã có phương thức HTTP GET hay chưa)
    if (isset($_GET["name"])) { // Kiểm tra xem dữ liệu đã được gửi lên hay chưa
        echo "Hello " . $_GET["name"];
    }


    // -------------------POST-----------------//
    // Dữ liệu được gửi ngầm lên phía server
    // var_dump($_POST); // là 1 mảng liên hợp

    // Lấy ra thông tin
    // cú pháp: $_POST[key]
    // echo $_POST["name"];

    if (isset($_POST["name"])) {
        echo "Hello " . $_POST["name"];
    }

    // <input type="datetime-local" name="thoi_gian_di">
    $thoi_gian_di = $_POST["thoi_gian_di"];
    $dateTimeObject = new DateTime($thoi_gian_di); // Tạo 1 đối tượng DateTime
    $formatt = $dateTimeObject->format('Y-m-d H:i:s');

    echo $formatt; // Kết quả: "2023-07-19 15:53:00"
    ?>

    <!-- 
        Bài tập
        Sử dụng phương thức GET để truyền lên năm sinh của bạn
        Sau đó hiển thị sang 1 trang mới là: 
        "Em sinh năm: ...."
        "Tuổi của em là: ... tuổi"
    -->
</body>

</html>