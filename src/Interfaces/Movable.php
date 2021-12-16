<?php

namespace Romqa\Interfaces;

use Romqa\Math\Point;

interface Movable
{
    public function getPosition(): Point;

    public function setPosition(Point $point): void;

    public function getVelocity(): Point;
}