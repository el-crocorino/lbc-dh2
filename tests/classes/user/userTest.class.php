<?php

    class userTest extends PHPUnit_Framework_TestCase {

        public function setUp() {
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
