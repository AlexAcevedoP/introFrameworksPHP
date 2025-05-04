<?php
//Procesar las rutas de peticiones del usuario

// Define el espacio de nombres para organizar y agrupar clases dentro del proyecto, evitando conflictos entre nombres de clases.
namespace App\Http;

class Request
{

    protected $segments = []; //almacena las partes de la url
    protected $controller; //almacena el nombre del controlador
    protected $method; //almacena el nombre del metodo 

    public function __construct()
    {   //divide la url con / en los segmentos del arreglo
        $this->segments = explode('/', $_SERVER['REQUEST_URI']); 
        //tomar el controlador y el metodo y ponerlos en los segmentos 1 y 2 del arreglo segments
        $this->setController();
        $this->setMethod();
    }

    //operador ternario: si el espacio del controlador esta vacio, llenar con home, de lo contrario usar el controlador
    public function setController(){
        $this->controller = empty($this->segments[1]) 
        ? 'home'
        : $this->segments[1];
    }

    public function setMethod(){
        $this->method = empty($this->segments[2]) 
        ? 'home'
        : $this->segments[2];
    }

}
