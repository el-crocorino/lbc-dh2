<?php

    require_once substr(__DIR__, 0, -12) . 'base.class.php';

    class userTest extends base {

        protected $user = NULL;

        public function setUp() {
            $this->load_config();
            $this->user = new user();

            global $dConfig;

            dump($dConfig);
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

            global $dConfig;

            $dbmanager = $this->getMock('dbmanager');
dump($dConfig);
            $dbmanager->expects($this->once())
                ->method('get_slave')
                ->will($this->returnValue($this->getMock('db', $dConfig['db']['slave'])));

            $this->user->get(1);

            $this->assertEquals('1', $this->user->get_id());
            $this->assertEquals('Estelle', $this->user->get_username());
            $this->assertEquals('Loulou', $this->user->get_password());

        }

        public function testPasswordHash() {

        }

        public function testPasswordCheck() {

        }

    }



        /**
         * /*@expectedException checkException
         */
        /*public function testSetUserIdFails() {
            $this->user->set_id('Blabla');
        }*/
