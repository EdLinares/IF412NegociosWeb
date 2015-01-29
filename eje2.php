<?php
$numero1=0;
$numero2=0;
$iteraciones=0;
$msg= "";
if(isset($_POST["btnPrc"])){
//$numero1^numero2
  $numero1= intval($_POST["numero1"]);
  $numero2= intval($_POST["numero2"]);
  //crear variable
    $newValue= $numero1;
    For($i=0; $i<$numero2-1;$i++){
      $newValue*=$numero1;
    }
    $msg="El valor es: $numero1 a la potencia $numero2 es igual a: $newValue";
}
if(isset($_POST["btnRev"])){

$numero1= intval($_POST["numero1"]);
$iteraciones= intval($_POST["iteraciones"]);
$contador=1;
while($iteraciones>0){
  $msg.="$contador). Producto:".($numero1*$numero2)."</br>";
  $contador ++;
  $iteraciones --;

}
//echo numero1*iteracion --
}


if(isset($_POST["btnFac"])){
//factoial numero2
}
//No perder la iteracion seleccionada
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Ejercicio PHP 2</title>
</head>
<body>
  <h1>Ejercicio PHP 2</h1>
  <form action="eje2.php" method="post">

    <label for="numero1"> Numero 1 </label>
    <input type="text" id="numero1" name="numero1" value="<?php echo $numero1; ?>" />
  </br>
  <label for="numero2"> Numero 2 </label>
  <input type="text" id="numero2" name="numero2" value="<?php echo $numero2; ?>" />
</br>
    <label for="iteraciones">Numero de iteraciones</label>
    <select name="iteraciones" id="iteraciones">
    <option value="10">10</option>
    <option value="20">20</option>
    <option value="50">50</option>
    </select>
    <br/>
    <input type="submit" value="Procesar"
    name="btnPrc" id="btbPrc"/>
    <input type="submit" value="Reservar"
    name="btnRev" id="btbRev"/>
    <input type="submit" value="Factorial"
    name="btnFac" id="btbFac"/>
    </form>
    <div>
    <?php echo $msg;?>
    </div>
</body>
    </html>
