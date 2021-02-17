<?php

namespace DrResponse;

class SuccessResponse extends DrResponse
{
    private $data;

    public function __construct(array $data = [])
    {
        $this->setData($data);
        parent::__construct(200, self::SUCCESS_RESPONSE, $data, [], '');
    }
}
