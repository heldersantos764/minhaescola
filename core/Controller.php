<?php 

namespace Core;

use Core\Http\Request;
use Core\Http\Response;

abstract class Controller{

    protected $request;
    protected $response;


    public function __construct(Request &$request, Response &$response)
    {
        $this->request = $request;
        $this->response = $response;
    }
}