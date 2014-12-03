<?php

    /**
     * PHPUnit Tests base class
     * Must be extended by every test class
     */
    class base extends PHPUnit_Framework_TestCase {

        /**
         * Loads general config
         *
         * @return void
         */
        public function load_config() {

            require_once substr(__DIR__, 0, -5) . '/config/config.php';

            foreach ($dConfig['includes'] AS $file) {
                require_once $dConfig['paths']['base_path'] . $dConfig['paths']['includes'] . $file;
            }

        }

    }
