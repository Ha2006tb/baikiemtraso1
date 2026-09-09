<?php
// Bài 2: Kiểm tra số nguyên tố
function kiemTraSoNguyenTo($n) {
    if ($n < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

// Thay đổi giá trị số cần kiểm tra tại đây
$number = 7; 

if (kiemTraSoNguyenTo($number)) {
    echo "Số $number là số nguyên tố.";
} else {
    echo "Số $number KHÔNG phải là số nguyên tố.";
}
?>