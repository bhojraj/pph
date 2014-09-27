<?php
require_once 'Zend/Controller/Action.php';
class Authentication_AuthenticationController extends Zend_Controller_Action {
     public function init() {

    }

   public function signupAction(){      
       $objUserModel=new Application_Model_DbTable_Users();
       if($this->getRequest()->isPost()){
                $fname =  $this->getRequest()->getPost('firstName');
                $lname =  $this->getRequest()->getPost('lastName');
                $email =  $this->getRequest()->getPost('email');
                $password = $this->getRequest()->getPost('password');
                $location = $this->getRequest()->getPost('location');
                $services = $this->getRequest()->getPost('services');
           
                $insertionResult = $objUserModel->insertData($fname,$lname,$email,$password,$location,$services);
               // echo "<pre>";print_r($insertionResult);echo "</pre>";die;
            }
   }   
           public function loginAction(){    
               $objUserModel=new Application_Model_DbTable_Users();
               if($this->getRequest()->isPost()){
                $email =  $this->getRequest()->getPost('email');
                $password = $this->getRequest()->getPost('password');
                $getDetails = $objUserModel->getData($email,$password);
                if($getDetails)
                {
                    
                }
                
           } 
           }
            }

