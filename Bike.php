<?php

require_once 'Vehicule.php';
require_once 'LightableInterface.php';

class Bike extends Vehicule implements LightableInterface
{
    public function switchOn(): bool
    {
        if($this->currentSpeed > 10) {
            return true;
        }
    }

    public function switchOff(): bool
    {
        return true;
    }
}
