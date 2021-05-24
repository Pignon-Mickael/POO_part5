<?php

require_once 'Vehicule.php';
require_once 'LightableInterface.php';

class Car extends Vehicule implements LightableInterface
{
    public function switchOn(): bool
    {
        return true;
    }

    public function switchOff(): bool
    {
        return false;
    }
}
