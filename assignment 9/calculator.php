<?php
$a = 12;
$b = 4;
$operator = '*';  // +, -, *, /

switch ($operator) {
    case '+':
        echo "Sum: " . ($a + $b);
        break;
    case '-':
        echo "Difference: " . ($a - $b);
        break;
    case '*':
        echo "Product: " . ($a * $b);
        break;
    case '/':
        if ($b != 0) {
            echo "Quotient: " . ($a / $b);
        } else {
            echo "Cannot divide by zero.";
        }
        break;
    default:
        echo "Invalid operator.";
}
?>
