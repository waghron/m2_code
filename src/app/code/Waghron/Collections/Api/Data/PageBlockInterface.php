<?php

namespace Waghron\Collections\Api\Data;

interface PageBlockInterface
{
    const ID = 'page_block_id';
    const PAGE_ID = 'page_id';
    const BLOCK_ID = 'block_id';

    /**
     * @return int|null
     */
    public function getId();

    /**
     * @param int $id
     */
    public function setId($id);

    /**
     * @return int|null
     */
    public function getPageId();

    /**
     * @param int $id
     */
    public function setPageId($id);

    /**
     * @return int|null
     */
    public function getBlockId();

    /**
     * @param int $id
     */
    public function setBlockId($id);
}
