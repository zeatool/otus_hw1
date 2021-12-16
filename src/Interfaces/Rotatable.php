<?php

namespace Romqa\Interfaces;

use Romqa\Math\Point;

interface Rotatable
{
    public function getDirection(): int;

    public function setDirection(int $angle): void;

    public function setStepDirection(int $step): void;

    public function getStepDirection(): int;

}