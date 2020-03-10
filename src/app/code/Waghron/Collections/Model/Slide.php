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
class Slide extends \Magento\Framework\Model\AbstractModel
{

    /**
     * slider colleciton factory.
     *
     * @var \Waghron\Collections\Model\ResourceModel\Page\CollectionFactory
     */
    protected $_sliderCollectionFactory;

    /**
     * store view id.
     *
     * @var int
     */
    protected $_storeViewId = null;

    /**
     * slide factory.
     *
     * @var \Waghron\Collections\Model\SlideFactory
     */
    protected $_slideFactory;

    /**
     * value factory.
     *
     * @var \Waghron\Collections\Model\ValueFactory
     */
    protected $_valueFactory;

    /**
     * value collecion factory.
     *
     * @var \Waghron\Collections\Model\ResourceModel\Value\CollectionFactory
     */
    protected $_valueCollectionFactory;

    /**
     * [$_formFieldHtmlIdPrefix description].
     *
     * @var string
     */
    protected $_formFieldHtmlIdPrefix = 'page_';

    /**
     * @var \Magento\Store\Model\StoreManagerInterface
     */
    protected $_storeManager;

    /**
     * logger.
     *
     * @var \Magento\Framework\Logger\Monolog
     */
    protected $_monolog;

    /**
     * [__construct description].
     *
     * @param \Magento\Framework\Model\Context                                $context
     * @param \Magento\Framework\Registry                                     $registry
     * @param \Waghron\Collections\Model\ResourceModel\Slide                   $resource
     * @param \Waghron\Collections\Model\ResourceModel\Slide\Collection        $resourceCollection
     * @param \Waghron\Collections\Model\SlideFactory                     $slideFactory
     * @param \Waghron\Collections\Model\ResourceModel\Page\CollectionFactory $sliderCollectionFactory
     * @param \Waghron\Collections\Model\ResourceModel\Value\CollectionFactory  $valueCollectionFactory
     * @param \Magento\Store\Model\StoreManagerInterface                      $storeManager
     */
    public function __construct(
        \Magento\Framework\Model\Context $context,
        \Magento\Framework\Registry $registry,
        \Waghron\Collections\Model\ResourceModel\Slide $resource,
        \Waghron\Collections\Model\ResourceModel\Slide\Collection $resourceCollection,
        \Waghron\Collections\Model\SlideFactory $slideFactory,
        \Waghron\Collections\Model\RelationFactory $valueFactory,
        \Waghron\Collections\Model\ResourceModel\Page\CollectionFactory $sliderCollectionFactory,
        \Waghron\Collections\Model\ResourceModel\Relation\CollectionFactory $valueCollectionFactory,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Magento\Framework\Logger\Monolog $monolog
    ) {
        parent::__construct(
            $context,
            $registry,
            $resource,
            $resourceCollection
        );
        $this->_slideFactory = $slideFactory;
        $this->_valueFactory = $valueFactory;
        $this->_valueCollectionFactory = $valueCollectionFactory;
        $this->_storeManager = $storeManager;
        $this->_sliderCollectionFactory = $sliderCollectionFactory;

        $this->_monolog = $monolog;

        if ($storeViewId = $this->_storeManager->getStore()->getId()) {
            $this->_storeViewId = $storeViewId;
        }
    }
}
