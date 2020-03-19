<?php
require_once 'Api.php';
require_once 'config/DB.php';
require_once 'Action.php';
//require_once 'Users.php';

class ProductApi extends Api
{
    public $apiName = 'products';


    public function indexAction()
    {
        $act = Action::getAll();
        if($act){
            return $this->response($act, 200);
        }
        return $this->response('Data not found', 404);
    }
    public function viewAction()
    {
        $id = array_pop($this->requestUri);
        if($id){
           $act = Action::getById($id);
            if($act){
                return $this->response($act, 200);
            }
        }
        return $this->response('Data not found', 404);
    }
    public function createAction()
    {
        $act = Action::createItem($this->json);
         if ($act) {
              return $this->response($act, 200);
         }
        return $this->response("Saving error", 500);
    }
    public function updateAction()
    {
        $id = array_pop($this->requestUri);
        if(!Action::getById($id)){
            return $this->response("User with id=$userId not found", 404);
        }
        $act = Action::updateItem($this->json,$id);
        if ($act) {
              return $this->response($act, 200);
         }
        return $this->response("Update error", 500);
     }   
    public function deleteAction()
    {
        $id = array_pop($this->requestUri);
        if(!Action::getById($id)){
            return $this->response("User with id=$userId not found", 404);
        }
        $act = Action::deleteItem($id);
        if ($act) {
              return $this->response($act, 200);
         }
        return $this->response("Delete error", 500);

    }
}