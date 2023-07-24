<?php

class Chien extends Mammifere {

    public function __construct() {}

    public function crie(): string {
        $str = '<p>J\'aboie</p>';
        $str .= '<p>Je pèse ' . $this->poids . 'kg</p>';

        return $str;
    }
}

?>
