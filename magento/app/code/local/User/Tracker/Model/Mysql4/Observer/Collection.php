<?php
class User_Tracker_Model_MySql4_Observer_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('tracker/observer');
    }
}
?>