<?php
    echo "hello world!" ,"Heelo from 2nd paramerter<br>";

    print("hello world!");

    $a=10;
    $b=20;
    echo "$a<br>";

    if($a>$b){
        echo "A is big <br>";
    }
    else{
        echo "B is Big<br>";
    } 
var_dump($a) // give type of variable
?>

<?php 
 $student = array();
 for($i=1;$i<=10;$i++) {
    $sub = array();
    {
        for($j=1;$j<=5;$j++){
            $sub['sub'.$j]=rand(0,100);
        }
        $student['student'.$i] = $sub;
    }
 }
?>     

<table border=''>
    <th>id</th>
    <th>student</th>
    <th>sub1</th>
    <th>sub2</th>
    <th>sub3</th>
    <th>sub4</th>
    <th>sub5</th>
    <th>Min</th>
    <th>max</th>
    <th>total</th>                              
    <th>pr</th>                                                                                                     
    <th>status</th>

    <tr>
        <?php $id = 1; 
            foreach($student as $key => $sub) 
            { 
            $min = 100;
            $max = 0;
            $sum = 0;
            $cnt = 0;
            ?>
            <td>
                 <?php echo $id; ?> 
            </td>
            <td>
                <?php echo $key; ?>
             </td>
                <?php foreach($sub as $marks) { ?>
            <td>
                <?php echo $marks; ?>
            </td>
            <?php $min = min($min,$marks);
                 $max = max($max,$marks);
                 $sum = $sum+$marks;
                 $pr = $sum/5;

                if($marks<=35)
                {
                    $cnt++;
                }
                if($cnt>=3)
                {
                    $st = "fail";
                }else 
                if($cnt>0 && $cnt<3 )
                {
                    $st = "AT/KT";
                }else if($cnt==0)
                {
                    $st = "pass";
                }
                ?>

            <?php } ?>
                <td><?php echo $min?></td>
                <td><?php echo $max?></td>
                <td><?php echo $sum?></td>
                <td><?php echo $pr?></td>
                <td><?php echo $st?></td>
    </tr>
            
        <?php
        $id++;
        }?>