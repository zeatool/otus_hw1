<?php

use PHPUnit\Framework\TestCase;
use Romqa\Adapters\RotatableAdapter;
use Romqa\Commands\Rotate;
use Romqa\Models\Tank;

class RotateTest extends TestCase
{
    public function testPositiveAnalyze()
    {
        $tank = new Tank();
        $tank->setProperty('direction_angle', 15);
        $tank->setProperty('direction_step', 30);

        $rotate = new Rotate(new RotatableAdapter($tank));
        $rotate->execute();

        $this->assertEquals($tank->getProperty('direction_angle'), 45);
    }
}