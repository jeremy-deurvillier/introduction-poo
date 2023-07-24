<?php

class MachineACafe {

    private string $marque;
    private string $cafe;
    private bool $enFonction;
    private int $sucre;

    public function __construct(string $marque = 'Senseo', string $cafe = 'expresso') {
        $this->setMarque($marque);
        $this->setCafe($cafe);
        $this->setSucre(0);
        $this->allumage(false);
    }
     
     /**
      * Get marque.
      *
      * @return marque.
      */
     public function getMarque()
     {
         return $this->marque;
     }
     
     /**
      * Set marque.
      *
      * @param marque the value to set.
      */
     public function setMarque($marque)
     {
         $this->marque = $marque;
     }
     
     /**
      * Get cafe.
      *
      * @return cafe.
      */
     public function getCafe()
     {
         return $this->cafe;
     }
     
     /**
      * Set cafe.
      *
      * @param cafe the value to set.
      */
     public function setCafe($cafe)
     {
         $this->cafe = $cafe;
     }
    
    /**
     * Get sucre.
     *
     * @return sucre.
     */
    public function getSucre()
    {
        return $this->sucre;
    }
    
    /**
     * Set sucre.
     *
     * @param sucre the value to set.
     */
    private function setSucre($sucre)
    {
        $this->sucre = $sucre;
    }
    
    /**
     * Get enFonction.
     *
     * @return enFonction.
     */
    public function getStatus()
    {
        $status = ($this->enFonction)?' est en fonction.':' n\'est pas en fonction.';

        return '<p>' . $this->marque . $status . '</p>';
    }
    
    /**
     * Set enFonction.
     *
     * @param enFonction the value to set.
     */
    public function allumage(bool $enFonction = true)
    {
        $this->enFonction = (is_bool($enFonction))?$enFonction:false;

        return $this->getStatus();
    }

    public function eteindre()
    {
        $this->enFonction = false;

        return $this->getStatus();
    }

    public function mettreUneDosette()
    {
        if ($this->enFonction)  {
            return '<p>Je mets une dosette de ' . $this->getCafe() . '.</p>';
        } else {
            return $this->getStatus();
        }
    }

    public function faireDuCafe(): string
    {
        if ($this->enFonction) {
            return '<p>Le café est prêt !</p>';
        } else {
            return $this->getStatus();
        }
    }

    private function sucreStatus() {
        return '<p>Nombre de sucre : ' . $this->sucre . '</p>';
    }

    public function addSucre()
    {
        $MAX = 4;

        if ($this->sucre < $MAX) {
            $this->sucre += 1;
        }

        return $this->sucreStatus();
    }

    public function removeSucre()
    {
        $MIN = 0;

        if ($this->sucre > $MIN) {
            $this->sucre -= 1;
        }

        return $this->sucreStatus();
    }

}

?>
