<?php
    if (!defined('PATH_SYSTEM')) die('Bad requested');
    function load() {
        $config = include_once PATH_APPLICATION . '/config/init.php';

        $controller = empty($_GET['c']) ? $config['default_controller'] : $_GET['c'];

        $action = empty($_GET['a']) ? $config['default_action'] : $_GET['a'];

        $controller = ucfirst(strtolower($controller)) . '_Controller';

        $action = strtolower($action) . 'Action';
        if (!file_exists(PATH_APPLICATION . '/controller/' . $controller . '.php')) {
            die ('Controller không tồn tại');
        }

        include_once PATH_SYSTEM . '/core/Controller.php';

        if (file_exists(PATH_APPLICATION . '/core/Base_Controller.php')) {
            include_once PATH_APPLICATION . '/core/Base_Controller.php';
        }

        require_once (PATH_APPLICATION . '/controller/' . $controller . '.php');

        if (!class_exists($controller)) {
            die ('Class không tồn tại');
        }

        $controllerObject = new $controller;

        if (!method_exists($controllerObject, $action)) {
            die ("Action không tồn tại");
        }

        $controllerObject->{$action}();
    }
?>