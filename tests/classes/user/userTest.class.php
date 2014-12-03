<?php

    require_once 'tests/base.class.php';

    class userTest extends base {

        protected $user = NULL;

        public function setUp() {
            $this->load_config();
            $this->user = new user();
        }

        public function testGetUserIdDirectlyFails() {
            $this->user->set_id(1);
            $this->assertFalse();
        }

        public function testSetUserId() {

        }

        public function testSetUserIdFails() {

        }

        public function testGetUserId() {
            $this->user->set_id(1);
            $this->assertEquals('1', $this->user->get_id());
        }

        public function testGetUserName() {
            $this->user->set_name('Estelle');
            $this->assertEquals('Estelle', $this->user->get_name());
        }

    }
