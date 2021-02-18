<?php

namespace IceResponse;

/**
 * Class SuccessResponse
 * @package IceResponse
 */
class SuccessResponse extends IceResponse
{
    /**
     * SuccessResponse constructor.
     * @param array $data
     */
    public function __construct(array $data = [])
    {
        parent::__construct(200, self::SUCCESS_RESPONSE, $data, [], '');
    }
}
