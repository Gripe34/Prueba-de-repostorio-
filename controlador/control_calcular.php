<?php

    include("../modelo/log_calcular.php");

    if($_POST["btn_calcular"])
    {
        if(isset($_POST["tx_usu"]) && isset($_POST["tx_con"]))
        {
            //CONDICIONANDO USUARIO
            if($_POST["tx_usu"]=="Prosoft")
            {

                //CONDICIONANDO CONTRASEÑA 
                if($_POST["tx_con"]=="Pro123")
                {
                    //formulario a llamar
                    include("../vista/calcular.php");
                }
                else
                {
                   echo "contraseña incorreacta" ;    
                }
                //FIN

            }
            else
            {
               echo "Los datos ingresados no son validos" ;    
            }
            //FIN
            
        }


        //echo "Oprimio el boto calcular ";
        //pasar de cajas a variables 
        $dato1 = $_POST["tx_usu"];
        $dato2 = $_POST["tx_con"];

        //instanciar 
        $ope = new CALCULAR($dato1, $dato2);
        //llmar al  metodo
        $rta= $ope->SUMAR();
        //enviar valores de formulario 
        include("../vista/calcular.php");  


        //operacion matematica
        //$rta = $dato1 + $dato2;
        
        //validar que lleguen datos
        //echo $dato1, "<br>";
        //echo $dato2;
        //validar que lleguen datos correctamente 
       //var_dump($dato1,$dato2);
         

        //Ir al formulario de calcular
        //include("../vista/calcular.php");

         
    }//fin if

?>