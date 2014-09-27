<?php
require_once 'Zend/Controller/Action.php';
class User_UserController extends Zend_Controller_Action {
     public function init() {

    }
      public function posthourlyAction(){ 
          
      }   
      
      public function memberApplicationAction(){ 
        $this->_helper->layout()->disableLayout();
        $this->_helper->viewRenderer->setNoRender(true);
        $objhourliesModel = new Application_Model_DbTable_hourlies();
         if($this->getRequest()->isPost()){
                $jobtitle =  $this->getRequest()->getPost('jobTitle');
                $phone =  $this->getRequest()->getPost('phone');
                $currency =  $this->getRequest()->getPost('currency');
                $rate = $this->getRequest()->getPost('rate');
                $profileImage = $this->getRequest()->getPost('profileImage');
                $aboutYou = $this->getRequest()->getPost('aboutYou');
                $portfolio = $this->getRequest()->getPost('portfolio');
         }
         $result =  $objhourliesModel->insertHourly($jobtitle, $phone, $currency, $rate, $profileImage, $aboutYou, $portfolio);
         
        if($result){
            print_r($result);
            die;
        }
      }     
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

