<?php

namespace Egits\ApiTest\Api;

interface WishlistTestRepositoryInterface
{
    /**
     * @param int $customerId
     *
     * @return int
     */
    public function getList($customerId);
}
