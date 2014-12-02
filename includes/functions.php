<?php

/**
* Check if var is a string
*
* @param string $string var to be tested
* @param string $name name of var
* @return NULL
*/

    require_once 'config.php';

    /**
     * Checks if data is string
     *
     * @param string $string
     * @param string $name
     * @return void
     */
    function load_class($classname) {
        require $dConfig['paths']['base_path'] . $dConfig['paths']['classes'] . $classname . '/' . $classname . '_orm.class.php';
        require $dConfig['paths']['base_path'] . $dConfig['paths']['classes'] . $classname . '/' . $classname . '.class.php';
    }

    /**
     * Dumps data
     *
     * @param misc $var
     * @param string $description
     * @return void
     */
    function dump($var, $description = '') {

        echo $description;
        echo '<pre>';
        var_dump($var);
        echo '</pre>';

    }

    /**
     * Checks if data is string
     *
     * @param string $string
     * @param string $name
     * @return void
     */
    function check_string($string, $name) {

        if (!is_string($string)) {
            throw new Exception($name . " must be a string.", 1);
        }

    }

    /**
     * Checks if data is int
     *
     * @param int $int
     * @param string $name
     * @return void
     */
    function check_int($int, $name) {

        if (!is_int($int)) {
            throw new Exception($name . " must be a int.", 1);
        }

    }

    /**
     * Checks if data is array
     *
     * @param array $array
     * @param string $name
     * @return void
     */
    function check_array($array, $name) {

        if (!is_array($array)) {
            throw new Exception($name . " must be a array.", 1);
        }

    }
