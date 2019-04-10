<?php

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Concesionario</title>
<style type="text/css">

.Estilo1 {font-family: Verdana, Arial, Helvetica, sans-serif}
.Estilo9 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 16px; }
.Estilo10 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 24px;
	color: #0000FF;
}
.Estilo11 {color: #000033}
.Estilo12 {color: #0000CC}
</style>
</head>

<body>
<video src="auto2.mp4" autoplay loop  muted style="position: absolute;  height:888px;"></video>
<table width="900" border="0" align="center" style="position: absolute;
    z-index: 10; width:80%;margin-left:10%; background-color: #88aac76b;">
<tr>
<td colspan="3"></td>
</tr>

<tr>
<td colspan="3">

</td>
</tr>
 <tr>
<td colspan="3"></td>
  </tr>
 <tr>
   <td width="273" valign="top">&nbsp;</td>
  <td width="340" align="center" valign="middle" style="background-color: #a9a9a98a; border-radius: 6px; border: 1px solid black;">
  
  <p align="center" class="Estilo10">Cotizacion.
  
  <span class="Estilo11">
	
		</span>
	  </p>
    <p class="Estilo10">&nbsp;
	</p>
    <p class="Estilo10">
	</p>
    <p>
	<?php
	
	include ('conexion.php');
	
	
	
	$nuevo = array();
	
//var_dump($_POST["itemsseleccionado"]);
$total = 0;
$cont = 0;
?>
<form id="form1" name="form1" method="post" action="eliminarpro.php">
<table border="1">
<tr>
<td>Producto</td><td>Cantidad</td><td>Precio</td>
</tr>
<?php
foreach ($_POST["itemsseleccionado"] as &$valor) {


	$porciones = explode("****", $valor);
	echo '<tr><td><input type="hidden" name="lotearray['.$cont.']" value="'.$porciones[0].'">'.$porciones[2].'</td><td>'.$porciones[3].'</td><td>'.$porciones[1].'</td></tr>';
	$total = $total + $porciones[1];


	$cont++;
}

echo "<br> El total es: ".$total;

	
?>
</table>
<input type="submit" name="Submit" value="Comprar" />
</form>

<?php
 

	

	




	

	
	?>
	<form id="form1" name="form1" method="post" action="venta.php">
        <label>
          <input type="submit" name="Submit" value="Volver" />
        </label>
    </form>
	
	</p>
    <p class="Estilo10">&nbsp;	</p></td>
    <td width="273" valign="top">&nbsp;</td>
</tr>
<tr>
<td colspan="3" align="center" valign="middle">
<span class="Estilo1">Contacta con nosotros: email 
<a href="jpcornado23@misena.edu.co">jpcornado23@misena.edu.co</a>
      </h2>
    </span> 
	  <br/>	</td>
  </tr>
</table>
</body>
</html>
