<?php

namespace Waghron\Collections\Api\Data;

interface BlockInterface
{
    const ID = 'block_id';
    const TITLE = 'title';
    const ENTITY_TITLE = 'Block';

    /**
     * @return int|null
     */
    public function getId();

    /**
     * @return string|null
     */
    public function getTitle();

    /**
     * @param int $id
     */
    public function setId($id);

    /**
     * @param string $title
     */
    public function setTitle($title);
}
