<!-- 1 -->
<?php
function sum($max){
  $result = 0;
  for($i = 1; $i<=$max; $i++){
    $result+=$i;
 }
  return $result;
}
echo sum(10);


// 2

function f($a,$b){
  return $a+ $b;
}
echo f(3,8);


// 3
function f($arr){
  $total=1;
  foreach($arr as $value){
    $total *= $value;
  }
  return $total;
}
echo f(array(1,3,5,7,9)) . "\n";


// 4
function max_array($arr){
  $max_number = $arr[0];
  foreach($arr as $a){
    if ($max_number < $a){
      $max_number = $a;
    }
  }
  return $max_number;
}
echo max_array
// 5
// strip_tags

$text ='<p>Test paragraph.</p><!- Comment--><a href="#fragment">Other text</a>';
echo strip_tags($text);
echo "\n";
echo strip_tags($text,'<p><a>');


// array_push
 $stack = array("orange","banana");
 array_push($stack,"apple","raspberry");
 print_r($stack);

 // array_merge
 $array1 = array("color"=>"red",2,4);
 $array2 = array("a","b","color"=>"green","shape"=>"trapezoid",4);
 $result =array_merge($array1,$array2);
 print_r($result);

// time, mktime

 $nextWeek = time()+(7*24*60*60);
 echo 'Now:       ' . date('Y-m-d') . "\n";
 echo 'Next Week: ' . date('Y-m-d',$nextWeek) ."\n";
 echo 'Next Week:' .  date('Y-m-d', strtotime('+1week')) . "\n";

 // date

 $today = date("F j,Y,g:i a");
