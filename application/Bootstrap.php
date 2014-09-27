<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
 public function _initRouter() {


        $config = new Zend_Config_Ini(APPLICATION_PATH . '/configs/routes.ini', 'routes');
        $router = Zend_Controller_Front::getInstance()->getRouter();
        $router->addConfig($config, 'routes');
    }
}

