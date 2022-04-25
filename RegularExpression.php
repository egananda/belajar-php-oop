<?php

$mathces = [];

$result = preg_match_all("/ega|ridho|ian/i", "Ega Nanda Brilian", $mathces);
var_dump($result);
var_dump($mathces);


$result = preg_replace("/anjing|bangsat/i", "***", "Dasar lu Anjing, Bangsat");

var_dump($result);


$result = preg_split("/[\s,-]/", "Ega Nanda Brilain,Fullstack-Developer");

var_dump($result);
