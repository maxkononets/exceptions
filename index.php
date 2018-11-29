<?php


class Test
{
    protected static $a = 0;

    public static function getInstance($password)
    {
        if ($password !== self::$a){
            throw new Exception('invalid password!');
        }

        return new static();
    }

    public function __toString()
    {
        return static::class;
    }

}