<?php
$num = 7;

$flag = true;
if ($num < 2) {
    $flag = false;
} else {
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            $flag = false;
            break;
        }
    }
}

if ($flag) {
    echo "$num is a Prime Number";
} else {
    echo "$num is Not a Prime Number";
}
?>
