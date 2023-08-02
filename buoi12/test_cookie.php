<?php
if (isset($_COOKIE["name"])) {
    echo "Xin chào " . $_COOKIE["name"];
} else {
    echo "Cookie không tồn tại hoặc là hết hạn";
}