<?php
//for 문
//for (시작값 ; 조건; 증감식) {}
for ($i = 1; $i < 10; $i = $i +2) {
  echo "<h3>$i for출력</h3>";
}

//for each 문
// 배열

// 자바스크립트의 for of, for in과 비슷
$arr = array('사과','바나나','딸기','오렌지');

foreach($arr AS $fruit) {
  echo "<h2>$fruit</h2>";
}

// php 5.4 부터는 다음과 같은 형식도 지원함
$list = ['주선','금성','주은'];

foreach($list AS $kids){
  echo "<h2>$kids</h2>";
}

// 이런 형식도 가능함
$area = array(
  1 => "해운대",
  2 => "기장",
  3 => "금정",
  4 => "광안리"
);
foreach($area AS $key => $place){
  echo "<h2>기호 $key 번 $place</h2>";
}

?>