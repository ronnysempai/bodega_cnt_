<?php
	$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
	$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
	$offset = ($page-1)*$rows;
	$result = array();
	
	
	if(isset($_POST['filtro']))
			$filtro=$_POST['filtro'];
	if(isset($_POST['es_subcategoria']))
			$es_subcategoria=$_POST['es_subcategoria'];
	else
			$es_subcategoria=0;
	
	
	
	include 'conn.php';
	//echo $filtro.' -'.$es_subcategoria;
	
	$rs = mysql_query("select count(*) from producto ");
	
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
	if(!isset($filtro) || $filtro ==-1)
		$rs = mysql_query("select * from producto where eliminado <> '1' limit $offset,$rows");
	else
		if($es_subcategoria!=1)
			$rs = mysql_query("select * from producto where eliminado <> '1' and  id_categoria=$filtro limit $offset,$rows");
		else
			$rs = mysql_query("select * from producto where eliminado <> '1' and id_subcategoria=$filtro limit $offset,$rows");
		
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