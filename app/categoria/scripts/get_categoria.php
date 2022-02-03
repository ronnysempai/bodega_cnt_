<?php
	$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
	$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
	$offset = ($page-1)*$rows;
	$result = array();
	
	if(isset($_POST['filtro']))
			$filtro=$_POST['filtro'];
	
	include '/../../../php/conn.php';
	
	//$rs = mysql_query("select count(*) from usuario");
	$rs = mysql_query("select count(*) from categoria ");
	
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
		$rs = mysql_query("select * from categoria limit $offset,$rows");
	else
		$rs = mysql_query("select * from categoria where id_categoria=$filtro limit $offset,$rows");
		
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