<?php

    require_once substr(__DIR__, 0, -6) . 'base.class.php';

    class configTest extends base {

        protected $config = NULL;

        public function setUp() {
            $this->load_config();
            $this->config = config::get_config_instance();
        }

        public function testConfigObject() {
            $this->assertEquals('functions.php', $this->config->get_config('includes/functions'));
        }

    }
