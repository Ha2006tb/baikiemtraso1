<?php
// Bài 1: In số chẵn từ 1 đến 10
echo "Các số chẵn từ 1 đến 10 là: <br>";

for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo $i . " ";
    }
}
?>