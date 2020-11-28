<?php
$lion = new Carnivorous('Lion', 'pride', 'meat', 'in the morning');
$lion->getName();
$lion->getHabitat();
$lion->eating();
$lion->getHuntingTime();
echo '-------------------';
$zebra = new Herbivorous('Zebra', 'flock', 'grass', 'in the morning');
$zebra->getName();
$zebra->getHabitat();
$zebra->eating();
$zebra->getHuntingTime();