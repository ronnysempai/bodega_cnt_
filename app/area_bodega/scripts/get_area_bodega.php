<?php
	$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
	$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
	$offset = ($page-1)*$rows;
	$result = array();
	
	if(isset($_POST['filtro']))
			$filtro=$_POST['filtro'];
	
	include '/../../../php/conn.php';
	
	//$rs = mysql_query("select count(*) from usuario");
	$rs = mysql_query("select bodega.*,recinto.id_recinto,recinto.nombre_recinto from bodega,recinto where bodega.id_recinto= recinto.id_recinto ");
	
	try 
	{
		$row = mysql_fetch_row($rs);
	}
	catch (ErrorException $e) 
	{
			echo '';
	}
	$result["total"] = $row[0];
	//$rs = mysql_query("select * from usuario limit $offset,$rows");
	if(!isset($filtro))
		$rs = mysql_query("select area_bodega.*,bodega.nombre_bodega from area_bodega,bodega where area_bodega.id_bodega = bodega.id_bodega and area_bodega.eliminado <> '1' limit $offset,$rows");
		
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