<?php

namespace Waghron\Collections\Block\Adminhtml\Post\Edit;

use Magento\Backend\Block\Widget\Form\Generic;
use Magento\Cms\Model\Wysiwyg\Config;
use Magento\Backend\Block\Template\Context;
use Magento\Framework\Data\FormFactory;
use Magento\Framework\Model\AbstractModel;
use Magento\Framework\Registry;
use Waghron\Collections\Helper\Data as DataHelper;
use Waghron\Collections\Api\Data\PageInterface;
use Magento\Framework\Data\Form as DataForm;

/**
 * @method setId(string $id)
 * @method setTitle(string $title)
 */

class Form extends Generic
{
    /**
     * @var Config
     */
    protected $_wysiwygConfig;

    /**
     * @var DataHelper
     */
    protected $_dataHelper;

    /**
     * @param Context $context
     * @param Registry $registry
     * @param FormFactory $formFactory
     * @param Config $wysiwygConfig
     * @param DataHelper $dataHelper
     * @param array $data
     */
    public function __construct(
        Context $context,
        Registry $registry,
        FormFactory $formFactory,
        Config $wysiwygConfig,
        DataHelper $dataHelper,
        array $data = []
    ) {
        $this->_wysiwygConfig = $wysiwygConfig;
        $this->_dataHelper = $dataHelper;
        parent::__construct($context, $registry, $formFactory, $data);
    }

    /**
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setId('post_form');
        $this->setTitle(__(PageInterface::ENTITY_TITLE . ' Information'));
    }

    /**
     * @return Form
     */
    protected function _prepareForm()
    {

        return $this;
    }
}
