<?php

use PHPUnit\Framework\TestCase;
use Romqa\Adapters\MovableAdapter;
use Romqa\Commands\Move;
use Romqa\Exception\InvalidKey;
use Romqa\Math\Point;
use Romqa\Models\Tank;

class MoveTest extends TestCase
{
    public function testPositiveMove()
    {
        $start_point = new Point(12, 5);
        $velocity = new Point(-7, 3);

        $tank = new Tank();
        $tank->setProperty('position', $start_point);
        $tank->setProperty('velocity', $velocity);

        $move = new Move(new MovableAdapter($tank));
        $move->execute();

        $this->assertEquals(new Point(5, 8), $tank->getProperty('position'));
    }

    public function testCantReadMovePosition()
    {
        $this->expectException(InvalidKey::class);

        $tank = new Tank();
        $tank_adapter = new MovableAdapter($tank);
        $tank_adapter->getPosition();
    }

    public function testCantMoveWithoutPosition()
    {
        $this->expectException(InvalidKey::class);

        $tank = new Tank();
        $move = new Move(new MovableAdapter($tank));
        $move->execute();
    }

}