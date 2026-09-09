<?php
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

$number = 7; 

if (kiemTraSoNguyenTo($number)) {
    echo "Số $number là số nguyên tố.";
} else {
    echo "Số $number KHÔNG phải là số nguyên tố.";
}
?>