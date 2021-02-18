<?php

namespace IceResponse;

class SuccessResponse extends IceResponse
{
    public function __construct(array $data = [])
    {
        parent::__construct(200, self::SUCCESS_RESPONSE, $data, [], '');
    }
}
