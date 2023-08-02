<?php
require('connection.php');
// Viết câu truy vấn
$sql_users = "SELECT users.*, roles.name_role FROM users INNER JOIN roles ON users.role_id = roles.id";
// Lấy ra danh sách người dùng từ database
$users = $connect->query($sql_users)->fetchAll();

// // Lấy ra toàn bộ dữ liệu của bảng roles
// $sql_roles = "SELECT * FROM roles";
// // Lấy ra danh sách người dùng từ database
// $roles = $connect->query($sql_roles)->fetchAll();

// print_r($roles);
// echo "<br>";
// // Tạo 1 mảng mới để chứa thông tin role_name tương ứng với người dùng
// $roleName = [];
// foreach ($roles as $role) {
//     $roleName[$role["id"]] = $role["name_role"];
// }
// print_r($roleName);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Danh sách người dùng</h2>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Image</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Role</th>
            <th>Status</th>
        </tr>
        <?php foreach ($users as $user) : ?>
            <tr>
                <td><?php echo $user["id"] ?></td>
                <td><?php echo $user["image"] ?></td>
                <td><?php echo $user["name"] ?></td>
                <td><?php echo $user["email"] ?></td>
                <td><?php echo $user["phone"] ?></td>
                <!-- <td><?php //echo $roleName[$user["role_id"]] ?></td> -->
                <td><?php echo $user["name_role"] ?></td>
                <td><?php echo $user["status"] == 0 ? 'Hoạt động' : 'Ngừng hoạt động' ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>