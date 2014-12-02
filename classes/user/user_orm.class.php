<?php

    class user_orm {

        /**
         * User id
         * @var int
         */
        protected $id = NULL;

        /**
         * User username
         * @var string
         */
        protected $username = '';

        /**
         * User password
         * @var string
         */
        protected $password = '';

        /**
         * Gets user id
         *
         * @return string
         */
        public function get_id() {
            return $this->id;
        }

        /**
         * Sets user username
         *
         * @param string $username
         * @return void
         */
        public function set_username($username) {
            check_string($username, 'username');
            $this->username = $username;
        }

        /**
         * Gets user username
         *
         * @return string
         */
        public function get_username() {
            return $this->username;
        }

        /**
         * Sets user password
         *
         * @param string $password
         * @return void
         */
        public function set_password($password) {
            check_string($password, 'password');
            $this->password = $password;
        }

        /**
         * Gets user password
         *
         * @return string
         */
        public function get_password() {
            return $this->password;
        }

    }
