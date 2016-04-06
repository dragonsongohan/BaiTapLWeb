<?php
    if (!defined('PATH_SYSTEM')) die ('Bad Requested!');

    class Libary_Loader {
        public function load($library, $agrs = array()) {
            if ( empty($this->{$library}) ) {
                $class = ucfirst($library) . '_Library';
                require_once(PATH_SYSTEM . '/library/' . $class . '.php');
                $this->{$library} = new $class($agrs);
            }
        }
    }
?>