<?php


namespace Waghron\Collections\Controller\Adminhtml\Slider;

/**
 * Slider Index action
 * @category Waghron
 * @package  Waghron_Bannerslider
 * @module   Bannerslider
 * @author   Waghron Developer
 */
class Index extends \Waghron\Collections\Controller\Adminhtml\Slider
{
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    public function execute()
    {
        if ($this->getRequest()->getQuery('ajax')) {
            $resultForward = $this->_resultForwardFactory->create();
            $resultForward->forward('grid');

            return $resultForward;
        }

        $resultPage = $this->_resultPageFactory->create();

        return $resultPage;
    }
}
