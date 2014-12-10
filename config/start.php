<?php

    require_once 'config.php';

    foreach ($dConfig['includes'] AS $file) {
        require_once $dConfig['paths']['base_path'] . $dConfig['paths']['includes'] . $file;
    }

