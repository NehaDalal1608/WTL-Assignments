<?php
class Student {
    public $name;
    public $rollNo;

    function setDetails($name, $rollNo) {
        $this->name = $name;
        $this->rollNo = $rollNo;
    }

    function display() {
        echo "Name: $this->name <br>";
        echo "Roll No: $this->rollNo <br>";
    }
}

$stud1 = new Student();
$stud1->setDetails("Neha", "45");
$stud1->display();
?>
