<?php

namespace Waghron\Collections\Api;

use Waghron\Collections\Api\Data\PageBlockInterface;

interface PageBlockRepositoryInterface
{
    /**
     * Save record.
     *
     * @param PageBlockInterface $object
     *
     * @return PageBlockInterface
     *
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(PageBlockInterface $object);

    /**
     * Retrieve record.
     *
     * @param int $id
     *
     * @return PageBlockInterface
     *
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getById($id);

    /**
     * Delete record.
     *
     * @param PageBlockInterface $object
     *
     * @return bool true on success
     *
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(PageBlockInterface $object);

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

    /**
     * @param int $postId
     * @param int $tagId
     *
     * @return PageBlockInterface
     *
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getByPageAndBlockId($postId, $tagId);

    /**
     * Delete data by post ID and tag ID.
     *
     * @param int $postId
     * @param int $tagId
     *
     * @return bool true on success
     *
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteByPageAndBlockId($postId, $tagId);

    /**
     * get all tag ids by post ID
     *
     * @param int $postId
     * @return array
     */
    public function getBlockIdsByPageId($postId);
}
