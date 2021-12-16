<?php

namespace Romqa\Interfaces;

interface UObject
{
    public function getProperty(string $key);
    public function setProperty(string $key, $value) : void;
}