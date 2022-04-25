<?php
require_once "data/Student.php";

$student = new Student();
$student->name = "Ega";
$student->id = "1";
$student->value = "100";


$student("ega", true, 2, "ridho");
