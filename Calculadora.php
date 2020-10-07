<a href="index.php">Regresar al inicio</a>

<br><br><?php

//entrada
//detectar operación
//ejecutar operación y obtener resultado
//impresión
include("Controllers/CalculadoraController.php");
$calculadora=new CalculadoraController();
$calculadora->cachaParametros();
$calculadora->ejecutaOperacion();
?>

<br><br>
<form method="post" >
<label><?php echo $calculadora->pantalla ?></label>
<input type="hidden" name="pantalla"
 value="<?php echo $calculadora->pantalla ?>"> =
<input type="number" name="resultado" 
value="<?php echo $calculadora->resultado ?>">
<br><br>
<input type="number" name="entrada" required>
<button name="accion" value="suma">+</button>
<button name="accion" value="resta">-</button>
<button name="accion" value="multiplica">*</button>
<button name="accion" value="division">/</button>
<button name="accion" value="reset">Reset</button>
</form>
<form method="post">
<button name="accion" value="reset">Reset</button>
</form>