<?php

namespace DrResponse;

use iResponse;

class SuccessResponse extends DrResponse implements iResponse
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
     * @return  self
     */ 
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    
}
