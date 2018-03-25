<?php

namespace Kakeibo\Http;

class Response
{
    /**
     * @var string
     */
    private $response_string;

    public function __construct(string $response_string)
    {
        $this->response_string = $response_string;
    }

    public function send()
    {
        echo $this->response_string;
    }
}