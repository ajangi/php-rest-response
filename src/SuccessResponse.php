<?php

namespace IceResponse;

/**
 * Class SuccessResponse
 *
 * @category Class
 * @package  SuccessResponse
 * @author   Alireza Jangi <akangi@hotmail.com>
 * @license  https://opensource.org/licenses/MIT MIT LICENSE
 * @link     https://github.com/ajangi/php-rest-response
 */
class SuccessResponse extends IceResponse
{
    /**
     * SuccessResponse constructor.
     *
     * @param array $data The response data array
     */
    public function __construct(array $data = [])
    {
        parent::__construct(200, self::SUCCESS_RESPONSE, $data, [], '');
    }
}
