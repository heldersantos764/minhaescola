<?php 

namespace Core;

use Core\Http\Request;
use Core\Http\Response;

/**
 * Classe abstrata que deve ser extendida por todos 
 * os controllers
 * 
 * @author Helder dos santos
 */
abstract class Controller{

    /**
     * Instancia da classe Request
     * @var Request
     */
    protected $request;

    /**
     * Instancia da classe Response
     * @var Response
     */
    protected $response;

    /**
     * =============================================================
     * Inicia o objeto passando $request e $response por referencia
     * =============================================================
     * 
     * @param Request &$request
     * @param Response &$response
     */
    public function __construct(Request &$request, Response &$response)
    {
        $this->request = $request;
        $this->response = $response;
    }
}