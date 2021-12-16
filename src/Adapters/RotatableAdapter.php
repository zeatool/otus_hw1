<?php

namespace Romqa\Adapters;

use Romqa\Interfaces\Movable;
use Romqa\Interfaces\Rotatable;
use Romqa\Interfaces\UObject;
use Romqa\Math\Point;

class RotatableAdapter implements Rotatable
{
    protected UObject $obj;

    public function __construct(UObject $obj)
    {
        $this->obj = $obj;
    }

    public function getDirection(): int
    {
        return $this->obj->getProperty('direction_angle');
    }

    public function setDirection(int $angle): void
    {
        $this->obj->setProperty('direction_angle', $angle);
    }

    public function setStepDirection(int $step): void
    {
        $this->obj->setProperty('direction_step', $step);
    }

    public function getStepDirection(): int
    {
        return $this->obj->getProperty('direction_step');
    }
}