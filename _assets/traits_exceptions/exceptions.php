<?php

class InvalidTypeException extends Exception
{
    public function __construct($message = 'Invalid type')
    {
        parent::__construct($message);
    }
}

class ShippingException extends Exception
{
    public function __construct($message)
    {
        parent::__construct($message);
    }
}
