<?php

namespace Shopee\Nodes\Categories;

use Shopee\Nodes\NodeAbstract;
use Shopee\ResponseData;

class Categories extends NodeAbstract
{
    /**
     * Use this call to add a category.
     *
     * @param array|Parameters\Add $parameters
     * @return ResponseData
     */
    public function add($parameters = []): ResponseData
    {
        return $this->post('/api/v1/shop_category/add', $parameters);
    }
}
