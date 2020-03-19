<?php
require_once 'ProductApi.php';

abstract class Api
{
    protected $method = ''; 
    public $json = [];
    public $requestUri = [];
    protected $action = ''; 


    public function __construct($json = null) {
       header("Access-Control-Allow-Orgin: *");
        header("Access-Control-Allow-Methods: *");
       header("Content-Type: application/json");

        
        $this->requestUri = explode('/', trim($_SERVER['REQUEST_URI'],'/'));
        $this->method = $_SERVER['REQUEST_METHOD'];
        $this->json = json_decode($json,true);
    }

    public function run() {
        $this->action = $this->getAction();
        if (method_exists($this, $this->action)) {
            return $this->{$this->action}();
        } else {
            throw new RuntimeException('Invalid Method', 405);
        }
    }

    protected function response($data, $status = 500) {
        header("HTTP/1.1 " . $status . " " . $this->requestStatus($status));
        return json_encode($data,JSON_UNESCAPED_UNICODE);
    }

    private function requestStatus($code) {
        $status = array(
            200 => 'OK',
            404 => 'Not Found',
            405 => 'Method Not Allowed',
            500 => 'Internal Server Error',
        );
        return ($status[$code])?$status[$code]:$status[500];
    }

    protected function getAction()
    {
        $method = $this->method;
        switch ($method) {
            case 'GET':
                if(count($this->requestUri) == 2){
                   return 'indexAction';
                } else {
                     return 'viewAction';
                }
                break;
            case 'POST':
                return 'createAction';
                break;
            case 'PUT':
                return 'updateAction';
                break;
            case 'DELETE':
                return 'deleteAction';
                break;
            default:
                return null;
        }
    }

    abstract protected function indexAction();
    abstract protected function viewAction();
    abstract protected function createAction();
    abstract protected function updateAction();
    abstract protected function deleteAction();
    
}