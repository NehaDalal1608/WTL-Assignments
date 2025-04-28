<?php
$a = 15;
$b = 25;
$c = 20;

if ($a > $b && $a > $c) {
    echo "$a is the greatest.";
} elseif ($b > $c) {
    echo "$b is the greatest.";
} else {
    echo "$c is the greatest.";
}
?>
