<?php
//논리연산자
//and, or, xor, &&, ||, !

//and
$x = true;
$y = true;
$z = false;

// 논리곱
// true true = true
// true false = false
// false true = false
// false false = false
var_dump(($x and $y)); // 1 * 1 = 1
print "<br>";
var_dump(($x && $y)); // 1 * 1 = 1
print "<br>";
var_dump(($x && $z)); // 1 * 1 = 1
print "<br>";
print "<br>";

//논리합
// true true = true
// true false = true
// false true = true
// false false = false
var_dump(($x or $y)); // 1 + 0 = 1 ture
print "<br>";
var_dump(($x || $y)); // 1 + 0 = 1  ||
print "<br>";
var_dump(($x or $z)); // 1 + 0 = 1
print "<br>";
var_dump(($x or $z)); // 1 + 1 = 2

print "<br>";
print "<br>";
var_dump($x); // true
print "<br>";
var_dump(!$x); // false

//xor
// true true = false; 남남 아님
// true false = true; 남여 좋음
// false true = true; 여남 좋음
// false false = false; 여여 아님
print "<br>";
var_dump($x xor $y);

print "<br>";
// 문자열 연산자
$a = "깔끼";
$b = "하네";
echo $a.$b;
?>