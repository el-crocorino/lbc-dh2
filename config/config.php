<?php

    // Php configuration
    ini_set("register_globals","on");
    ini_set("display_errors","on");
    /*ini_set("expose_php","off");*/
    ini_set('error_reporting', E_ALL);

    // Application libraries
    $dConfig['includes'] = array(
        'functions.php',
        'load.php'
    );

    // PATHS
    $dConfig['paths'] = array(
    	'base_path' => '/var/www/www-dev/lbc-dh2/',
    	'includes'  => 'includes/',
    	'classes'   => 'classes/'

    );
