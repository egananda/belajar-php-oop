<?php
require_once "data/Confilct.php";
require_once "data/Helper.php";

use Data\One\Conflict as Conflict1;
use Data\Two\Conflict as Conflict2;
use function Helper\helpMe as help;
use const Helper\APPLICATION as APP;


$confilct1 = new Conflict1();
$confilct2 = new Conflict2();

help();
echo APP . PHP_EOL;
