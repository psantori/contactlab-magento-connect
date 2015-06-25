<?php

/**
 * Contactlab template model cron.
 * Cron model called from cronjob task queue.
 */
class Contactlab_Template_Model_Cron {

    /**
     * Scan for template to be sent.
     * @param string $storeId
     */
    public function scan($storeId = -1) {
        $h = Mage::helper('contactlab_template');
        foreach ($h->getAvailableStores() as $store) {
            if (!$h->isStoreEnabled($store)) {
                continue;
            }
            // If a store id has been passed as argument,
            // check before acll helper.
            try {
                Mage::helper('contactlab_template')->scan($store->getStoreId());
            } catch (Zend_Exception $e) {
                Mage::helper('contactlab_commons')->logEmerg($e);
            }
        }
    }
}
