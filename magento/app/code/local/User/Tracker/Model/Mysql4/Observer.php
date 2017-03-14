<?php
class User_Tracker_Model_Mysql4_Observer extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {   
        $this->_init('tracker/observer', 'observer_id');
    }
}
?>