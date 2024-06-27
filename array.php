<?php
//array is a kind of variable in which we can store multiple values
//there are 3 types of array
//indexed array
//associative array
//multi-dimensional array

// $arr = array('hello',76,'fdf',78);

// for($i=0;$i<count($arr);$i++){
//     echo $arr[$i],"<br>";
// }

//for
//while
//do-while
//for-each

// foreach($arr as $a){
//     echo $a,'<br>';
// }


// Associative Array
// $arr1 = array('name'=>'user','email'=>'user@gmail.com');
// print_r($arr1);
// print_r($arr);

// foreach($arr1 as $x=>$y){
//     echo 'key : ',$x '=>' ,'value : ',$y,'<br>';
// }


// Multi-Dimensional Array
// $arr2 = array(array(2,3,4),
//             array(4,5,6),
//             array(7,8,9));
// print_r($arr2);

// foreach($arr2 as $ar){
//     var_dump($ar);
// }




//1.Indexed Array
// $arr = array('hello',9090,'ABC',25,'XYZ');
// print_r ($arr);

// foreach($arr as $a){
//     echo $a ,'<br>';
// }
// echo '<br>';

// for($i=0;$i<count($arr);$i++){ // count is used as a .lenght
//     echo "$arr[$i] <br>";
// }

//2.Associative Array

// $arr1 = array('name'=>'Avadh','age'=>19,'email'=>'avadhnarola25@gmail.com');
// print_r($arr1);

// foreach($arr1 as $key => $value){
//     echo $key,' : ',$value,'<br>';
// }
// echo '<br>';

// foreach($arr1 as $b=>$y){
//     echo $b,' - ',$y,'<br>'; 
// }

//3.Multi-Dimensional Array

$arr2 = array(array(1,2,3),
              array(4,5,6,
              array(7,8,9)));

foreach($arr2 as $m){
    print_r($m);
}

?>