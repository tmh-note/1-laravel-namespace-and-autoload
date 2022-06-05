<?php

namespace MyPsr4\Animal;

class Mouse
{
    public function __construct()
    {
        echo __CLASS__ . '<br>';
    }
}