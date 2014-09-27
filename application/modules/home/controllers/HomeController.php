<?php
/**
 * AdminController
 *
 * @author
 * @version
 */
require_once 'Zend/Controller/Action.php';

class Home_HomeController extends Zend_Controller_Action {



    public function init() {

    }

    public function homeAction(){ 

        if($this->getRequest()->isPost()){
           $password = $this->getRequest()->getPost('password');
           $email = $this->getRequest()->getPost('email');
           $this->view->message = "credentials matched";
        }
        
        
     
    }
    public function loginAction()
    {
    
    }
    
    public function dashboardAction(){ 

     
    }
  
    
    
}
