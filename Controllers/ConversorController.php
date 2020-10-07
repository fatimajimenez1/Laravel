<?php

$centimetro_metro = 0.01;
$centimetro_pulgada = 0.393701;
$centimetro_yarda =0.0109361;

$metro_centimetro = 100;
$metro_pulgada = 39.37;
$metro_yarda =1.094;

$pulgada_centrimetro = 2.54;
$pulgada_metro =0.0254;
$pulgada_yarda = 0.0277778
;

$yarda_centimetro = 91.44;
$yarda_metro = 0.9144;
$yarda_pulgada = 36;  
 
$gramo_kilogramo=0.001;
$gramo_onza=0.035274 ;
$kilogramo_gramo=1000;
$kilogramo_onza=35.274;
$onza_gramo=28.35;
$onza_kilogramo=0.0283495;

$litro_militros=1000;
$litro_cubico=0.001;
$mililitros_litros=0.001;
$mililitros_cubico=1e-6;
$cubico_litros=1000;
$cubico_mililitros=1e+6;
$resultado=0;

$medida = isset($_POST['lista_actual']) ? $_POST['lista_actual'] : ''; 
$medida2 = isset($_POST['lista_despues']) ? $_POST['lista_despues'] : ''; 

    //Centimetro a Metro//

    
 if($medida == "centimetro" and $medida2 == "metro2"){
  
    $resultado= $_POST['valor'] * $centimetro_metro."M";     
    echo "<script type='text/javascript'>alert('El valor de la medida es: $resultado');</script>";

      //Centimetro a Pulgada//
  }else if ($medida == "centimetro" and $medida2 == "pulgada2"){     
    $resultado= $_POST['valor'] * $centimetro_pulgada."in";     
    echo "<script type='text/javascript'>alert('El valor de la medida es: $resultado');</script>";

      //Centimetro a Yarda//
       }else if( $medida == "centimetro" and $medida2 == "yarda2"){   
        $resultado=$_POST['valor'] * $centimetro_yarda." yd";     
        echo "<script type='text/javascript'>alert('El valor de la medida es: $resultado');</script>";
       }

      //Metro a Centimetro
    else if( $medida == "metro" and $medida2 == "centimetro2")    {
        $resultado=$_POST['valor'] * $metro_centimetro."cm";     
        echo "<script type='text/javascript'>alert('El valor de la medida es: $resultado');</script>";

      //Metro a Pulgada
    } else if( $medida == "metro" and $medida2 == "pulgada2"){
        $resultado= $_POST['valor'] * $metro_pulgada."in";     
        echo "<script type='text/javascript'>alert('El valor de la medida es: $resultado');</script>";

      //Metro a Yarda
    } else if ($medida == "metro" and $medida2 == "yarda2"){
        $resultado= $_POST['valor'] * $metro_yarda." yd"; 
        echo "<script type='text/javascript'>alert('El valor de la medida es: $resultado');</script>";    
    }

      //Pulgada a centimetro
      else if ( $medida == "pulgada" and $medida2 == "centimetro2")  {  
        $resultado=$_POST['valor'] * $pulgada_centrimetro."cm";     
        echo "<script type='text/javascript'>alert('El valor de la medida es: $resultado');</script>";
        
      //Pulgada a Metro
      } else if  ($medida == "pulgada" and $medida2 == "metro2"){    
        $resultado=$_POST['valor'] * $pulgada_metro."m";     
        echo "<script type='text/javascript'>alert('El valor de la medida es: $resultado');</script>";

  //Pulgada a Yarda
      }  else if ($medida == "pulgada" and $medida2 == "yarda2")  {
        $resultado= $_POST['valor'] * $pulgada_yarda." yd";     
 echo "<script type='text/javascript'>alert('El valor de la medida es: $resultado');</script>";

      //Yarda a Centimetro
     } else if( $medida == "yarda" and $medida2 == "centimetro2")  {   
        $resultado= $_POST['valor'] * $yarda_centimetro."cm";     
   echo "<script type='text/javascript'>alert('El valor de la medida es: $resultado');</script>";

      //Yarda a Metro
    } else if ($medida == "yarda" and $medida2 == "metro2")   {
        $resultado= $_POST['valor'] * $yarda_metro."m";     
    echo "<script type='text/javascript'>alert('El valor de la medida es: $resultado');</script>";

      //Yarda a Pulgada
    } else if ($medida == "yarda" and $medida2 == "pulgada2")  {  
        $resultado= $_POST['valor'] * $yarda_pulgada."in";     
        echo "<script type='text/javascript'>alert('El valor de la medida es: $resultado');</script>";  
}

 //Gramo a Kilogramo
 else if ($medida == "gramo" and $medida2 == "kilogramo2")  {  
    $resultado= $_POST['valor'] * $gramo_kilogramo."kg"; 
    echo "<script type='text/javascript'>alert('El valor de la medida es: $resultado');</script>";      
}

 //Gramo a Onza
 else if ($medida == "gramo" and $medida2 == "onza2")  {  
    $resultado= $_POST['valor'] * $gramo_onza."onza";    
    echo "<script type='text/javascript'>alert('El valor de la medida es: $resultado');</script>";   
}

 //kilogramo a Gramo
else if ($medida == "kilogramo" and $medida2 == "gramo2")  {  
    $resultado= $_POST['valor'] * $kilogramo_gramo."gr";  
    echo "<script type='text/javascript'>alert('El valor de la medida es: $resultado');</script>";     
}

 //kilogramo a Onza
else if ($medida == "kilogramo" and $medida2 == "onza2")  {  
    $resultado= $_POST['valor'] * $kilogramo_onza."onza";     
    echo "<script type='text/javascript'>alert('El valor de la medida es: $resultado');</script>";  
}

 //onza a Gramo
 else if ($medida == "onza" and $medida2 == "gramo2")  {  
    $resultado= $_POST['valor'] * $onza_gramo."gr";   
    echo "<script type='text/javascript'>alert('El valor de la medida es: $resultado');</script>";    
}
 //onza a Kilogramo
else if ($medida == "onza" and $medida2 == "kilogramo2")  {  
    $resultado= $_POST['valor'] * $onza_kilogramo."kg";    
    echo "<script type='text/javascript'>alert('El valor de la medida es: $resultado');</script>";   
}

else if ($medida == "litro" and $medida2 == "mililitros2")  {  
    $resultado= $_POST['valor'] * $litro_militros."ml"; 
    echo "<script type='text/javascript'>alert('El valor de la medida es: $resultado');</script>";      
}

else if ($medida == "litro" and $medida2 == "cubico2")  {  
    $resultado= $_POST['valor'] * $litro_cubico."m³";  
    echo "<script type='text/javascript'>alert('El valor de la medida es: $resultado');</script>";     
}

else if ($medida == "mililitros" and $medida2 == "litro2")  {  
    $resultado=$_POST['valor'] * $mililitros_litros."lt" ;  
    echo "<script type='text/javascript'>alert('El valor de la medida es: $resultado');</script>";     
}

else if ($medida == "mililitros" and $medida2 == "cubico2")  {  
    $resultado= $_POST['valor'] * $mililitros_cubico."m³";  
    echo "<script type='text/javascript'>alert('El valor de la medida es: $resultado');</script>";     
}

else if ($medida == "cubico" and $medida2 == "litro2")  {  
    $resultado= $_POST['valor'] * $cubico_litros."lt";
    echo "<script type='text/javascript'>alert('El valor de la medida es: $resultado');</script>";       
}

//Centimetro
else if ($medida == "centimetro" and $medida2 == "gramo2")  {  
    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>";
}

else if ($medida == "centimetro" and $medida2 == "kilogramo2")  {  
    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>"; 
}

else if ($medida == "centimetro" and $medida2 == "onza2")  {  
    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>";    
}

else if ($medida == "centimetro" and $medida2 == "litro2")  {  
    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>";   
}

else if ($medida == "centimetro" and $medida2 == "mililitros2")  {  
    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>";  
}

else if ($medida == "centimetro" and $medida2 == "cubico2")  {  
    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>";
}

//Metro
else if ($medida == "metro" and $medida2 == "gramo2")  {  
    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>"; 
}

else if ($medida == "metro" and $medida2 == "kilogramo2")  {  
    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>";
}

else if ($medida == "metro" and $medida2 == "onza2")  {  
    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>";  
}

else if ($medida == "metro" and $medida2 == "litro2")  {  
    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>";
}

else if ($medida == "metro" and $medida2 == "mililitros2")  {  
    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>";
    
    
}

else if ($medida == "metro" and $medida2 == "cubico2")  {  
    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>";    
}

//Pulgada
else if ($medida == "pulgada" and $medida2 == "gramo2")  {  
    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>"; 
}

else if ($medida == "pulgada" and $medida2 == "kilogramo2")  {  
    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>"; 
}

else if ($medida == "pulgada" and $medida2 == "onza2")  {  
    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>";
}

else if ($medida == "pulgada" and $medida2 == "litro2")  {  
    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>";   
}

else if ($medida == "pulgada" and $medida2 == "mililitros2")  {  
    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>";   
}

else if ($medida == "pulgada" and $medida2 == "cubico2")  {  
    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>";   
}

//Yarda
else if ($medida == "yarda" and $medida2 == "gramo2")  {  
    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>";    
}

else if ($medida == "yarda" and $medida2 == "kilogramo2")  {  
    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>"; 
}

else if ($medida == "yarda" and $medida2 == "onza2")  {  
    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>";     
}

else if ($medida == "yarda" and $medida2 == "litro2")  {  
    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>";
}

else if ($medida == "yarda" and $medida2 == "mililitros2")  {  
    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>";  
}

else if ($medida == "yarda" and $medida2 == "cubico2")  {  
    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>";
}

//Gramo
else if ($medida == "gramo" and $medida2 == "centimetro2")  {  
    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>";
}

else if ($medida == "gramo" and $medida2 == "metro2")  {  
    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>";    
}

else if ($medida == "gramo" and $medida2 == "pulgada2")  {  
    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>"; 
}

else if ($medida == "gramo" and $medida2 == "yarda2")  {  
    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>"; 
}

else if ($medida == "gramo" and $medida2 == "litro2")  {  
    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>";  
}

else if ($medida == "gramo" and $medida2 == "mililitros2")  {  
    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>";   
}

else if ($medida == "gramo" and $medida2 == "cubico2")  {  
    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>";   
}

//kilogramo
else if ($medida == "kilogramo" and $medida2 == "centimetro2")  {  
    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>";  
}

else if ($medida == "kilogramo" and $medida2 == "metro2")  {  
    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>";   
}

else if ($medida == "kilogramo" and $medida2 == "pulgada2")  {  
    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>";    
}

else if ($medida == "kilogramo" and $medida2 == "yarda2")  {  
    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>"; 
}

else if ($medida == "kilogramo" and $medida2 == "litro2")  {  
    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>";
}

else if ($medida == "kilogramo" and $medida2 == "mililitros2")  {  
    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>";    
}

else if ($medida == "kilogramo" and $medida2 == "cubico2")  {  
    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>"; 
}

//onza
else if ($medida == "onza" and $medida2 == "centimetro2")  {  
    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>";   
}

else if ($medida == "onza" and $medida2 == "metro2")  {  
    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>";  
}

else if ($medida == "onza" and $medida2 == "pulgada2")  {  
    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>";  
}

else if ($medida == "onza" and $medida2 == "yarda2")  {  
    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>";  
}

else if ($medida == "onza" and $medida2 == "litro2")  {  
    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>";  
}

else if ($medida == "onza" and $medida2 == "mililitros2")  {  
    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>";  
}

else if ($medida == "onza" and $medida2 == "cubico2")  {  
    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>";   
}

//litro
else if ($medida == "litro" and $medida2 == "centimetro2")  {  
    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>"; 
}

else if ($medida == "litro" and $medida2 == "metro2")  {  
    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>";
}

else if ($medida == "litro" and $medida2 == "pulgada2")  {  
    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>";   
}

else if ($medida == "litro" and $medida2 == "yarda2")  {  
    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>"; 
}

else if ($medida == "litro" and $medida2 == "gramo2")  {  
    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>";   
}

else if ($medida == "litro" and $medida2 == "kilogramo2")  {  
    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>";  
}

else if ($medida == "litro" and $medida2 == "onza2")  {  
    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>";
}

//mililitros
else if ($medida == "mililitros" and $medida2 == "centimetro2")  {  
    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>";
}

else if ($medida == "mililitros" and $medida2 == "metro2")  {  
    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>"; 
}

else if ($medida == "mililitros" and $medida2 == "pulgada2")  {  
    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>";   
}

else if ($medida == "mililitros" and $medida2 == "yarda2")  {  
    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>";  
}

else if ($medida == "mililitros" and $medida2 == "gramo2")  {  
    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>";      
}

else if ($medida == "mililitros" and $medida2 == "kilogramo2")  {  
    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>";    
}

else if ($medida == "mililitros" and $medida2 == "onza2")  {  
    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>";  
}

//cubico
else if ($medida == "cubico" and $medida2 == "centimetro2")  {  
    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>";   
}

else if ($medida == "cubico" and $medida2 == "metro2")  {  
    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>";    
}

else if ($medida == "cubico" and $medida2 == "pulgada2")  {  
    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>";     
}

else if ($medida == "cubico" and $medida2 == "yarda2")  {  
    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>";  
}

else if ($medida == "cubico" and $medida2 == "gramo2")  {  
    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>";  
}

else if ($medida == "cubico" and $medida2 == "kilogramo2")  {  
    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>";     
}

else if ($medida == "cubico" and $medida2 == "onza2")  {  
    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>";    
}


else if ( $medida == "centimetro" and $medida2 == "centimetro2")  {  
    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>";    }
   
    else if ( $medida == "metro" and $medida2 == "metro2")  {  
        $resultado=$_POST['valor'] * $metro."cm";     
        echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>";    }

        else if ( $medida == "pulgada" and $medida2 == "pulgada2")  {  
            echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>";    }

            else if ( $medida == "yarda" and $medida2 == "yarda2")  {  
                echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>";    }

                else if ( $medida == "gramo" and $medida2 == "gramo2")  {  
                    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>";    }

                    else if ( $medida == "kilogramo" and $medida2 == "kilogramo2")  {  
                        echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>";    }

                        else if ( $medida == "onza" and $medida2 == "onza2")  {  
                            echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>";    }

                            else if ( $medida == "litro" and $medida2 == "litro2")  {  
                                echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>";    }

                                else if ( $medida == "mililitros" and $medida2 == "mililitros2")  {  
                                    echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>";    }

                                    else if ( $medida == "cubico" and $medida2 == "cubico2")  {  
                                        echo "<script type='text/javascript'>alert('Las medidas no son compatibles');</script>";    }

?>                  