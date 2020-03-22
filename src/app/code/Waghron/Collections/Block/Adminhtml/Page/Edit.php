<?php

namespace Waghron\Crud\Block\Adminhtml\Page;

use Magento\Backend\Block\Widget\Context;
use Magento\Framework\Registry;
use Waghron\Collections\Api\Data\PageInterface;
use Waghron\Collections\Block\Adminhtml\AbstractEdit;
use Waghron\Collections\Helper\AclResources;

class Edit extends AbstractEdit
{
    /**
     * @param Context $context
     * @param Registry $registry
     * @param array $data
     */
    public function __construct(
        Context $context,
        Registry $registry,
        array $data = []
    ) {
        parent::__construct($context, $registry, $data);
    }

    /**
     * @return string
     */
    protected function _getDeleteAcl()
    {
        return AclResources::POST_DELETE;
    }

    /**
     * @return string
     */
    protected function _getSaveAcl()
    {
        return AclResources::POST_SAVE;
    }

    /**
     * @return string
     */
    protected function _getEntityTitle()
    {
        return PageInterface::ENTITY_TITLE;
    }

    /**
     * @param PageInterface $model
     * @return string
     */
    protected function _getTitle($model)
    {
        return $model->getTitle();
    }

    /**
     * @return string
     */
    protected function _getController()
    {
        return 'page';
    }

    /**
     * @return string
     */
    protected function _getId()
    {
        return PageInterface::ID;
    }
}
