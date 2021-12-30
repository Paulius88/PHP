<?php

require_once 'Classes/Student.php';
require_once 'Classes/Driver.php';

$student = new Student('Paulius', 33);
$student->setScholarship(880);
$student->setEducation('Phisics');

$driver = new driver('Jonas', 45);
$driver->setSalary(2160);
$driver->getExperience(27);
$driver->setLicence('B');

var_dump($student);
var_dump($driver);
