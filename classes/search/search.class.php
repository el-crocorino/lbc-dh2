<?php

    class search extends search_orm {

        /**
         * get HTML content from url
         *
         * @param  string $url url of search
         * @return [type]      [description]
         */
        public function get_url_content() {

            $ch = curl_init($this->get_url());

            curl_setopt($ch, CURLOPT_HEADER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            $ressource = curl_exec($ch);
            curl_close($ch);

            return $ressource;

        }

        public function load_search_DOM($html_content) {

            check_string($html_content, 'html_content');

            $dom = new DOMDocument();
            $dom->loadHTML($html_content);

            return $dom;
        }

        public function getElementsByClassName(DOMDocument $DOMDocument, $class_name) {

            $elements = $DOMDocument->getElementsByTagName("*");
            $matched = array();

            foreach($elements as $node) {

                if (!$node->hasAttributes())
                    continue;

                $class_attribute = $node->attributes->getNamedItem('class');

                if (!$class_attribute)
                    continue;

                $classes = explode(' ', $class_attribute->nodeValue);

                if(in_array($class_name, $classes))
                    $matched[] = $node;
            }

            return $matched;
        }


/*  $search = new search('appartements', 'http://www.leboncoin.fr/locations/offres/languedoc_roussillon/?f=a&th=1&mre=650&sqs=5&ret=2&location=Montpellier');

    $search = $search->get_url_content();
    $search = $search->load_search_DOM($search);
    $list = $search->getElementsByClassName($search, 'list-lbc');

    foreach ($list[0]->getElementsByTagName('a') as $key => $value) {

        $length = $value->attributes->length;
        $title = $value->attributes->item(1)->textContent;
        echo $title . "\r\n" ;
        $url = $value->attributes->item(0)->textContent;
        echo $url . "\r\n" ;

     }

    //var_dump($list);
    // start session */


    }
