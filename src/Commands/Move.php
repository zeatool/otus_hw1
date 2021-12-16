<?php

namespace Romqa\Commands;

use Romqa\Interfaces\Movable;
use Romqa\Math\Point;

class Move implements Command
{
    protected Movable $movable;

    public function __construct(Movable $movable)
    {
        $this->movable = $movable;
    }

    public function execute(): void
    {
        $this->movable->setPosition(Point::plus($this->movable->getPosition(), $this->movable->getVelocity()));
    }
}