<?php

// Classe base: Vertebrati
class Vertebrate {
    public function __construct() {
        $this->printSpecializationVertebrate();
    }

    protected function printSpecializationVertebrate() {
        echo "Sono un animale Vertebrato\n";
    }
}

// Classe SangueFreddo che eredita da Vertebrate
class ColdBlooded extends Vertebrate {
    public function __construct() {
        parent::__construct();
        $this->printSpecializationColdBlooded();
    }

    protected function printSpecializationColdBlooded() {
        echo "Sono un animale a Sangue Freddo\n";
    }
}

// Classe SangueCaldo che eredita da Vertebrate
class WarmBlooded extends Vertebrate {
    public function __construct() {
        parent::__construct();
        $this->printSpecializationWarmBlooded();
    }

    protected function printSpecializationWarmBlooded() {
        echo "Sono un animale a Sangue Caldo\n";
    }
}

// Classe Mammiferi che eredita da SangueCaldo
class Mammal extends WarmBlooded {
    public function __construct() {
        parent::__construct();
        $this->printSpecializationMammal();
    }

    protected function printSpecializationMammal() {
        echo "Ruggito! Sono un Mammifero\n";
    }
}

// Classe Uccelli che eredita da SangueCaldo
class Bird extends WarmBlooded {
    public function __construct() {
        parent::__construct();
        $this->printSpecializationBird();
    }

    protected function printSpecializationBird() {
        echo "Cip! Sono un Uccello\n";
    }
}

// Classe Pesci che eredita da SangueFreddo
class Fish extends ColdBlooded {
    public function __construct() {
        parent::__construct();
        $this->printSpecializationFish();
    }

    protected function printSpecializationFish() {
        echo "Splash! Sono un Pesce\n";
    }
}

// Classe Rettili che eredita da SangueFreddo
class Reptile extends ColdBlooded {
    public function __construct() {
        parent::__construct();
        $this->printSpecializationReptile();
    }

    protected function printSpecializationReptile() {
        echo "Sssss! Sono un Rettile\n";
    }
}

// Classe Anfibi che eredita da SangueFreddo
class Amphibian extends ColdBlooded {
    public function __construct() {
        parent::__construct();
        $this->printSpecializationAmphibian();
    }

    protected function printSpecializationAmphibian() {
        echo "Croak! Sono un Anfibio\n";
    }
}

// Esempio di creazione di Oggetti
$magikarp = new Fish();

$mammifero = new Mammal();

$bird = new Bird();

