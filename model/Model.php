<?php
    interface Model {
        public static function findAll();
        public static function findOne($primary_key);
        public static function create();
        public static function update();
        public static function delete($primary_keys);
    }
?>