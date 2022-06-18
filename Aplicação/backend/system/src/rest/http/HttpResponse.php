<?php

namespace QuickHelp\REST\Http;

class HttpResponse
{
    private $statusCode;
    private $body;
    private $contentType;

    public function __construct($statusCode, $body, $contentType)
    {
        $this->statusCode = intval($statusCode) ?: 200;
        $this->body = $body;
        $this->contentType = $contentType ?? HttpContentTypes::JSON;
    }

    public function __get($field)
    {
        return $this->{$field};
    }

    public function __isset($field)
    {
        return isset($this->{$field});
    }
}
