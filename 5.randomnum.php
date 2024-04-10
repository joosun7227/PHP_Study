<?php
// abs()절대값
$a = -2.75;
$b = abs($a);
echo $b;

echo"<br>";
$c = sqrt(4);
echo $c;

echo"<br>";
$d = round($a);
echo $d;

echo"<br>";
//난수발생
$r = rand(1,10);
echo $r;

echo"<br>";
//상수발생 / 변하지 않는 값
define("GREETING","안녕하세요.");
$GREETING = "하하";
echo GREETING;

?>