<?php

/**
 * Class Test_Task_Model_Resource_Log
 */
class Test_Task_Model_Resource_Log extends Mage_Core_Model_Mysql4_Abstract
{
    /**
     * Model initialization
     */
    protected function _construct()
	{
		$this->_init('test_task/test_multiple_order_log', 'id');
	}
}
