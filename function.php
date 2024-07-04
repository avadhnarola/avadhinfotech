<?php
//user-defined function
//no argument , no return type
//no argument , with return type
//with argument , no return type
//with argument , with return type


// 1. no argument , no return type
function greet(){
   echo 'Welcome to my function <br>';
}
greet();

// 2. no argument , with return type
function add(){
   $a = 10;
   $b = 200;

   return $a+$b;
}

echo add(),'<br>';

// 3. with argument , no return type
function sum($a,$b){
// $a=10;$b=20;
$sum = $a+$b;
echo $sum,'<br>';
}

sum(10,20);


// 4. with argument , with return type
function multiplication($a,$b){
   // $a=10;$b=20;
   $sum = $a * $b;
   return $sum;
   }
   
   echo multiplication(10,20);
   
?>

