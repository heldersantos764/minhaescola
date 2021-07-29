<?php

namespace Core\Http;

class Router
{
    private $request;
    private $response;
    private $routeList;

    public function __construct()
    {
        $this->request = new Request();
        $this->response = new Response();
        $this->routeList = [];
    }

    private function addRoute(string $httpMethod, string $route, array $controller)
    {
        $route = [
            'http_method' => $httpMethod,
            'route' => $this->extractRoute($route),
            'controller' => $controller[0],
            'method' => $controller[1]
        ];

        $this->routeList[] = $route;
    }

    private function extractRoute($route)
    {
        $route = explode('{', $route);
        if(is_array($route)){
            return $route[0];
        }
        return $route;
    }

    public function get(string $route, array $controller)
    {
        $this->addRoute('GET', $route, $controller);
    }

    public function post(string $route, array $controller)
    {
        $this->addRoute('GET', $route, $controller);
    }

    public function delete(string $route, array $controller)
    {
        $this->addRoute('GET', $route, $controller);
    }

    public function put(string $route, array $controller)
    {
        $this->addRoute('GET', $route, $controller);
    }

    public function run()
    {
        foreach($this->routeList as $route){
            $controller = new $route['controller']($this->request, $this->response);
            $methodController = $route['method'];
            $controller->$methodController();
        }
    }
}
