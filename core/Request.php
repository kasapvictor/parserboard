<?php

class Request
{
    public static function uri()
    {
        return str_replace(  '/' , '', trim ( $_SERVER['REQUEST_URI'] ?? '' , '/' ) );
    }
}
