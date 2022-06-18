<?php

namespace QuickHelp\REST\Http;

class HttpRequest
{
    private $baseURL;
    private $endpoint;
    private $queryParams = [];
    private $method;
    private $body;
    private $contentType;

    public function __construct($baseURL)
    {
        $this->baseURL = trim($baseURL ?? '');
    }

    public function setEndpoint($endpoint) {
        $this->endpoint = $endpoint ?? '';
    }

    public function setQueryParams($queryParams) {
        $this->queryParams = $queryParams;
    }

    public function setMethod($method) {
        $this->method = $method;
    }

    public function setBody($body) {
        $this->body = $body;
    }

    public function setContentType($contentType) {
        $this->contentType = $contentType ?? HttpContentTypes::JSON;
    }

    public function getQueryParamsAsString()
    {
        return http_build_query(array_filter($this->queryParams));
    }

    public function getURL()
    {
        return "{$this->baseURL}/{$this->endpoint}?{$this->getQueryParamsAsString()}";
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
