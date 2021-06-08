<?php


require_once "University.php";
require_once "Teacher.php";

$university = new University("Boston University", "Europe", "ABC123");
$university2 = new University("Boston University2", "Europe2", "DEF456");

$teacher1 = new Teacher("John", 45, "Maths", $university);
$teacher2 = new Teacher("Jane", 60, "Physics", $university2);

$teacher1->printTeacherDetails();
$teacher1->printUniversityDetails();
echo "------------------------------------" . PHP_EOL;
$teacher2->printTeacherDetails();
$teacher2->printUniversityDetails();

