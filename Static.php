<?php
require_once "Helper/MathHelper.php";

use Helper\MathHelper;

echo MathHelper::$name . PHP_EOL;
MathHelper::$name = "Ega Nanda Brilian";
echo MathHelper::$name . PHP_EOL;


$result = MathHelper::sum(10, 10, 10, 10, 10);
echo "result $result" . PHP_EOL;
