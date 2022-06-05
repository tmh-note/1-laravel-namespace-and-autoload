<?php

namespace MyPsr4\Animal;

class Cat
{
    public function __construct()
    {
        echo __CLASS__ . '<br>';
    }
}