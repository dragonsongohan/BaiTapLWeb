<?php
    class View_Loader {
        private $__content = array();
        public function load($view, $data = array()) {
            extract($data);
            ob_start();
            require_once PATH_APPLICATION . '/view/' . $view . '.php';
            $content = ob_get_contents();
            ob_end_clean();
            $this->__content = $content;
        }

        public function show() {
            echo $this->__content;
        }
    }
?>