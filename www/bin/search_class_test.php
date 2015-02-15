<?php

    chdir(dirname(__FILE__));

    require_once '../../config/start.php';

    $search = new search(1, 'Test', "http://www.google.fr");

    dump($search);

    $search->save();
