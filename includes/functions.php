<?php
/**
* Check if var is a string
*
* @param string $string var to be tested
* @param string $name name of var
* @return NULL
*/

    /**
     * Loads config
     *
     * @return void
     */
    function load_config() {
        require substr(dirname(__FILE__), 0, -8) . 'config/config.php';
    }

    /**
     * Checks if data is string
     *
     * @param string $string
     * @param string $name
     * @return void
     */
    function load_class($classname) {

        try {

            global $dConfig;

            if (substr($classname, -4) == '_orm') {
                $classname = substr($classname, 0, -4);
                require_once $dConfig['paths']['base_path'] . $dConfig['paths']['classes'] . $classname . '/' . $classname . '_orm.class.php';
            } else if (substr($classname, -7) == 'manager') {
                $classname = substr($classname, 0, -7);
                require_once $dConfig['paths']['base_path'] . $dConfig['paths']['classes'] . $classname . '/' . $classname . 'manager.class.php';
            } else{

                if (file_exists($dConfig['paths']['base_path'] . $dConfig['paths']['classes'] . $classname . '/' . $classname . '_orm.class.php')) {
                    require_once $dConfig['paths']['base_path'] . $dConfig['paths']['classes'] . $classname . '/' . $classname . '_orm.class.php';
                }

                require_once $dConfig['paths']['base_path'] . $dConfig['paths']['classes'] . $classname . '/' . $classname . '.class.php';

            }

        } catch (Exception $e) {
            dump($e);
        }

    }

    /**
     * Dumps data
     *
     * @param misc $var
     * @param string $description
     * @return void
     */
    function dump($var, $description = '') {

        echo "\r\n" . $description . "\r\n";
        echo '<pre>';
        var_dump($var);
        echo "</pre>\r\n";

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

