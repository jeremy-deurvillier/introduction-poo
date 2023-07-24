<?php

class Mammifere extends Animal {

    protected bool $vole = false;

    public function __construct() {}

    public function infoPlus(): string {
        $vole = ($this->vole)?'Je vole':'Je ne vole pas';

        $str = '<p>Je suis un mammifère</p>';
        $str .= '<p>' . $vole . '</p>';

        return $str;
    }
     
     /**
      * Get vole.
      *
      * @return vole.
      */
     public function getVole(): bool
     {
         return $this->vole;
     }
     
     /**
      * Set vole.
      *
      * @param vole the value to set.
      */
     public function setVole($vole)
     {
         $this->vole = $vole;
     }
}

?>
