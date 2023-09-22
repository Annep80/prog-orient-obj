<?php
// lien entre Hero.php et Character.php
// appel du ficher Character.php
require_once __DIR__ . '/Character.php';
require_once __DIR__ . '/Orc.php';


/**
 * création de la calsse hero qui hérite de Character
 */
class Hero extends Character
{
    private string $weapon; //Nom de l'arme
    private int $weaponDamage; //Puissance de l'arme
    private string $shield; //Nom du bouclier
    private int $shieldValue; //Puissance du bouclier
    protected int $damage;
    /**
     * @param int $health
     * @param int $rage
     * @param string $weapon
     * @param int $weaponDamage
     * @param string $shield
     * @param int $shieldValue
     */
    public function __construct(int $health, int $rage, string $weapon, int $weaponDamage, string $shield, int $shieldValue)
    {
        parent::__construct($health, $rage);
        $this->setWeapon($weapon);
        $this->setWeaponDamage($weaponDamage);
        $this->setShield($shield);
        $this->setShieldValue($shieldValue);
    }
    /**
     * @return string
     */
    public function __toString(): string
    {
        return 'l\'arme est : ' . $this->weapon . '<br> ' . 'la puissance de l\'arme est : ' . $this->weaponDamage . '<br> ' . 'l\'armure est ' . $this->shield . '<br> ' . 'la puissance de l\'armure est : ' . $this->shieldValue;
    }
    /**
     * méthode qui retourne la valeur de weapon d'un character
     * @return string
     */
    public function getWeapon(): string
    {
        return $this->weapon;
    }
    /**
     * méthode affectant la valeur de weapon à un character
     * @param string $weapon
     */
    public function setWeapon(string $weapon)
    {
        $this->weapon = $weapon;
    }
    /**
     * méthode qui retourne la valeur de weaponDamage d'un character
     * @return int
     */
    public function getWeaponDamage(): int
    {
        return $this->weaponDamage;
    }
    /**
     * méthode affectant la valeur de weaponDamage à un character
     * @param int $weaponDamage
     */
    public function setWeaponDamage(int $weaponDamage)
    {
        $this->weaponDamage = $weaponDamage;
    }
    /**
     * méthode qui retourne la valeur de shield d'un character
     * @return string
     */
    public function getshield(): string
    {
        return $this->shield;
    }
    /**
     * méthode affectant la valeur de shield à un character
     * @param int $shield
     */
    public function setShield(string $shield)
    {
        $this->shield = $shield;
    }
    /**
     * méthode qui retourne la valeur de shieldValue d'un character
     * @return int
     */
    public function getShieldValue(): int
    {
        return $this->shieldValue;
    }
    /**
     * méthode affectant la valeur de shieldValue à un character
     * @param int $shieldValue
     */
    public function setShieldValue(int $shieldValue)
    {
        $this->shieldValue = $shieldValue;
    }
    public function attacked(int $damage)
    {
        $damageTaken = $damage - $this->getShieldValue();
        if ($damageTaken>0){
            $this->setHealth($this->getHealth() - $damageTaken);
        }
        $newValue = round($this->getShieldValue() - ($damage / 15));
        $newValue = ($newValue > 0) ? $newValue : 0;
        $this->setShieldValue($newValue);
        $this->setRage($this->getRage() + 30);
    }
}
// $hero = new Hero(1000, 100, 'gourdin', 100, 'oreiller', 200);
// echo $hero->__toString();
