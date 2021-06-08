<?php

class University{

    public $universityName = "Boston University<br>";

    function helloUniversity(){
        echo "Hello from University Class <br>" . PHP_EOL;
    }
}

class Teacher extends University{

    public $teacherName = "Jane";
    function helloTeacher(){
        echo "Hello from Teacher Class <br>" . PHP_EOL;
    }
}

$teacher1 = new Teacher();
$teacher1->helloTeacher();
$teacher1->helloUniversity();
echo $teacher1->teacherName . PHP_EOL;
echo $teacher1->universityName . PHP_EOL;
