<?php

/**
 * Waghron
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Waghron.com license that is
 * available through the world-wide-web at this URL:
 * http://www.magestore.com/license-agreement.html
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Waghron
 * @package     Waghron_Bannerslider
 * @copyright   Copyright (c) 2012 Waghron (http://www.magestore.com/)
 * @license     http://www.magestore.com/license-agreement.html
 */

namespace Waghron\Collections\Model\ResourceModel;

/**
 * Banner Resource Model
 * @category Waghron
 * @package  Waghron_Bannerslider
 * @module   Bannerslider
 * @author   Waghron Developer
 */
class Slide extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * construct
     * @return void
     */
    protected function _construct()
    {
        $this->_init('waghron_collections_slide', 'slide_id');
    }
}
