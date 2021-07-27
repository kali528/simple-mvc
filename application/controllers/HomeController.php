<?php
require_once 'MainController.php';

class HomeController extends MainController
{
    public function index()
    {
        $this->template->assign('section_name', 'Home');
        $this->template->clearCache('home/index.tpl');
        $this->template->display('home/index.tpl');
        
        exit;
    }
}
