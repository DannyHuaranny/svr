<?php 
//Llamada al modelo
require_once("Model/AboutModel.php");


Class AboutController{
    private $model;

    public function __construct(){
$this->model=new AboutModel;
    }
//Llamada a la vista



public function View(){
    
//$datos=$this->model->ver();
// $this->model->paginacion();
require_once("Views/about.php");
}

public function Create(){
    
    
    require_once("Views/About/create.php");
    }

    public function Update(){
        // recibir el id enviado en el formulario

       $id=$_REQUEST['id'];
       // enviar id al modelo
            $datos=$this->model->ver_editar($id);      
        require_once("Views/About/update.php");                      
        }

    public function Crear(){

        $Aboutimiento = new AboutModel();
        
        $Aboutimiento->nom_mov = $_REQUEST['nom_mov'];
         $Aboutimiento->About = $_REQUEST['About'];
       
   
        $this->model->crear($Aboutimiento);
        //Redireccionar
        header('Location: ?c=About&a=View');
        }

        public function Eliminar(){

            $idcliente=$_REQUEST['id'];
            $this->model->eliminar($idcliente);
           
            //Redireccionar
            header('Location: ?c=About&a=View');
            }

         

            public function Editar(){

                $Aboutimiento = new AboutModel();
        
                $Aboutimiento->nom_mov = $_REQUEST['nom_mov'];
                $Aboutimiento->About = $_REQUEST['About'];
                $Aboutimiento->id = $_REQUEST['id'];
                $this->model->editar($Aboutimiento);
                //Redireccionar
                header('Location: ?c=About&a=View');
                               
                }

              

}



?>