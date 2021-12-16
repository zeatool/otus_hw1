<?php

namespace Romqa\Math;

class Point
{
    public float $x;
    public float $y;

    public function __construct(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public static function plus(Point $a, Point $b)
    {
        return new Point($a->x + $b->x, $a->y + $b->y);
    }

}