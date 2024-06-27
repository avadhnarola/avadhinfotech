<?php

$student=array();

for($i=1;$i<=10;$i++){

    $sub=array();

    for($j=1;$j<=5;$j++){

        $sub['Sub'.$j]=rand(1,100);
    }
    $student['Student '.$i]=$sub;
}

// print_r($student);

echo '<h2>Student Result</h2>';
?>
<table border=''> 
    <th>Roll No</th>
    <th>Name</th>
    <th>Sub1</th>
    <th>Sub2</th>
    <th>Sub3</th>
    <th>Sub4</th>
    <th>Sub5</th>
    <th>Total</th>
    <th>Per</th>
    <th>Min</th>
    <th>Max</th>
    <th>Grade</th>

    <tr>
        <?php
            $roll_no=1;
            foreach($student as $key=>$sub){
                echo $key;
                print_r($sub);
            
        ?>
        <td>
            <?php echo $roll_no;?>
        </td>
        <td>
            <?php echo $key;?>
        </td>
            <?php 
                foreach($sub as $marks){?>
                    <td>
                     <?php echo $marks;?> 
                    </td>
        <?php }?>
        <?php $roll_no++; }?>
    </tr>
</table>

