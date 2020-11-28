<?php

class Herbivorous extends Animals {
    protected $name;
    protected $habitat;
    protected $meal;
    protected $huntingTime;

    public function __construct($name, $habitat, $meal, $huntingTime) {
        $this->name = $name;
        $this->habitat = $habitat;
        $this->meal = $meal;
        $this->huntingTime = $huntingTime;
    }

    public function getName() {
        echo 'This is a ' . $this->name ;
    }

    public function eating() {
        echo $this->name . " eating " . $this->meal;
    }

    public function live() {
        return $this->name . " lives in " . $this->habitat;
    }

    public function getHuntingTime() {
        echo $this->name . " hunt " . $this->huntingTime;
    }
}