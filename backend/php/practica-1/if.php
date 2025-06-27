<?php
    if(0>=8):
        echo "Expresion verdadera";
    endif;


    /* 
    
    
    ESTRUCUTRA IF

    OPC1
|    if(EXPRESIÓN){     
        CODIGO A EJECUTAR SI LA CONDICION ES VERDADERA
        }
        //codigo a ejecutar si la condicion es verdadera





    OPC2
         if(eXPRESIÓN):    
        CODIGO A EJECUTAR SI LA CONDICION ES VERDADERA
        endif;

    
    
    */




EJ:

        #PARA MOSTRAR QUE ES MAYOR DE EDAD

        $edad = 18;
        if($edad >= 18):
            echo "Eres mayor de edad";




    
        #

        $total=120
        if($total >= 100):
            $total=$total - ($total*0.20);
            echo "El total a pagar es de: ${$total}";
        endif;
       
?>
