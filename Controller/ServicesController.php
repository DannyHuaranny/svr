<?php 
//Llamada al modelo
require_once("Model/ServicesModel.php");


Class ServicesController{
    private $model;

    public function __construct(){
$this->model=new ServicesModel;
    }
//Llamada a la vista



public function View(){
    
$datos=$this->model->ver();
// $this->model->paginacion();
require_once("Views/service.php");
}

public function Create(){
    
    
    require_once("Views/Services/create.php");
    }

    public function Update(){
        // recibir el id enviado en el formulario

       $id=$_REQUEST['id'];
       // enviar id al modelo
            $datos=$this->model->ver_editar($id);      
        require_once("Views/Services/update.php");                      
        }

    public function Crear(){

        $Servicesimiento = new ServicesModel();
        
        $Servicesimiento->nom_mov = $_REQUEST['nom_mov'];
         $Servicesimiento->Services = $_REQUEST['Services'];
       
   
        $this->model->crear($Servicesimiento);
        //Redireccionar
        header('Location: ?c=Services&a=View');
        }

        public function Eliminar(){

            $idcliente=$_REQUEST['id'];
            $this->model->eliminar($idcliente);
           
            //Redireccionar
            header('Location: ?c=Services&a=View');
            }

         

            public function Editar(){

                $Servicesimiento = new ServicesModel();
        
                $Servicesimiento->nom_mov = $_REQUEST['nom_mov'];
                $Servicesimiento->Services = $_REQUEST['Services'];
                $Servicesimiento->id = $_REQUEST['id'];
                $this->model->editar($Servicesimiento);
                //Redireccionar
                header('Location: ?c=Services&a=View');
                               
                }

              

}



?>