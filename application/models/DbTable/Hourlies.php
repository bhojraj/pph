<?php

class Application_Model_DbTable_Hourlies extends Zend_Db_Table_Abstract {
    protected $_name = 'hourlies';
    
    public function insertHourly($jobtitle, $phone, $currency, $rate, $profileImage, $aboutYou, $portfolio)
{
        
                        $data = array('jobTitle'=>$jobtitle,
                                      'phone'=>$phone,
                                      'currency'=>$currency,
                                      'rate'=> $rate,
                                      'profileImage'=>$profileImage,
                                      'aboutYou'=>$aboutYou,
                                      'portfolio'=>$portfolio,
                                     
                                );
     $result = $this->insert($data);
   // echo "<pre>"; print_r($result); echo "</pre>";die;
        if ($result) {
            return $result;
        }
    
}

}

