<?php
require_once "data/Student.php";

$student = new Student();
$student->name = "Ega";
$student->id = "1";
$student->value = "100";
$student->getSample();


var_dump($student);


$student2 = clone $student;
$student2->id = "2";
var_dump($student2);
