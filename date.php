<?php 
echo "<h2>Date Function</h2>";
// 1. date();
echo date('d-F-Y'),'<br><br><br>';

// 2. getdate();
// print_r(getdate());
$dt=getdate();
foreach($dt as $key=>$val)
echo "$key = $val<br>";
echo "<br><br>";

// 3. setdate();
$date = new DateTime();
$date->setDate(2006,05,25);
echo $date->format('U:d-F-Y'),'<br><br><br>';

// 4. checkdate();
$format = checkdate(05,25,2006);
if($format==true){
    echo 'This is right Format <br><br><br>';
}else{
    echo 'This is wrong Format <br><br><br>';
}

// 5. time();
echo time(),'<br><br><br>';

// 6. mktime();
$userDate = mktime(12,59,45,05,25,2006);
echo date('d-m-y',$userDate);
?>