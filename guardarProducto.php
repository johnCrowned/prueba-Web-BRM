<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Concesionario</title>
    <style type="text/css">
     .Estilo1 {
        font-family: Verdana, Arial, Helvetica, sans-serif
    }

    .Estilo9 {
        font-family: Verdana, Arial, Helvetica, sans-serif;
        font-size: 16px;
    }

  
    </style>
</head>

<body>
    <video src="carretera.mp4" autoplay loop muted style="position: absolute; height:900px;"></video>
    <table border="0" align="center"
        style="position: absolute; z-index: 10; width:80%;margin-left:10%; background-color: #88aac76b;">
        <tr>
            <td colspan="3"></td>
        </tr>
        <tr>
            <td colspan="3" align="center" bordercolor="#000000"></td>
        </tr>
        <tr>
            <td colspan="3"></td>
        </tr>
        <tr>
            <td width="271" valign="top">&nbsp;</td>
            <td width="313" align="left" valign="top" style="font-size: x-large;
    font-family: fantasy;
    color: black;">
                <p>
                    <?php
	include ('conexion.php');
	$cantidad=$_POST["cantidad"];
	$lote=$_POST["lote"];
	$productos=$_POST["productos"];
	$date=$_POST["date"];
	$precio=$_POST["precio"];
	
	
	mysqli_query ($db,"INSERT INTO `1` (`cantidad`, `lote`, `productos`, `date`, `precio`)
	VALUES ($cantidad,'$lote','$productos','$date','$precio')")
	or die (mysqli_error($db));
	echo "Producto Registrado Correctamente!!!</br>";
  echo"<img src=img/vistoBueno.jpg width=129 height=104 />";
	
	
	

    
	
	
	
	
	
	?>

                </p>
                <form id="form1" name="form1" method="post" action="registrarProducto.php">
                    <label>
                        <input type="submit" name="Submit" value="Volver" />
                    </label>
                </form>
                <p>&nbsp; </p>
            </td>
            <td width="294" valign="top">&nbsp;</td>
        </tr>
        <tr>
            <td colspan="3" align="center" valign="middle"><span class="Estilo1">Contacta con nosotros: email <a
                        href="jpcornado23@misena.edu.co">jpcornado23@misena.edu.co</a>
                    </h2>
                </span> <br /></td>
        </tr>
    </table>
</body>

</html>