<?php

    class dbmanager {

        public static function get_master() {
            global $dConfig;
            return new db($dConfig['db']['master']);
        }

        public static function get_slave() {
            global $dConfig;
            var_dump(&$dConfig);
            return new db(&$dConfig['db']['master']);
        }
    }
