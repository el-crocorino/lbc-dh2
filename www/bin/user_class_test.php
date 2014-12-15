<?php

    require_once substr(__DIR__, 0, -7) . 'config/start.php';

    $user = new user();

    $user->set_id(1);
    $user->set_username('Estelle');
    $user->set_password('Loulou');

    #dump($user, 'user');

    $user->save();

    $user_two = new user();
    $user_two->get(2);

    dump($user_two);
