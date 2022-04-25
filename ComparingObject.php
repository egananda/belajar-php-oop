<?php
require_once "data/Student.php";


$student1 = new Student();
$student1->name = "Ega";
$student1->id = "1";
$student1->name = "100";


$student2 = new Student();
$student2->name = "Ega";
$student2->id = "1";
$student2->name = "100";


var_dump($student1 == $student2);
var_dump($student1 === $student2);
var_dump($student1 === $student1);
