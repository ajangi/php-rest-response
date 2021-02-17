<?php


namespace DrResponse;


class NotFoundErrorResponse extends DrResponse
{
    public function __construct(array $messages = [], string $developer_message = '')
    {
        parent::__construct(404, self::ERROR_RESPONSE, [], $messages, $developer_message);
    }
}