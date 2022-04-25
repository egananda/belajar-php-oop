<?php
require_once "data/LoginRequest.php";
require_once "exception/ValidationException.php";
require_once "helper/Validation.php";


$loginRequest = new LoginRequest();
$loginRequest->username = " ";
$loginRequest->password = " ";

// try {
//     ValidateLoginRequest($loginRequest);
// } catch (ValidationException $exception) {
//     echo "Validation error : {$exception->getMessage()};" . PHP_EOL;
// } catch (Exception $exception) {
//     echo "Validation error : {$exception->getMessage()};" . PHP_EOL;
// }


try {
    ValidateLoginRequest($loginRequest);
    echo "VALID" . PHP_EOL;
} catch (ValidationException | Exception $exception) {
    echo "Error : {$exception->getMessage()};" . PHP_EOL;
    var_dump($exception->getTrace());
    var_dump($exception->getTraceAsString());
} finally {
    echo "ERROR GAK ERROR TETAP DIEKSEKUSI" . PHP_EOL;
}
