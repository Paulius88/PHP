<?php
require_once 'User.php';

class Student extends User {
    private $scholarship;
    private $education;

    public function setScholarship ($scholarship) {
        $this->scholarship = $scholarship;
    }
    public function getScholarship () {
        return $this->scholarship;
    }
    public function getEducation ($education) {
        $this->education = $education;
    }
    public function getEducation () {
        return $this->education;
    }
}