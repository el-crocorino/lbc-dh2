<?php

    class user extends user_orm {

        public function hash_password() {

            $options = [
                'cost' => 12,
            ];

            parent::set_password(password_hash($this->get_password(), PASSWORD_BCRYPT, $options));

        }

        public function check_password($password) {
            return password_verify($password, $this->get_password());
        }

    }
