<?php

class Application_Model_DbTable_Users extends Zend_Db_Table_Abstract {
    protected $_name = 'user';
    public function insertData($fname,$lname,$email,$password,$location,$services)
{
        
                        $data = array('firstName'=>$fname,
                                      'lastName'=>$lname,
                                      'email'=>$email,
                                      'password'=>md5($password),
                                      'location'=>$location,
                                      'services'=>$services
                                     
                                );
     $result = $this->insert($data);
//    echo "<pre>"; print_r($result); echo "</pre>";die;
        if ($result) {
            return $result;
        }
}
public function getdata($email,$password)
{
    $where = array('email'=>$email,'password'=>$password);
    $row = $this->fetchRow($where);
    if (!$row)
    {
    //throw new Exception("Invalid Username or Password");
        return false;
    }else{
        return $row->toArray();
    }
    
}
}
    
