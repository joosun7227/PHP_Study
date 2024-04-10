<?php
$str = "나는 자랑스러운 미국인이다.";

// str_replace("바꿀문자열","바뀐문자열","대상문자열")
$str1 = str_replace("미국인","한국인", $str); //인자가 3개임.
echo $str;
print "<br>";
echo $str1;

print "<br>";
//php_number에 대해서 배워보자
$x = 33443;
var_dump(is_int($x)); //bool(true)
// is_int 이게 숫자냐?
$y = 3.8;

print "<br>";
if(is_int($y)){
  echo "y는 정수입니다.";
} else {
  echo "y는 정수가 아닙니다";
}

print "<br>";
if(is_float($y)){
  echo "y는 실수입니다.";
} else {
  echo "y는 실수가 아닙니다";
}
?>