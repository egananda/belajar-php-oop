<?php
require_once "data/Student.php";

$student = new Student();
$student->name = "Ega";
$student->id = "1";
$student->value = "100";



$string = (string) $student;

echo $string . PHP_EOL;

// atau bisa juga
echo $student;
