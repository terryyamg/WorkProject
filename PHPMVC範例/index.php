<?php

// 載入設定
require_once 'config.php';

function __autoload($class_name)
{
    require_once $class_name . '.php';
}

$actions = new Actions;
$actions->run();