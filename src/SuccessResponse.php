<?php

namespace DrResponse;

class SuccessResponse extends DrResponse
{
    public function __construct(array $data = [])
    {
        parent::__construct(200, self::SUCCESS_RESPONSE, $data, [], '');
    }
}
