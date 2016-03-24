<?php

require_once 'model.php';

$testmodel = new Model();
$testmodel->name = 'Test';
$testmodel->position1 = 'left';
$testmodel->position2 = 'right';


var_dump($testmodel);