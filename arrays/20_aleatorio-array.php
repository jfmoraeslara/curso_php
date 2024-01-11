<?php

echo "Array original <br>";
$arr = range(1, 10);
print_r($arr);
echo "<br><br>";

echo "Array aleatório <br>";
shuffle($arr);

print_r($arr);
echo "<br>";

?>