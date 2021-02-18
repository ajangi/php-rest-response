<?php

namespace IceResponse;
use Symfony\Component\HttpFoundation\Response;

interface ResponseInterface {
    public function send(): Response;
}