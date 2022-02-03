<?php
	$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
	$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
	$offset = ($page-1)*$rows;
	$result = array();
	
	
		if(isset($_POST['id_producto']))
			$id_producto= $_POST['id_producto'];
	//$id_producto= 1;
	
	include 'conn.php';
	
	
	$cad_sql="select movimiento.id_movimiento,movimiento.id_antena,movimiento.id_dispositivo,movimiento.id_bodega,
	movimiento.fecha_registro,movimiento.fecha_reader,movimiento.estado, IF(movimiento.sentido='1', 'entrada', 'salida') as sentido_movimiento,movimiento.verificado,
	antena.*,dispositivo.*,bodega.*
	from movimiento,antena,dispositivo,bodega,area_bodega,recinto	where recinto.id_recinto=movimiento.id_recinto and area_bodega.id_area_bodega= movimiento.id_area_bodega  and movimiento.id_bodega=bodega.id_bodega  and  dispositivo.id_dispositivo=movimiento.id_dispositivo and antena.id_antena = movimiento.id_antena and movimiento.id_producto = $id_producto  ";
	
	//echo $cad_sql." limit $offset,$rows";
	$rs = mysql_query($cad_sql." limit $offset,$rows");
		try 
		{
			$row = mysql_fetch_row($rs);
		}
		catch (ErrorException $e) 
		{
				echo '';
		}
		$result["total"] = $row[0];
		
	
	
		$rs = mysql_query($cad_sql);
		
		$items = array();
		
		try 
		{
			while($row = mysql_fetch_object($rs))
			{	
				array_push($items, $row);
			}
			$result["rows"] = $items;
		}
		catch (ErrorException $e) 
		{
			echo '';
		}
	

		echo json_encode($result);

?>