<?php
    if (! defined('PATH_SYSTEM')) die ('Bad requested!');

    class Controller {

        protected  $view = NULL;

        protected $model = NULL;

        protected $library = NULL;

        protected $helper = NULL;

        protected $config = NULL;

        public function __construct($is_controller = true)
        {
            require_once PATH_SYSTEM . '/core/loader/Config_Loader.php';
            $this->config = new Config_Loader();
            $this->config->load('config');

            require_once PATH_SYSTEM . '/core/loader/Library_Loader.php';
            $this->library = new Libary_Loader();
            require_once PATH_SYSTEM . '/core/loader/TTHelper_Loader.php';
            $this->helper = new TTHelper_Loader();
            require_once PATH_SYSTEM . '/core/loader/View_Loader.php';
            $this->view = new View_Loader();
        }
    }

?>