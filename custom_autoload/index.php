<?php

spl_autoload_register(function($class) {
    $file  = str_replace("\\", "/", $class);
    include "./$file.php";
});

use Zoo\Animal\Cat;
use Zoo\Animal\Dog;
use Factory\Car;

new Cat;
new Dog;
new Car;
