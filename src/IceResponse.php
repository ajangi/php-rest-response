<?php
namespace IceResponse;

use Symfony\Component\HttpFoundation\Response;

/**
 * Class IceResponse
 *
 * @category Class
 * @package  IceResponse
 * @author   Alireza Jangi <akangi@hotmail.com>
 * @license  https://opensource.org/licenses/MIT MIT LICENSE
 * @link     https://github.com/ajangi/php-rest-response
 */
class IceResponse implements ResponseInterface
{
    const SUCCESS_RESPONSE = 'SUCCESS';
    const ERROR_RESPONSE   = 'ERROR';
    private $_status_code;
    private $_result;
    private $_data;
    private $_messages;
    private $_developer_message;

    /**
     * IceResponse constructor
     *
     * @param int         $status_code       The status code of response
     * @param string      $result            The result of response
     *                                       [SUCCESS or ERROR]
     * @param array       $data              The data you want to send
     *                                       back in response
     * @param array       $messages          Messages array you want
     *                                       to show to users
     * @param string|null $developer_message Message you want to send
     *                                       to other developer
     */
    public function __construct(
        int $status_code = 200,
        string $result = self::SUCCESS_RESPONSE,
        array $data = [],
        array $messages = [],
        string $developer_message = null
    ){
        $this->setStatusCode($status_code);
        $this->setResult($result);
        $this->setData($data);
        $this->setMessages($messages);
        $this->setDeveloperMessage($developer_message);
    }

    /**
     * Get the value of status_code
     */ 
    public function getStatusCode()
    {
        return $this->_status_code;
    }

    /**
     * Set the value of status_code
     *
     * @param  $status_code
     * @return self
     */
    public function setStatusCode($status_code): IceResponse
    {
        $this->_status_code = $status_code;

        return $this;
    }

    /**
     * Get the value of result
     */ 
    public function getResult()
    {
        return $this->_result;
    }

    /**
     * Set the value of result
     *
     * @param  $result
     * @return self
     */
    public function setResult($result): IceResponse
    {
        $this->_result = $result;

        return $this;
    }

    /**
     * Get the value of data
     */ 
    public function getData()
    {
        return $this->_data;
    }

    /**
     * Set the value of data
     *
     * @param  $data
     * @return self
     */
    public function setData($data): IceResponse
    {
        $this->_data = $data;

        return $this;
    }

    /**
     * Get the value of messages
     */ 
    public function getMessages()
    {
        return $this->_messages;
    }

    /**
     * Set the value of messages
     *
     * @param  $messages
     * @return self
     */
    public function setMessages($messages): IceResponse
    {
        $this->_messages = $messages;

        return $this;
    }

    /**
     * Get the value of developer_message
     */ 
    public function getDeveloperMessage()
    {
        return $this->_developer_message;
    }

    /**
     * Set the value of developer_message
     *
     * @param  $developer_message
     * @return self
     */
    public function setDeveloperMessage($developer_message): IceResponse
    {
        $this->_developer_message = $developer_message;

        return $this;
    }

    /**
     * @return Response
     */
    public function send(): Response
    {
        return new Response(
            json_encode(
                [
                'status_code' => $this->getStatusCode(),
                'result' => $this->getResult(),
                'developer_message' => $this->getDeveloperMessage(),
                'messages' => $this->getMessages(),
                'data' => $this->getData()
                ]
            ), $this->getStatusCode() ?? 200, ['Content-Type' => 'application/json']
        );
    }
}
