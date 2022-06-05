<?php

namespace MyPsr4\Factory;

class Car
{
    public function __construct()
    {
        echo __CLASS__ . '<br>';
    }
}