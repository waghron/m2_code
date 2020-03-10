<?php

namespace Waghron\Collections\Api;

use Waghron\Collections\Api\Data\PageInterface;

interface TextBlockInterface
{
    /**
     * Save record.
     *
     * @param PageInterface $object
     *
     * @return PageInterface
     *
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(PageInterface $object);

    /**
     * Retrieve record.
     *
     * @param int $id
     *
     * @return PageInterface
     *
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getById($id);

    /**
     * Delete record.
     *
     * @param PageInterface $object
     *
     * @return bool true on success
     *
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(PageInterface $object);

    /**
     * Delete record by ID.
     *
     * @param int $id
     *
     * @return bool true on success
     *
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($id);
}
