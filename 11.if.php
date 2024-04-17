 <?php
 // if문

 // if (조건문){
 // 만족할떄 처리
 // } else {
 // 반대의 경우 처리
 // }
$a = 10;

if(true){
  echo $a ."은 5보다 큽니다.";
} else {
  echo $a ."은 5보다 작습니다.";
}

echo "<br>";
// if else 중첩처리
$b = 87;

if ($b >= 90) {
  echo "당신은 A입니다.";
} else if ($b >= 80){
  echo "당신은 B입니다.";
} else {
  echo "당신은 C이하 입니다.";
}

echo "<br>";
$c = 87;
$d = "남자";

if ($b >= 90) {
  if ($d == "여자") {
    echo "당신은 A이고 여자입니다.";
  } else {
    echo "당신은 A이고 남자입니다.";
  }
} else if ($b >= 80){
  if ($d == "여자") {
    echo "당신은 B이고 여자입니다";
  } else {
    echo "당신은 B이고 남자입니다";
  }
} else {
  echo "당신은 C이하 입니다.";
}


echo "<br>";
echo "<h1>가위바위보 게임</h1>";
// swich case
$e = rand(1,4);

switch($e){
  case 1:
    echo "가위입니다";
    break; //break를 안해주니까 계속 이어지네...
  case 2:
    echo "바위입니다";
    break;
  case 3:
    echo "보입니다";
    break;
  default :
    echo "범위를 벗어났습니다";
}

echo "<br>";
echo "<h1>색깔 게임</h1>";
// swich case
$color = "red";

switch($color){
  case "red":
    echo "빨강입니다.";
    break; 
  case "blue":
    echo "파랑입니다";
    break;
  case "black":
    echo "검정입니다";
    break;
  default :
    echo "범위를 벗어났습니다";
}
?>