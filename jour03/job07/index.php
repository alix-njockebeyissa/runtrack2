<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais.";

$length = strlen($str);
$permutatedStr = $str[$length - 1] . substr($str, 0, $length - 1);

for ($i = 0; $i < $length; $i++) {
    $permutatedStr[$i] = $str[($i + 1) % $length];
}

echo $permutatedStr;
?>