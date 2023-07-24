<?php

abstract class Animal {

    protected int $poids = 0;

    public function info(): string {
        return '<p>Je suis un animal</p>';
    }

    
    /**
     * Get poids.
     *
     * @return poids.
     */
    public function getPoids(): int
    {
        return $this->poids;
    }
    
    /**
     * Set poids.
     *
     * @param poids the value to set.
     */
    public function setPoids($poids)
    {
        $this->poids = $poids;
    }
}

?>
