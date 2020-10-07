
<?php 

include ("Controllers/ConversorController.php");

?>
<html>
<body>
<link href="css/site.css" rel="stylesheet" type="text/css" media="screen" />
<div class="wrapper">
<a href="index.php">Regresar al inicio</a>
<form method="post" name="conversor" class="login">  
<div class="login-container">
<h1><span>Conversor de Medidas</span></h1>
    <label> Introduzca el valor: </label><br /><br />
    
    <input type="text" name="valor" onChange="validarnumero(valor);" /> <br><br>
           
        <label> Selecciona la medida actual:          
        <select name="lista_actual" >           
            
            <option value="centimetro">Centimetro</option>
            <option value="metro">Metro</option>
            <option value="pulgada">Pulgada</option>
            <option value="yarda">Yarda</option>

            <option value="gramo">Gramo</option>
            <option value="kilogramo">Kilogramo</option>
            <option value="onza">Onza</option>

            <option value="litro">Litro</option>
            <option value="mililitros">Mililitros</option>
            <option value="cubico">Metro Cúbico</option>
            
            
        </select>
        </label> <br />
        
        <label> Selecciona la medida despues:
    
    <select name="lista_despues">             
            
    <option value="centimetro2">Centimetro</option>
            <option value="metro2">Metro</option>
            <option value="pulgada2">Pulgada</option>
            <option value="yarda2">Yarda</option>
            
            <option value="gramo2">Gramo</option>
            <option value="kilogramo2">Kilogramo</option>
            <option value="onza2">Onza</option>

            <option value="litro2">Litro</option>
            <option value="mililitros2">Mililitros</option>
            <option value="cubico2">Metro Cúbico</option>
        </select>
        </label> <br /> <br />
       
<input type="submit" value="Ver resultados" class="primary_action" >  

</div>
</form>
</div>
</body>
</html>