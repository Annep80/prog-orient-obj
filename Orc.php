<?php
// lien entre Hero.php et Character.php
// appel du ficher Character.php
require_once __DIR__ . '/Character.php';
/**
 * création de la calsse orc qui hérite de Character
 */
class Orc extends Character
{
    protected int $damage;

    /**
     * @param int $health
     * @param int $rage
     */
    public function __construct(int $health, int $rage)
    {
        parent::__construct($health,$rage);
        $this->__toString();
    }
    /**
     * @return string
     */
    public function __toString(): string
    {
        return 'Niveau de vie de Vecna : ' . $this->getHealth();
    }
    /**
     * méthode qui retourne la valeur de damage de l'orc
     * @return int
     */
    public function getDamage(): int
    {
        return $this->damage;
    }
    /**
     * méthode affectant la valeur de damage de l'orc
     * @param int $weapon
     */
    public function setDamage(int $damage)
    {
        $this->damage = $damage;
    }
    public function attack()
    {
        $this->setDamage(rand(600, 800));
    }
}
