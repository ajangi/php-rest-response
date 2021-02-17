<?php

namespace DrResponse;
use Symfony\Component\HttpFoundation\Response;

interface ResponseInterface {
    public function send(): Response;
}