<?php

    class Car {
        // property
       public $brand;
       public $color; 

       // method
       function getBrand() {
           return $this->brand;

       }
    }
        // object
        $rubicon = new Car();
        $tesla = new Car();

        // setter
        $tesla->brand = "Tesla";
        $rubicon->brand = "Rubicon";

        // echo
        echo $tesla->getBrand();
        echo '<br>';
        echo $rubicon->getBrand();

?>