<?php

    chdir(dirname(__FILE__));

    require_once '../../base.class.php';

    class userTest extends base {

        protected $user = NULL;

        public function setUp() {
            $this->load_config();
            $this->user = new user();
        }

        public function testGetUserId() {
            $this->user->set_id(1);
            $this->assertEquals('1', $this->user->get_id());
        }

        public function testGetUserName() {
            $this->user->set_username('Estelle');
            $this->assertEquals('Estelle', $this->user->get_username());
        }

        public function testloadUserFromDb() {

            $this->user->get(1);

            $this->assertEquals('1', $this->user->get_id());
            $this->assertEquals('Estelle', $this->user->get_username());
            $this->assertEquals('Loulou', $this->user->get_password());

        }

        /*public function testPasswordHash() {

        }

        public function testPasswordCheck() {

        }*/

    }
