<?php
require('../libs/Smarty/Smarty.class.php');

class MainController
{
    public $template;

    function __construct(){

        $this->template = new Smarty();
        $this->template->setTemplateDir('../views');
        $this->template->setCompileDir('../smarty/templates_c');
        $this->template->setCacheDir('../smarty/cache');
        $this->template->setConfigDir('../smarty/configs'); 
        // $this->template->testInstall();
    }
}
