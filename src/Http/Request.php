<?php

namespace Kakeibo\Http;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\UriInterface;

class Request implements RequestInterface
{
    private $get;
    private $post;

    public function __construct($get, $post, $method)
    {
        $this->get = $get;
        $this->post = $post;
    }

    public function get($query_name, $default_value = null)
    {
        if (!isset($this->get[$query_name])) {
            return $default_value;
        }

        return $this->get[$query_name];
    }

    public function post($post_name, $default_value)
    {
        if (!isset($this->post[$post_name])) {
            return $default_value;
        }

        return $this->post[$post_name];
    }

    public function getRequestTarget()
    {
        // TODO: Implement getRequestTarget() method.
    }

    public function withRequestTarget($requestTarget)
    {
        // TODO: Implement withRequestTarget() method.
    }

    public function getMethod()
    {
        // TODO: Implement getMethod() method.
    }

    public function withMethod($method)
    {
        // TODO: Implement withMethod() method.
    }

    public function getUri()
    {
        // TODO: Implement getUri() method.
    }

    public function withUri(UriInterface $uri, $preserveHost = false)
    {
        // TODO: Implement withUri() method.
    }
}
