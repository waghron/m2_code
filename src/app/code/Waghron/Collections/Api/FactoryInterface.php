<?php

namespace Waghron\Collections\Api;

interface FactoryInterface
{
    /**
     * Create class instance with specified parameters
     *
     * @param array $data
     *
     * @return Object
     */
    public function create(array $data = []);
}
