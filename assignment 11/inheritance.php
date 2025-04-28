<?php
class Person {
    public $name;

    function setName($name) {
        $this->name = $name;
    }
}

class Student extends Person {
    public $rollNo;

    function setRollNo($rollNo) {
        $this->rollNo = $rollNo;
    }

    function display() {
        echo "Name: $this->name <br>";
        echo "Roll No: $this->rollNo <br>";
    }
}

$stud = new Student();
$stud->setName("Swara");
$stud->setRollNo("67");
$stud->display();
?>
