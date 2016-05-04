<?php

class Tour_Controller extends Controller
{
    public function invokeAction()
    {
        $this->view->load('tours');
    }

    public function __destruct()
    {
        $this->view->show();
    }
}

?>