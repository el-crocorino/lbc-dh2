<?php

    // Php configuration
    ini_set("register_globals","on");
    ini_set("display_errors","on");
    /*ini_set("expose_php","off");*/
    ini_set('error_reporting', E_ALL);
    ini_set('include_path', substr(__DIR__, 0, -6) . 'classes:' . substr(__DIR__, 0, -6) . 'includes:' . __DIR__);

    $dConfig = array();

    // Application libraries
    $dConfig['includes'] = array(
        'functions.php',
        'load.php'
    );

    // PATHS
    $dConfig['paths'] = array(
    	'base_path' => substr(__DIR__, 0, -6),
    	'includes'  => 'includes/',
    	'classes'   => 'classes/'
    );
