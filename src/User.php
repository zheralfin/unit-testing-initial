<?php

Class User {
    public $first_name;
    public $last_name;
    public $birth_date;
    public $email;

    public function getFullName() {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function getAge() {
        return date('Y') - date('Y', strtotime($this->birth_date));
    }

    public function notify() {

    }
}