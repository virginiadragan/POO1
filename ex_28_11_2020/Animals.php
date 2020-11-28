<?php
abstract class Animals implements AnimalDetails {
    abstract protected function eating();
    abstract protected function live();

    public function getHabitat() {
        echo $this->live();
    }
}