<?php

namespace DrResponse;

class SuccessResponse extends DrResponse
{
    private $result = self::SUCCESS_RESPONSE;
    private $messages = [];
    private $developer_message = '';
    private $data;

    /**
     * Get the value of data
     */ 
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set the value of data
     *
     * @param $data
     * @return  self
     */
    public function setData($data): SuccessResponse
    {
        $this->data = $data;

        return $this;
    }
}
