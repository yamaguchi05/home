<?php

namespace Kakeibo\Http;

class Request
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
}
