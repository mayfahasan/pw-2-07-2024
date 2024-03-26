<?php

    class Vehicle {
        protected $type;
        protected $fuel;
       
        protected function __construct($type, $fuel)
        {
            $this->type = $type;
            $this->fuel = $fuel;
         
        }

        protected function getInfo() {
            echo "Jenis Kendaraan: " . $this->type . "<br>";
            echo "Jenis Bahan Bakar: " . $this->fuel . "<br>";
        
        }
    }



    class Motor extends Vehicle {
        public $wheels;

        public function __construct($type, $fuel, $wheels) 
        {
            parent::__construct($type, $fuel);
            $this->wheels = $wheels;
        }

        public function getInfoMotor()
        {
            parent::getInfo();
            echo "Jumlah Roda: " . $this->wheels . "<br>";
        }
    }

    class  Submarine extends Vehicle
    {
    public $nax_depth;

    public function __construct($type, $fuel, $nax_depth)
    {
        parent::__construct($type, $fuel);
        $this->nax_depth = $nax_depth;
    }

    public function getInfoSubmarine()
    {
        parent::getInfo();
        echo "Kedalaman Maksimal: " . $this->nax_depth . "<br>";
        }
    }
    
?>