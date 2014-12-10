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
         * Sets user id
         *
         * @return string
         */
        public function set_id($id) {
            check_int($id, 'id');
            $this->id = $id;
        }

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


        public function load($id, $db) {

            check_int($id, 'id');

            $user_data = $db->get_value('user', $id);

            $this->set_id($user_data['id']);
            $this->set_username($user_data['username']);
            $this->set_password($user_data['password']);

        }

    }
