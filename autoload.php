<?php
function autoload($classname) {
    $path = '.' . DIRECTORY_SEPARATOR . $classname . '.php';
    if (is_file($path)) {
        require_once ($path);
    } else {
        echo "Файл не найден";
    }
}

spl_autoload_register('autoload');

