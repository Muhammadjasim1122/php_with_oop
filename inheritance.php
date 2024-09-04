<?php
class teacher {
    public $t_name;
    public $id;
    public $class;
    public $salary;

    public function __construct($name, $id, $class, $salary)
    {
        $this->t_name = $name;
        $this->id = $id;
        $this->class = $class;
        $this->salary = $salary;
    }

    public function info()
    {
        echo "<h3>Teacher Details</h3>";
        echo "Name: " . $this->t_name . "<br>";
        echo "ID: " . $this->id . "<br>";
        echo "Class: " . $this->class . "<br>";
        echo "Salary: " . $this->salary . "<br>";
    }
}

class student extends teacher {
    public $bonus;
    public $totalsalary;

    public function __construct($name, $id, $class, $salary, $bonus)
    {
        parent::__construct($name, $id, $class, $salary);
        $this->bonus = $bonus;
        $this->totalsalary = $this->salary + $this->bonus;
    }

    public function info()
    {
        echo "<h3>Student Details</h3>";
        echo "Name: " . $this->t_name . "<br>";
        echo "ID: " . $this->id . "<br>";
        echo "Class: " . $this->class . "<br>";
        echo "Total Salary (with Bonus): " . $this->totalsalary . "<br>";
    }
}

$t = new teacher("Ghulam", 1, "Computer", 10000);
$s = new student("Jasim", 2, "Math", 2000, 10000);

$t->info();
$s->info();

?>
