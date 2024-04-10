<?php
//로컬변수와 지역변수
$x = 5;
$y = 5;
function myTest(){
  global $x; // 이렇게 글로벌로 지정해 주지 않으면
  // 밖에 있는 변수 x를 인식하지 못함.
  $y = 1;
  echo "<br>";
  echo "변수 x의 출력값 $x";
  echo "<br>";
  echo "변수 y의 출력값 $y";
  $y++; // y에다가 1씩 더해줘도 글로벌이 아니라서 밑에는 반영되지 않음.
}
echo "변수 y의 출력값 $y";
myTest();
?>