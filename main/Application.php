<?php

use Romqa\Adapters\MovableAdapter;
use Romqa\Commands\Move;
use Romqa\Models\Tank;

require __DIR__ . "/../vendor/autoload.php";

try{
    $tank = new Tank();

    $move = new Move(new MovableAdapter($tank));
    $move->execute();
}catch (\Exception $exception){
    var_dump(get_class($exception));
}

