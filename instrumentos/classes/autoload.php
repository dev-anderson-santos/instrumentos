<?php

$pathlocal = dirname(__FILE__);
require_once(dirname($pathlocal). DIRECTORY_SEPARATOR ."lib.php");

function __autoload($class) {
    $class = str_replace('..', '', $class);
    require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR ."$class.php");
}