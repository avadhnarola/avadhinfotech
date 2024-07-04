<?php
$num=4567654;
echo 'Number is : ',$num,'<br>';
$rev=0;


while($num!=0){

    $rem = $num%10;
    $rev = ($rev*10)+$rem;
    $num=floor($num/10);
}

echo 'reverse Number is : ',$rev,'<br>';
?>