<?php

namespace Core\Http;

class Request{
    private $uri;
    private $queryParams = [];
    private $post = [];  
    private $method;

    public function __construct()
    {
        $this->uri = $_SERVER['PATH_INFO'] ?? $_SERVER['REQUEST_URI'];
        $this->method = $_SERVER['REQUEST_METHOD'];
        $this->post = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS) ?? [];
        $this->queryParams = filter_input_array(INPUT_GET, FILTER_SANITIZE_SPECIAL_CHARS) ?? [];
    }

    public function getUri(): string{
        return $this->uri;
    }

    public function getQueryParams(): array{
        return $this->queryParams;
    }

    public function getPost(): array{
        return $this->post;
    }

    public function getMethod(): string{
        return $this->method;
    }

    public function getPostVar(string $key): ?string{
        return $this->post[$key] ?? null;
    }

    public function getQueryVar(string $key): ?string{
        return $this->queryParams[$key] ?? null;
    }
}