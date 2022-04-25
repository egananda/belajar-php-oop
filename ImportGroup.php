<?php
require_once "data/Confilct.php";
require_once "data/Helper.php";


use Data\One\{Conflict as Conflict1, Sample, Dummy};
use function Helper\{helpMe};


$confilct1 = new Conflict1;
$sample = new Sample;
$dummy = new Dummy();

helpMe();
