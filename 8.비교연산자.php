<?php
// 비교 연산자

$a = 10;
$b = "10";
$c = 11;
$d = 13;


if ($a == $b){
  echo "a와 b는 같다.";
} else {
  echo "a와 b는 다르다.";
}

print "<br>";

if ($a == $c){
  echo "a와 c는 같다.";
} else {
  echo "a와 c는 다르다.";
}

print "<br>";

if ($a == $c){
  echo "a와 c는 같다.";
} else {
  echo "a와 c는 다르다.";
}


print "<br>";
var_dump($c != $d);

if ($c != $d) {
  echo "c와 d는 같지 않다.";
} else {
  echo "c와 b는 같다.";
}

print "<br>";
var_dump($c <> $d);

if ($c <> $d) {
  echo "c와 d는 같지 않다.";
} else {
  echo "c와 b는 같다.";
}

print "<br>";

if ($a > $b) {
  echo "a는 b보다 크다.";
} else {
  echo "a는 b보다 크지 않다.";
}

print "<br>";

if ($a >= $b) {
  echo "a는 b보다 크거나 같다.";
} else {
  echo "a는 b보다 작거나 같다.";
}
?>