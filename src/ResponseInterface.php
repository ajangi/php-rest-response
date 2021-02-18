<?php

namespace IceResponse;
use Symfony\Component\HttpFoundation\Response;

/**
 * Interface ResponseInterface
 * @package IceResponse
 */
interface ResponseInterface {

    /**
     * @return Response
     */
    public function send(): Response;

}