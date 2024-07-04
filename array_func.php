<?php

// 1. count
$student=array(1,"Ravi","Lathi",9898983650);
echo "No of Ele :".count($student);

// 2. list

list($no,$name,$city)=$student;
echo "<br>No = ".$no;
echo "<br>Name = ".$name;
echo "<br>Name = ".$city;

// 3. is_array
if(is_array($student))
echo "<br>It is array variable";
else
echo "<br>Sorry its not an array variable";

// 4. in_array
if(in_array("Ravi",$student))
echo "<br>Value is found";
else
echo "<br>Value is NOT Found";

// 5. current()
?>