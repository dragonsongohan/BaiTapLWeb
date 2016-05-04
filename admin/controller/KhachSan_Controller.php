<?php

class  KhachSan_Controller extends Base_Controller
{
    public function getListAction()
    {
        echo "Hello";
    }

    function addAction()
    {
        $this->view->load('list');
    }
}

?>