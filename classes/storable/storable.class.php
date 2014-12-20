<?php

    interface storable {

        /**
         *  Gets Object Table
         *
         * @return string Table
         */
        public function get_storable_table();

        /**
         *  Gets object fields
         *
         * @return string Fields
         */
        public function get_storable_fields();

        /**
         *  Gets object values
         *
         * @return string Values
         */
        public function get_storable_values();

        /**
         *  Gets Where condition
         *
         * @return array Where
         */
        public function get_storable_where();

        /**
         *  Gets Group By condition
         *
         * @return array Group
         */
        public function get_storable_group();

        /**
         *  Gets Order By condition
         *
         * @return array Order
         */
        public function get_storable_Order();

    }


