<?php
	$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
	$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
	$offset = ($page-1)*$rows;
	$result = array();
	
	if(isset($_POST['filtro']))
			$filtro=$_POST['filtro'];
	
	if(isset($_GET['combo']))
			$enCombo=$_GET['combo'];
	
	include '/../../../php/conn.php';
	
	//$rs = mysql_query("select count(*) from usuario");
	$rs = mysql_query("select count(*) from unidad_medida ");
	
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
	if(isset($enCombo))
			$rs = mysql_query("select id_unidad_medida as id, nombre_unidad_medida as text from unidad_medida ");
	else		
	if(!isset($filtro))
		$rs = mysql_query("select * from unidad_medida limit $offset,$rows");
	else
		 $rs = mysql_query("select * from unidad_medida where id_categoria=$filtro limit $offset,$rows");
		
		
			
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
	

	echo json_encode($items);

?>