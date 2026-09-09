<?php
// Bài 3: Hàm in hình chữ nhật (chiều rộng 5, chiều cao 3)
function inHinhChuNhat($chieuRong, $chieuCao) {
    for ($i = 0; $i < $chieuCao; $i++) {
        for ($j = 0; $j < $chieuRong; $j++) {
            echo "* ";
        }
        echo "<br>"; // Xuống dòng trên trình duyệt web
    }
}

echo "Hình chữ nhật 5x3: <br>";
// Gọi hàm in hình chữ nhật rộng 5, cao 3
inHinhChuNhat(5, 3);
?>