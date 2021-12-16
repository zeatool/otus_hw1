<?php

namespace Romqa\Models;

use Romqa\Exception\InvalidKey;
use Romqa\Interfaces\UObject;

class Tank implements UObject
{
    private array $properties = [];

    /**
     * @throws InvalidKey
     */
    public function getProperty(string $key)
    {
        if (!array_key_exists($key, $this->properties)) {
            throw new InvalidKey();
        }

        return $this->properties[$key];
    }

    public function setProperty(string $key, $value): void
    {
        $this->properties[$key] = $value;
    }
}