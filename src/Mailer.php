<?php

class Mailer {
    public function sendMessage($email, $message) {
        if (empty($email)) {
            throw new Exception();
        }

        sleep(2);

        echo "ok - $email: $message";

        return true;
    }
}