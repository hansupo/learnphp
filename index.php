<?php

class Cat {
    use HasWeight;
}

class Gun {
    use HasAmmo, HasWeight;
}

class Crossbow {
    use HasAmmo, HasWeight;
}




trait HasAmmo {
    public $ammo;
}

trait HasWeight {
    private $weight;

    public function getWeight() {
        return $this->weight;
    }

    public function setWeight(int $weight) {
        $this->weight = $weight;
        if ($weight < 0) {
            $this->weight = 0;
        }
    }
}

$cat = new Cat();
$gun = new Gun();
$crossbow = new Crossbow();
var_dump($cat, $gun, $crossbow);