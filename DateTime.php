<?php

$dateTime = new DateTime();
$dateTime->setDate(2022, 05, 10);
$dateTime->setTime(12, 12, 12, 0);

$dateTime->add(new DateInterval('P1Y'));

$MinusOneMoth = new DateInterval('P1M');
$MinusOneMoth->invert = true;
$dateTime->add($MinusOneMoth);


$strid = $dateTime->format('Y-m-d H:i:s');
echo "Waktu saat ini : $strid" . PHP_EOL;



// var_dump($dateTime);


$now = $dateTime->setTimezone(new DateTimeZone("America/Toronto"));

$string = $now->format("Y-m-d H:i:s");
echo "Current time : $string" . PHP_EOL;

// var_dump($now);
$date = DateTime::createFromFormat("Y-m-d H:i:s", "2022-05-10 10:10:10", new DateTimeZone('Asia/jakarta'));

if ($date) {
    var_dump($date);
} else {
    echo "Format salah";
}
