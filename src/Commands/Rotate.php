<?php

namespace Romqa\Commands;

use Romqa\Interfaces\Movable;
use Romqa\Interfaces\Rotatable;
use Romqa\Math\Point;

class Rotate implements Command
{
    protected Rotatable $rotatable;

    public function __construct(Rotatable $rotatable)
    {
        $this->rotatable = $rotatable;
    }

    public function execute(): void
    {
        $this->rotatable->setDirection($this->rotatable->getDirection() + $this->rotatable->getStepDirection());
    }
}