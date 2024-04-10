<?php
echo "1";
print "2";

echo("3");
print("4");

echo"<h2>php는 재밌다.</h2>";
echo"<h2>hello world <br></h2>";
echo"I am about to learn PHP! <br>";

//변수와도 같이 사용이 가능함
$txt1 = "Learn PHP";
$x = 5;
$y = 4;
echo "<h2>".$txt1."<h2>"; // .은 변수 연결자 python +랑 비슷함.
echo $x + $y;
print "<br>";

// 변수 타입
$x = 3333;
$y = 3.6;
$z = "문자"; //한글하나당 3bite로 카운트됨
$a = "1111";
$b = strlen("한글");

var_dump($x); // int(3333)

print "<br>";
var_dump($y); // float(3.6)

print "<br>";
var_dump($z); // sting(9) "문자열"

print "<br>";
var_dump($a); // sting(4) "1111"

print "<br>";
var_dump($b); // int(6)

//단어수 세기 (한글은 안됨)
print "<br>";
echo str_word_count("Hello World"); // 2

//문자열 뒤집는 함수
print "<br>";
echo strrev("Hello World");

//문자열에서 
print "<br>";
$a = strpos("Hello world","world"); //6째 자리에서 문자열이 멈춤
echo $a;

print "<br>";
//strpos로 이메일이 맞는지 구분하기
$email = "aaa@gmail.com";
if ( strpos ($email,"@") ){
  echo "이메일 형식이 맞음";
} else {
  echo "이메일 형식에 맞지 않음";
}
?>

