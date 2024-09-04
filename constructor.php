<?php
class constructor{
   public $name;
   public  $age;

   public function __construct($name , $age)
  {
    $this->name = $name;
    $this->age = $age;

  }

    public function show()
    {
        echo $this->name . " - " . $this->age;
    }


}


$p1 = new constructor("yahooo baba " , 10);
// $this->age = new constructor();
$p1->show();


?>