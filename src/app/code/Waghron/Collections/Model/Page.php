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
 * @package     Waghron_Collections
 * @copyright   Copyright (c) 2012 Waghron (http://www.magestore.com/)
 * @license     http://www.magestore.com/license-agreement.html
 */

namespace Waghron\Collections\Model;

/**
 * Slider Model
 * @category Waghron
 * @package  Waghron_Collections
 * @module   Collections
 * @author   Waghron Developer
 */
class Page extends \Magento\Framework\Model\AbstractModel
{
    /**
     * slide collection factory.
     *
     * @var \Waghron\Collections\Model\ResourceModel\Slide\CollectionFactory
     */
    protected $_slideCollectionFactory;

    /**
     * constructor.
     *
     * @param \Magento\Framework\Model\Context                                $context
     * @param \Magento\Framework\Registry                                     $registry
     * @param \Waghron\Collections\Model\ResourceModel\Slide\CollectionFactory $slideCollectionFactory
     * @param \Waghron\Collections\Model\ResourceModel\Page                   $resource
     * @param \Waghron\Collections\Model\ResourceModel\Page\Collection        $resourceCollection
     */
    public function __construct(
        \Magento\Framework\Model\Context $context,
        \Magento\Framework\Registry $registry,
        \Waghron\Collections\Model\ResourceModel\Slide\CollectionFactory $slideCollectionFactory,
        \Waghron\Collections\Model\ResourceModel\Page $resource,
        \Waghron\Collections\Model\ResourceModel\Page\Collection $resourceCollection
    ) {
        parent::__construct(
            $context,
            $registry,
            $resource,
            $resourceCollection
        );
        $this->_slideCollectionFactory = $slideCollectionFactory;
    }

}
