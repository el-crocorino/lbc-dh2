<?php

    class search_orm implements storable {

        /**
         * Id of user
         *
         * @var int
         */
        protected $id = NULL;

        /**
         * Id of user
         *
         * @var int
         */
        protected $user_id = NULL;

        /**
         * Url of RSS flux
         *
         * @var string
         */
        protected $url = NULL;

        /**
         * Show title
         *
         * @var string
         */
        protected $title = NULL;


        /**
        * HTML content
        *
        * @var string
        */
        protected $html_content = NULL;

        public function get_id() {
            return $this->id;
        }

        public function set_id($id) {
            check_int($id, 'id');
            $this->id = $id;
        }

        public function get_user_id() {
            return $this->user_id;
        }

        public function set_user_id($user_id) {
            check_int($user_id, 'user_id');
            $this->user_id = $user_id;
        }

        public function get_url() {
            return $this->url;
        }

        public function set_url($url) {
            check_string($url, 'url');

            /*
            TODO : ajouter Check dans la classe fille pour vérifier qu'on utilise bien une adresse du bon coin
             */

            $this->url = $url;
        }

        public function get_title() {
            return $this->title;
        }

        public function set_title($title) {
            check_string($title, 'title');
            $this->title = $title;
        }

        public function get_html_content() {
            return $this->html_content;
        }

        public function set_html_content($html_content) {
            check_string($html_content, 'html_content');
            $this->html_content = $html_content;
        }

        public function __construct($user_id, $title, $url) {
            $this->set_user_id($user_id);
            $this->set_title($title);
            $this->set_url($url);
            $this->set_html_content($this->get_title() . '.xml');

        }

        public function get($search_id) {

            check_int($search_id, 'search_id');
            $this->set_id($search_id);

            $where = array('search_id = ' . $search_id);

            $db = dbmanager::get_slave();
            $user_data = $db->get($this->get_storable_table(), $this->get_storable_fields(), $where, array(), array());

            foreach ($user_data AS $index => $item) {

                if ($index == 'search_id') {
                    $item = (int)$item;
                }

                $method = 'set_' . substr($index, 5);
                $this->$method($item);

            }

        }

        /**
         * Save search
         * @return void
         */
        public function save() {

            $db = dbmanager::get_master();

            if (/*search with id already exists*/false) {
                $db->update($this);
            } else {
                $db->save($this);
            }


        }

        /**
         *  Gets Object Table
         *
         * @return string Table
         */
        public function get_storable_table() {
            return 'search';
        }

        /**
         *  Gets object fields
         *
         * @return string Fields
         */
        public function get_storable_fields() {
            return 'search_id, search_user_id, search_title, search_url, search_html_content';
        }

        /**
         *  Gets object values
         *
         * @return string Values
         */
        public function get_storable_values() {

            $values = array(
                ':search_id' => $this->get_id(),
                ':search_user_id' => $this->get_user_id(),
                ':search_title' => $this->get_title(),
                ':search_url' => $this->get_url(),
                ':search_html_content' => $this->get_html_content()
            );

            return $values;

        }

        /**
         *  Gets Where condition
         *
         * @return array Where
         */
        public function get_storable_where() {

        }

        /**
         *  Gets Group By condition
         *
         * @return array Group
         */
        public function get_storable_group() {

        }

        /**
         *  Gets Order By condition
         *
         * @return array Order
         */
        public function get_storable_order() {

        }

    }
