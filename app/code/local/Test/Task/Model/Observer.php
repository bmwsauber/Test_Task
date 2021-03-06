<?php

/**
 * Class Test_Task_Model_Observer
 */
class Test_Task_Model_Observer
{
    /**
     * @param $observer
     * @return void
     */
    public function logOrder($observer)
    {
        if (!Mage::getStoreConfig('test_task/setting/enable'))
            return $this;

        $_order = $observer->getPayment()->getOrder();
        try {
            $decimal_factor = (float)Mage::getStoreConfig('test_task/setting/decimal_factor');
            $order_total = $_order->getGrandTotal();

            $data = array(
                'store_id' => Mage::app()->getStore()->getStoreId(),
                'order_id' => $_order->getId(),
                'multyplies_grand_total' => ($decimal_factor * $order_total),
            );

            Mage::getModel('test_task/log')->setData($data)->setId(null)->save();
        } catch (Exception $e) {
            var_dump($e->getMessage());
            exit;
        }
    }
}
