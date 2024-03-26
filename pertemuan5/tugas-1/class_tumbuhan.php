<?php

class Tumbuhan {
    protected $type;
    protected $habitat;

    protected function __construct($type, $habitat)
    {
        $this->type = $type;
        $this->habitat = $habitat;
    }

    protected function getInfo() {
        echo "Jenis Tanaman: " . $this->type . "<br>";
        echo "Habitat: " . $this->habitat . "<br>";
    }
}

class Bunga extends Tumbuhan {
    public $color;

    public function __construct($type, $habitat, $color) 
    {
        parent::__construct($type, $habitat);
        $this->color = $color;
    }

    public function getInfoBunga()
    {
        parent::getInfo();
        echo "Warna Bunga: " . $this->color . "<br>";
    }
}

class Pohon extends Tumbuhan
{
    public $height;

    public function __construct($type, $habitat, $height)
    {
        parent::__construct($type, $habitat);
        $this->height = $height;
    }

    public function getInfoPohon()
    {
        parent::getInfo();
        echo "Tinggi Pohon: " . $this->height . " meters<br>";
    }
}

?>
