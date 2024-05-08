<?php
function discriminantCalculator($a, $b, $c) {
    return ($b * $b) - (4 * $a * $c);
}

$a = $_GET["a"];
$b = $_GET["b"];
$c = $_GET["c"];

$discriminant = discriminantCalculator($a, $b, $c);

echo "<h2>Result:</h2>";
echo "Answer: " . $discriminant;
?>