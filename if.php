<?php

$a=10;
$b=20;
$c=15;

echo $a,"<br>";
echo $b,"<br>";
echo $c,"<br>";

if($a>$b){

    if($a>$c){

        echo "A IS MAX :",$a;
    }
    else{

        echo "C IS MAX :",$c;
    }
}else{

    if($b>$c){

        echo "B IS MAX : ",$b,"<br> ";
    }
}

$per=70.5;
var_dump($per);

if($per>=90 && $per<100){
    echo "grade A1";
}
elseif ($per>=80 && $per<90){
    echo "grade A2";
}
elseif ($per>=70 && $per<80){
    echo "grade B1";
}
elseif ($per>=60 && $per<70) {
    echo "grade B2";
}
else{
    echo "fail";
}


?>