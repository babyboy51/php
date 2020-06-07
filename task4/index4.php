<?php
//1
function double($x){
    echo $x * 2;
    echo "\n";
}
double(2);
//2
function f($a, $b){
    echo $a + $b;
    echo "\n";
}
f(1, 2);
//3
function arr($arr){
    $total = 1;
    foreach($arr as $ar){
        $total *= $ar;
    }
    return $total;
}
echo arr(array(1, 3, 5, 7, 9)) . "\n";
//4
function max_array($max_arr){
    $max_number = $max_arr[0];
    foreach($max_arr as $value){
        if ($max_number < $value){
            $max_number = $value;
        }
    }
    return $max_number;
}
echo max_array(array(1, 3, 5, 7, 9));
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
