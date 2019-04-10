<?php

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Prueba</title>
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
<script>
function multiplicar(precio, cantidad, id, idchek, lote, nombrepro){
var total = precio * cantidad;

document.getElementById(id).innerHTML = total;
document.getElementById(idchek).value = lote+"****"+total+"****"+nombrepro+"****"+cantidad;
}
</script>
</head>

<body>
<video src="auto2.mp4" autoplay loop  muted style="position: absolute;  height:888px;"></video>
<table width="900" border="0" align="center" style="position: absolute;

    z-index: 10; width:80%;margin-left:10%; background-color: #88aac76b;">
    <tr>
    <td align="center"class="div_btnsmenu" ><span class="Estilo3"><a style='margin-left: 344px;
    margin-top: -10px;
    position: absolute;' href="registrarProducto.php" >Proovedor</a></span></td>
    <td align="center"class="div_btnsmenu"><span class="Estilo3"><a style='margin-left: 47px;' href="venta.php">Comprador.</a></span></td>

  </tr>
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
  
  <p align="center" class="Estilo10">
  
  <span class="Estilo11">
		</span>	</p>
    <p class="Estilo10">&nbsp;</p>
    <p class="Estilo10">Hoja de Productos</p>
    <form id="form1" name="form1" method="post" action="guardarVenta.php">
      <table width="282" height="111" border="0" bgcolor="#666666">
        <tr>
          <td width="133" rowspan="10"><label>
            
              <?php
		    include ('conexion.php');
    
        $cont=0;
        $sql="SELECT * FROM `1` ";
        if(!$result = @$db->query($sql)){
        die('Error en el nombre de los campos!!['.$db->error.']');
        
        }
            
            
        
        while($row=$result->fetch_assoc()){
          
            $iddivres = "'ipCantidad".$cont."'";            
            $idcheck = "'checkseleccionado".$cont."'";
            $nombreproducto = "'".$row["productos"]."'";  

            echo "Productos: ".$row["productos"]." Cantidad: ".'<input type="text"  onkeyup="multiplicar('.$row["precio"].', this.value, '.$iddivres.', '.$idcheck.', '.$row["lote"].' , '.$nombreproducto.' )"
             value="1" style="width: 40px;">.
             <div  id="ipCantidad'.$cont.'">PRECIO TOTAL:$'.$row["precio"].'
            </div> <input type="checkbox" id="checkseleccionado'.$cont.'" name="itemsseleccionado['.$cont.']" value="'.$row["lote"].'****'.$row["precio"].'****'.$row["productos"].'****1"><br>';
            $cont++;
          }
	      	?>
         
          </label></td>
          
        
  

            
            
            
            
          
        
           
        
    


 








      </table>
      <p>
        <label>
        
        </label>
      </p>
      <input type="submit" value="enviar" > 
    </form>
    <form id="form1" name="form1" method="post" action="registrarProducto.php">
        <label>
          <input type="submit" name="Submit" value="Volver" />
        </label>
    </form>
    
    <p class="Estilo10"><label></label>&nbsp;</p>
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
