<?php

class Database {
    public function connect($host, $dbname, $username, $password) {
        if (empty($host) || empty($dbname) || empty($username) || empty($password)) {
            throw new Exception('Connection Failed!');
        }

        sleep(2);

        echo "Connected to $dbname";

        return true;
    }

    public function save($data) {
        if (empty($data)) {
            throw new Exception('Invalid Data');
        }

        sleep(2);

        echo "Record saved successfully.";

        return true;
    }
}