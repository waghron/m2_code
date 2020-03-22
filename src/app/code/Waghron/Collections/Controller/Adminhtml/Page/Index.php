<?php

namespace Waghron\Collections\Controller\Adminhtml\Page;

use Waghron\Collections\Api\Data\PageInterface;
use Waghron\Collections\Api\PageRepositoryInterface;
use Waghron\Collections\Controller\Adminhtml\AbstractIndex;
use Waghron\Collections\Helper\AclResources;

class Index extends AbstractIndex
{
    /**
     * @return string
     */
    protected function _getAclResource()
    {
        return AclResources::POST;
    }

    /**
     * @return string
     */
    protected function _getEntityTitle()
    {
        return __(PageInterface::ENTITY_TITLE);
    }

    /**
     * @return string
     */
    protected function _getRepositoryInterface()
    {
        return PageRepositoryInterface::class;
    }
}
