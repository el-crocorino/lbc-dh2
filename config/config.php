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

    // DB
    $master = array('dbname' => 'LBC', 'host' => 'localhost', 'user' => "lbc_master", 'password' => '123,N!4B;456,CDC');
    $slave = array('dbname' => 'LBC', 'host' => 'localhost', 'user' => "lbc_slave", 'password' => '789,DMPN;1011123STR');

    $dConfig['db'] = array(
        'master' => $master,
        'slave' => $slave
        );
