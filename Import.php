<?php
require_once "data/Confilct.php";
require_once "data/Helper.php";

use Data\One\Conflict;
use function Helper\helpMe;
use const Helper\APPLICATION;


$confilct = new Conflict();

helpMe();
echo APPLICATION . PHP_EOL;
