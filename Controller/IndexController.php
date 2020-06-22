<?php 
//Llamada al modelo
//require_once("Model/IndexModel.php");


Class IndexController{
   // private $model;

    //public function __construct(){
//$this->model=new IndexModel;
    }
//Llamada a la vista



public function View(){
    
//$datos=$this->model->ver();
// $this->model->paginacion();
require_once("Views/index.php");
}


              

}



?>
