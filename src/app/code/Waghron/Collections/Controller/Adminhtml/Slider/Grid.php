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

namespace Waghron\Collections\Controller\Adminhtml\Slider;

/**
 * Slider Grid action
 * @category Waghron
 * @package  Waghron_Bannerslider
 * @module   Bannerslider
 * @author   Waghron Developer
 */
class Grid extends \Waghron\Collections\Controller\Adminhtml\Slider
{
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    public function execute()
    {
        $resultLayout = $this->_resultLayoutFactory->create();

        return $resultLayout;
    }
}
