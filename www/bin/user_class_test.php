<?php

    chdir(dirname(__FILE__));

    require_once '../../config/start.php';

    $user = new user();

    $user->set_id(1);
    $user->set_username('Estelle');
    $user->set_password('Loulou');

    #dump($user, 'user');

    $user_two = new user();
    $user_two->get(2);

    #dump($user_two);

    $user_three = new user();

    $user_three->set_username('Louis');
    $user_three->set_password('Gerrer');

    $user_three->save();
