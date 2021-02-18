<?php
namespace IceResponse;
use Symfony\Component\HttpFoundation\Response;

/**
 * Interface ResponseInterface
 *
 * @category Interface
 * @package  IceResponse
 * @author   Alireza Jangi <akangi@hotmail.com>
 * @license  https://opensource.org/licenses/MIT MIT LICENSE
 * @link     https://github.com/ajangi/php-rest-response
 */
interface ResponseInterface
{
    /**
     * Response interface to implement needed methods
     *
     * @return Response
     */
    public function send(): Response;
}