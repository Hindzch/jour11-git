<?php
interface iCars {
    public function getPrice();
    public function getWeight();
    public function mineIsBigger($obj);
}

class BMW implements iCars {
    private $_price;
    private $_weight;

    public function __construct($price, $weight = 4242) {
        $this->_price = $price;
        $this->_weight = $weight;
    }

    public function getPrice() {
        return $this->_price;
    }

    public function getWeight() {
        return $this->_weight;
    }

    public function mineIsBigger($obj) {
        if ($obj instanceof Toyota) {
            echo "Mine is bigger\n";
        } elseif ($obj instanceof Smart) {
            echo "Mine is way bigger !\n";
        } elseif ($obj instanceof Velib) {
            echo "LOL\n";
        } else {
            echo "Show me !\n";
        }
    }

    public static function lessExpensive() {
        return 15000;
    }
}

class Suzuki implements iCars {
    private $_price;
    private $_weight;

    public function __construct($price, $weight = 4242) {
        $this->_price = $price;
        $this->_weight = $weight;
    }

    public function getPrice() {
        return $this->_price;
    }

    public function getWeight() {
        return $this->_weight;
    }

    public function mineIsBigger($obj) {
        if ($obj instanceof Toyota) {
            echo "Mine is bigger\n";
        } elseif ($obj instanceof Smart) {
            echo "Mine is way bigger !\n";
        } elseif ($obj instanceof Velib) {
            echo "LOL\n";
        } else {
            echo "Show me !\n";
        }
    }

    public static function lessExpensive() {
        return 5000;
    }
}
?>
