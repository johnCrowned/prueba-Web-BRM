<?php


foreach ($_POST["lotearray"] as &$valor) {

    include ('conexion.php');
    var_dump($valor);
    if(isset($valor)){
        var_dump($valor);
    
    
    $sql2="delete FROM `1` WHERE lote=".$valor;
	
	if(!$result2 = @$db->query($sql2)){
	die('Error en el nombre de los campos!!['.$db->error.']');
	}

}
    
    header('Location: registrarProducto.php');
    var_dump($valor);
}


?>