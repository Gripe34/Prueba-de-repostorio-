<?php

    class CALCULAR
    {
        //atributos
        private $v1;
        private $v2;
        private $total;
        
        //metodos
        //metodo constructor
        public function __construct($c1, $c2)
        {
            $this->v1= $c1;
            $this->v2= $c2;
            $this->total = 0;
        }//fin constructor

        //funcion suma 
        public function SUMAR()
        {
            //operacion suma 
            $this->total = $this-> v1 + $this->v2;
            //retorno
            return $this->total;
        }//fin sumar 



    }//Fin class clacular 

?>