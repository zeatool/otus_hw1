<?php

namespace Romqa\Adapters;

use Romqa\Interfaces\Movable;
use Romqa\Interfaces\UObject;
use Romqa\Math\Point;

class MovableAdapter implements Movable
{
    protected UObject $obj;

    public function __construct(UObject $obj)
    {
        $this->obj = $obj;
    }

    public function getPosition(): Point
    {
        return $this->obj->getProperty('position');
    }

    public function setPosition(Point $point): void
    {
        $this->obj->setProperty('position', $point);
    }

    public function getVelocity(): Point
    {
        return $this->obj->getProperty('velocity');
    }
}