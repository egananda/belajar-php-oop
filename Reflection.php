<?php
require_once "Data/LoginRequest.php";
require_once "Exception/ValidationException.php";
require_once "Helper/ValidationUtil.php";


$request = new LoginRequest();
$request->username = "Ega";
$request->password = "Rahasia";
// ValidationUtil::validate($request);
ValidationUtil::ValidateReflection($request);



class RegisterUserRequest
{
    public ?string $name;
    public ?string $address;
    public ?string $email;
}


$register = new RegisterUserRequest();
$register->name = "Ridho";
$register->address = "Lampung";
$register->email = "ido@gmail.com";


ValidationUtil::ValidateReflection($register);
