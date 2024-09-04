<?php
class access{
    protected $name;


    public function __construct($n) {
        $this->name = $n;
    }
    protected function show()  {
        echo $this->name ;
    }
}
    class derived extends access {
        public function get(){ 
             echo $this->name ;
    }
}


$name = new derived("ali");
$name->get();




?>