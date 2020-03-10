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

namespace Waghron\Collections\Model\Source;


class Status
{
    const STATUS_ENABLED = 1;
    const STATUS_DISABLED = 2;

    /**
     * get available statuses.
     *
     * @return []
     */
    public static function getAvailableStatuses()
    {
        return [
            self::STATUS_ENABLED => __('Enabled')
            , self::STATUS_DISABLED => __('Disabled'),
        ];
    }
}
