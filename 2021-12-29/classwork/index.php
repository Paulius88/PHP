<?php

require_once 'ArrayHelper.php';

$elements = [1, 2, 3, 4];

$sum = ArrayHelper::getArraySum($array);
$average = ArrayHelper::getArrayAverage($array);

var_dump($sum);
var_dump($average);