<?php

    chdir(dirname(__FILE__));

    require_once '../../config/start.php';

    $search = new search(1, 'Test', 'http://www.leboncoin.fr/annonces/offres/ile_de_france/occasions/?o=1&q=guitare%20flamenca');
    dump($search);

    /*$filename = 'search_test.txt';

    $fh = fopen($filename, 'w+');

    if (false === $fh) {
        throw new Exception("Unable to creat file", 1);
    }

    fputs($fh, file_get_contents('http://www.leboncoin.fr/annonces/offres/ile_de_france/occasions/?o=1&q=guitare%20flamenca'));
    fclose($fh);*/

    $html = $search->load_search_dom(file_get_contents('http://www.leboncoin.fr/annonces/offres/ile_de_france/occasions/?o=1&q=guitare%20flamenca'));
dump($html);
exit;
    #$search->save();

    #$html = $search->load_search_dom($search->get_url_content());

dump($html);

    $ad_list = $search->getElementsByClassName($html, 'list-lbc');

dump($ad_list);
