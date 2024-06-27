<?php
class car{
    public $name; // variable
     public $speed; 

     public function getdata($name,$speed){
        $this->name = $name;
        $this->speed = $speed;
     }
     public function show(){
        echo "name=",$this->name;
        echo "speed=",$this->speed,'<br>';
     }
}
$i10 = new car(); // object create
$audi = new car(); // object create
$i10->getdata('i10',300);
$audi->getdata('audi',500);
$i10->show();
$audi->show();


?>

<?php
class fruits{
   public $name;
   public $color;

   public function getData($name,$color){
      $this->name = $name;
      $this->color = $color;
   }

   public function show(){
      echo 'Name : ',$this->name;
      echo ' Color : ',$this->color,'<br>';
   }
}
// $mango = new fruits();
// $mango->getData('mango','yellow');
// $mango->show();

// $apple = new fruits();
// $apple->getData('apple','red');
// $apple->show();
?>

<?php
class student{
   public $roll_no;
   public $name;
   public $marks1;
   public $marks2;
   public $marks3;
   public $marks4;
   public $total;
   public $percentage;

   public function getData($roll_no,$name,$marks1,$marks2,$marks3,$marks4){
      $this->roll_no = $roll_no;
      $this->name = $name;
      $this->marks1 = $marks1;
      $this->marks2 = $marks2;
      $this->marks3 = $marks3;
      $this->marks4 = $marks4;

      $this->total = $marks1+$marks2+$marks3+$marks4;
      $this->percentage = $this->total/4;
   }

   public function show(){
      echo 'Roll no : ' ,$this->roll_no,'<br>';
      echo 'Name : ' ,$this->name,'<br>';
      echo 'Marks1 : ' ,$this->marks1,'<br>';
      echo 'Marks2 : ' ,$this->marks2,'<br>';
      echo 'Marks3 : ' ,$this->marks3,'<br>';
      echo 'Marks4 : ' ,$this->marks4,'<br>';
      echo 'Total : ' ,$this->total,'<br>';
      echo 'Percentage : ' ,$this->percentage,'<br>';
   }
 

}  

$stud1 = new student();
$stud1->getdata('1','Avadh','100','50','50','100');
$stud1->show(); 
?>

