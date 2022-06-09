<?php

function my_autoloader($class)
{
    $filename = realpath(dirname(__DIR__)) . '/src/' . str_replace('\\', '/', $class) . '.php';
    include($filename);
}
spl_autoload_register('my_autoloader');
