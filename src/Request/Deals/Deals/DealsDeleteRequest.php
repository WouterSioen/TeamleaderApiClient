<?php

namespace Nascom\TeamleaderApiClient\Request\Deals\Deals;

use Nascom\TeamleaderApiClient\Request\PostRequest;

/**
 * Class DealsDeleteRequest
 * @package Nascom\TeamleaderApiClient\Request\Deals\Deals
 */
class DealsDeleteRequest extends PostRequest
{
    /**
     * DealsDeleteRequest constructor.
     * @param $id
     */
    public function __construct($id)
    {
        $this->body['id'] = $id;
    }

    /**
     * @return string
     */
    public function getEndpoint()
    {
        return 'deals.delete';
    }
}
