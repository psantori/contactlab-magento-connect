<?php

/** Disntinct By Type Filter . */
class Contactlab_Template_Model_Newsletter_Processor_Filter_Wishlist_DistinctByType
        extends Contactlab_Template_Model_Newsletter_Processor_Filter_AbstractDistinctByType {

    /**
     * Wishlist or cart?
     */
    protected function getTemplateTypeCode() {
        return "WISHLIST";
    }
}