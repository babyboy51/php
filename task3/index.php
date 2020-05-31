<?php
// 1
 $name = Misaki;
 if($name = Misaki){
   echo "あなたの名前ではありません";
 } else if($name = Mizuki){
   echo "あなたの名前ではありません";
 } else{
   echo "私はあなたの名前です";
 }

// 2
for($i =1; $i<=10000;$i++){
  echo $i;
  echo "\n";
}

// 3
$fruits = array("apple","orange","melon","lemon","banana");
foreach ($fruits as $value){
  echo "要素は" . $value;
  echo "\n";
}
// 4
$start = 1;
$end = 100;
for($i = $start; $i < $end; $i++){
if($i % 5== 0){
echo $i;
  }
}
