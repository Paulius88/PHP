<?php

require_once 'User.php';

class Worker extends User {
    protected $salary;

    public function setSalary($salary) {
        $this->salary = $salary;
    }
    public function getSalary() {
        return $this->salary;
    }
}