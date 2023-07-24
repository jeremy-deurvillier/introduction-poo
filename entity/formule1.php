<?php

class Formule1 {
    private int $speed = 0;

    public function drive(): string {
        return '<p>Vroom vroom à ' . $this->speed . 'km/h</p>';
    }

    public function shiftGear($newSpeed) {
        $this->speed += $newSpeed;
    }
}

?>
