<?php

spl_autoload_register(function($class) {
    $file  = str_replace("\\", "/", $class);
    include "./$file.php";
});