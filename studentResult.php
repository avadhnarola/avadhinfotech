<?php

// $name = array('Avadh','Tirth','Krish','Aditya','Dharmik','Jemin','Meet','Bhargav','Manan','Deep');
// echo $name[1];

$student = array();

for($i=1;$i<=10;$i++){
    $sub = array();
        for($j=1;$j<=5;$j++){ // for subject
            $sub['sub'.$j]=rand(1,100);
        }
        // print_r($sub);
        $student['student '.$i]=$sub;
    }
// print_r($student);

// echo '<br>';

echo '<h2>Student Result</h2>';
?>
<table border='1'>
<th>Roll No</th>
<th>Name</th>
<th>Sub 1</th>
<th>Sub 2</th>
<th>Sub 3</th>
<th>Sub 4</th>
<th>Sub 5</th>
<th>Total</th>
<th>Per</th>
<th>Min</th>
<th>Max</th>
<th>Grade</th>



<tr>
    <?php
    $id = 1;
    foreach($student as $key=>$sub){
        // echo $key;
        // print_r($sub);
        $total=0;
        $min=100;
        $max=0;
    ?>
        <td>
            <?php echo $id;?>
        </td>
        <td>
            <?php echo $key;?>
        </td>
        <?php foreach($sub as $marks) { ?>
            <td>
                <?php echo $marks; ?>
            </td>
        <?php 
            $min = min($min,$marks);
            $max = max($max,$marks);
            $total = $total+$marks;
            $per = $total/5;

            if($per>=80 && $per<=99 ){
                $grd = "A";
            }
            elseif($per>=60 && $per<80){
                $grd = "B";
            }
            elseif($per>=40 && $per<60){
                $grd = "C";
            }
            else{
                $grd = "Fail";
            }
        ?>
        <?php  } ?>
        <td><?php echo $total?></td>
        <td><?php echo $per?></td>
        <td><?php echo $min?></td>
        <td><?php echo $max?></td>
        <td><?php echo $grd?></td>
        
</tr>

<?php 
$id++;
// echo '<br>';
}?>

</table>

<style>

table,tr,td{
    border: 1px solid gray;
    border-collapse: collapse;
    padding: 10px;
    margin: auto;
    text-align: center;
}
th{
    background-color:#CCCCFF;
    border: 2px solid gray;
    padding: 10px;
}
h2{
    text-align: center;
    font-family: "LXGW WenKai TC", cursive;
    font-weight: 400;
    font-style: normal;
    margin-top: 20px;
}
</style>