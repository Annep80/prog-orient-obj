<?php

/**
 * définition de la class character
 */
class Character
{
    protected int $health;
    protected int $rage;


    /**
     * méthode magique appelée automatiquement lors de l'instanciation de la classe.
     * hydrate l'objet.(affecte des valeurs)
     * @param int $health
     * @param int $rage
     */
    public function __construct(int $health, int $rage)
    {
        // $this->health = $health;
        // $this->rage = $rage;

        $this->setHealth($health);
        $this->setRage($rage);
    }
    /**
     * méthode qui retourne la valeur de health d'un character
     * @return int
     */
    public function getHealth(): int
    {
        return $this->health;
    }

    /**
     * méthode affectant la valeur de la santé à un character
     * @param int $health
     */
    public function setHealth(int $health)
    {
        $this->health = $health;
    }
    /**
     * méthode qui retourne la valeur de rage d'un character
     * @return int
     */
    public function getRage(): int
    {
        return $this->rage;
    }
    /**
     * méthode affectant la valeur de rage à un character
     * @param int $health
     */
    public function setRage(int $rage)
    {
        $this->rage = $rage;
    }
}
// $character = new Character();
// $character->setHealth(100);
// $character->setRage(100);
// echo "Rage: " . $character->getRage();
// echo "health:" . $character->getHealth();
