<?php
namespace DrResponse;

use iResponse;

class DrResponse implements iResponse
{
    const SUCCESS_RESPONSE = 'SUCCESS';
    const ERROR_RESPONSE   = 'ERROR';
    private $status_code;
    private $result;
    private $data;
    private $messages;
    private $developer_message;

    /**
     * Get the value of status_code
     */ 
    public function getStatusCode()
    {
        return $this->status_code;
    }

    /**
     * Set the value of status_code
     *
     * @return  self
     */ 
    public function setStatusCode($status_code)
    {
        $this->status_code = $status_code;

        return $this;
    }

    /**
     * Get the value of result
     */ 
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Set the value of result
     *
     * @return  self
     */ 
    public function setResult($result)
    {
        $this->result = $result;

        return $this;
    }

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

    /**
     * Get the value of messages
     */ 
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * Set the value of messages
     *
     * @return  self
     */ 
    public function setMessages($messages)
    {
        $this->messages = $messages;

        return $this;
    }

    /**
     * Get the value of developer_message
     */ 
    public function getDeveloperMessage()
    {
        return $this->developer_message;
    }

    /**
     * Set the value of developer_message
     *
     * @return  self
     */ 
    public function setDeveloperMessage($developer_message)
    {
        $this->developer_message = $developer_message;

        return $this;
    }

    /**
     * return response as json string 
     *
     * @return string
     */
    public function asJson(): string
    {
        return json_encode([
            'status_code' => $this->getStatusCode(),
            'result' => $this->getResult(),
            'data' => $this->getData(),
            'messages' => $this->getMessages(),
            'developer_message' => $this->getDeveloperMessage()
        ]);
    }

    /**
     * return response as array
     *
     * @return array
     */
    public function asArray(): array
    {
        return [
            'status_code' => $this->getStatusCode(),
            'result' => $this->getResult(),
            'data' => $this->getData(),
            'messages' => $this->getMessages(),
            'developer_message' => $this->getDeveloperMessage()
        ];
    }
}
