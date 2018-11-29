<?php
/**
 * Created by PhpStorm.
 * User: kononec
 * Date: 28.11.18
 * Time: 16:24
 */
require_once ('index.php');

try{
    $instance = Test::getInstance(0);
    echo $instance;
} catch (Exception $exception){
    echo $exception->getFile() . ' in line ';
    echo $exception->getLine() . PHP_EOL . 'message: ';
    echo $exception->getMessage() . PHP_EOL;
}

