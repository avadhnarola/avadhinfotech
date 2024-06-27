<?php
$num=123456;
echo 'Number is : ',$num,'<br>';
$rev=0;


while($num>1){

    $rem = $num%10;
    $rev = ($rev*10)+$rem;
    $num=($num/10);
}

echo 'reverse Number is : ',$rev,'<br>';
?>