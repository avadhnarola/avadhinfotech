<?php

for($i=1;$i<=10;$i++){

    echo "Num : ",$i,"<br>";
    if($i==6){
        break;
    }
}

for($i=1;$i<=5;$i++){

    for($j=1;$j<=$i;$j++){
        echo " $j ";
    }
    echo "<br>";
}

for($i=1;$i<=5;$i++){

    for($j=1;$j<=$i;$j++){
        echo " $i ";
    }
    echo "<br>";
}

echo "<br>";        

for($i=1;$i<=5;$i++){

    for($j=$i;$j>=1;$j--){
        echo " $j ";
    }
    echo "<br>";
}

for($i=5;$i>=1;$i--){

    for($j=1;$j<=$i;$j++){
        echo " $j ";
    }
    echo "<br>";
}

echo "<br><br>";

for($i=1;$i<=10;$i+=2){

    for($j=1;$j<=$i;$j+=2){
        echo " $j";
    }
    echo "<br>";
}

echo "<br><br>";


$a=0;
$b=1;
$c=$a+$b;

echo "$a <BR>";
echo "$b <BR>";

while($c<=100){

    echo " $c <br>";
    $a=$b;
    $b=$c;
    $c=$a+$b;

}
?>
