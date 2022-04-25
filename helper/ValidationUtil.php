<?php

class ValidationUtil
{
    static function validate(LoginRequest $request)
    {
        if (!isset($request->username)) {
            throw new ValidationException("username is null");
        } elseif (!isset($request->password)) {
            throw new ValidationException("password is null");
        }
    }


    static function ValidateReflection($request)
    {
        $reflection = new ReflectionClass($request);
        $properties = $reflection->getProperties(ReflectionProperty::IS_PUBLIC);


        foreach ($properties as $property) {
            if (!$property->isInitialized($request)) {
                throw new ValidationException("$property->name is not set!");
            } elseif (is_null($property->getValue($request))) {
                throw new ValidationException("$property->name is null!");
            }
        }
    }
}
