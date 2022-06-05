<?php

namespace MyPsr4\Animal;

class Dog
{
    public function __construct()
    {
        echo __CLASS__ . '<br>';
    }
}