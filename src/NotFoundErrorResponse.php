<?php


namespace IceResponse;

/**
 * Class NotFoundErrorResponse
 *
 * @category Class
 * @package  IceResponse
 * @author   Alireza Jangi <akangi@hotmail.com>
 * @license  https://opensource.org/licenses/MIT MIT LICENSE
 * @link     https://github.com/ajangi/php-rest-response
 */
class NotFoundErrorResponse extends IceResponse
{
    /**
     * NotFoundErrorResponse constructor.
     * 
     * @param array  $messages          The error messages array want to show user
     * @param string $developer_message The developer message that you can show
     *                                  to other developer
     */
    public function __construct(array $messages = [], string $developer_message = '')
    {
        parent::__construct(
            404,
            self::ERROR_RESPONSE,
            [],
            $messages,
            $developer_message
        );
    }
}