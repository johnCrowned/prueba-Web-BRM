<!DOCTYPE html>
<html xmlns="">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Concesionario</title>
    <script>
    function registrarProducto(){
        //alert();
        
        if(document.getElementById('cantidad').value == ""){
            
        alert("Por favor ingrese la cantidad");
        }else{
            document.getElementById('formRegistrarproducto').submit();
        }
    }
    </script>
    <style type="text/css">
  .Estilo {
        font-family: Verdana, Arial, Helvetica, sans-serif
    }

    .Estilo9 {
        font-family: Verdana, Arial, Helvetica, sans-serif;
        font-size: 16px;
    }

    .Estilo15 {
        border-radius: 5px;
        border-bottom-color: black;
        background: fixed;
    }

    .Estilo17 {
        font-size: 18px;
        font-family: Verdana, Arial, Helvetica, sans-serif;
        color: #FFFFFF;
    }

    .Estilo19 {
        font-size: 18px;
        font-family: Verdana, Arial, Helvetica, sans-serif;
        color: #000000;
    }

   
    </style>
</head>

<body>




    <table border="0" align="center" style="position: absolute;
    z-index: 10; width:80%;margin-left:10%; background-color: #88aac76b;">




  
  <tr>
    <td align="center"class="div_btnsmenu" ><span class="Estilo3"><a href="registrarProducto.php" >Proovedor</a></span></td>
    <td align="center"class="div_btnsmenu"><span class="Estilo3"><a style='margin-left: -1114px;' href="venta.php">Comprador.</a></span></td>

  </tr>


    
        <tr>
            <td colspan="2"></td>
        </tr>

        <tr>
            <td colspan="2"></td>
        </tr>
        <tr>

            <td align="left" valign="top">
                <form id="formRegistrarproducto" name="form1" method="post" action="guardarProducto.php">
                    <table cols="black" class="Estilo15" width="150" border="0" align="center" bgcolor="#999999"
                        style="background-color: #a9a9a98a; border: 1px solid black;">
                        <tr>

                            <td width="108"><span class="Estilo19">Cantidad:</span></td>

                            <td width="776"><label>
                                    <input type="number" name="cantidad" id="cantidad" />
                                </label></td>
                        </tr>
                        <tr>
                            <td><span class="Estilo19">Numero de lote:</span></td>
                            <td><label>
                                    <input type="number" name="lote" />
                                </label></td>
                        </tr>
                        <tr>
                            <td><span class="Estilo19">Productos:</span></td>
                            <td><label>
                                    <select name="productos"> 
                                        <option value="jugos">Jugos</option>
                                        <option value="gaseosa">Gaseosas</option>
                                        <option value="dulces">Dulces</option>
                                        <option value="chocolate">Chocolates</option>
                                        <option value="0" selected>Productos</option>
                                    </select>
                                </label></td>
                        </tr>
            <td><span class="Estilo19">Fecha de vencimiento:</span></td>
            <td><label>
                    <input type="date" name="date">
                </label></td>
        </tr>
        <td><span class="Estilo19">Precio:</span></td>
        <td><label>
                <input type="number" name="precio" />
            </label></td>
        </tr>
        <tr>
            <td colspan="2"><div onClick="registrarProducto()" style="border: 1px solid black;
    background-color: brown;
    font-size: 20px;
    width: 162px;
    border-radius: 6px; color: azure;">Registrar Producto.</div></td>
        </tr>
    </table>



    </form>
    </td>
    </tr>
    <?php

    include ('conexion.php');
    echo "<table width='218' border='1' style='position: absolute;
    margin-left: 650px;
    margin-top: 300px;' >";
		
	echo "  <td bgcolor=#CC3333>Inventario Actual.";
    echo "</td>";
	echo "  <tr bgcolor=#CC3333>";
    echo "  <td>Cantidad</td>";
    echo "   <td>Lote</td>";
    echo "   <td>Producto</td>";
    echo "   <td>Fecha de Vencimiento.</td>";
    echo "   <td>Precio</td>";
    echo "  </tr>";
		
    $cont=0;	
    


    $sql="SELECT * FROM `1` ";
    if(!$result = @$db->query($sql)){
        die('Error en el nombre de los campos!!['.$db->error.']');
        
        }
            
            
            while($row=$result->fetch_assoc()){
            
            $cantidad= stripslashes($row["cantidad"]);
            $lote= stripslashes($row["lote"]);
            $productos= stripslashes($row["productos"]);
            $date= stripslashes($row["date"]);
            $precio= stripslashes($row["precio"]);
            $cont=$cont+1;
            //echo $iid_usuario; echo "___"; echo $ddocumento; echo "</br>";
            
            
            
            
            
          
        echo "   <tr>";
        echo "  <td>$cantidad</td>";
        echo "   <td>$lote</td>";
        echo "   <td>$productos</td>";
        echo "   <td>$date</td>";
        echo "   <td>$precio</td>";
        echo "  </tr>";
           
        
    }
     echo " </table>";
     echo "<stong style='margin-left: 536px;
    margin-top: 550px;
    position: absolute;'>El Numero de productos registrados es: $cont </b></strong>";
     ?>
    <tr>
    <br>
        <td colspan="2" align="center" valign="middle"><span class="Estilo1">Contacta con nosotros: email <a
                    href="jpcornado23@misena.edu.co">jpcornado23@misena.edu.co</a>
                </h2>
            </span></td>
    </tr>
    </table>
</body>

</html>