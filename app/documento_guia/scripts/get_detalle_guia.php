<?php
	$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
	$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
	$offset = ($page-1)*$rows;
	$result = array();
	
	if(isset($_GET['id_documento_guia']))
			$id_documento_guia=$_GET['id_documento_guia'];
	
	include '/../../../php/conn.php';
	
	//$rs = mysql_query("select count(*) from usuario");
	$rs = mysql_query("select count(*) from detalle_guia ");
	
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
	//echo $id_documento_guia;
	if(!isset($id_documento_guia))
		$rs = mysql_query("select * from detalle_guia limit $offset,$rows");
	else
	{	
		$sql="SELECT detalle_guia.*,producto.id_producto,producto.nombre_producto,producto.precio_promedio from detalle_guia,producto where producto.id_producto = detalle_guia.id_producto and detalle_guia.eliminado <> '1' and id_documento_guia = $id_documento_guia" ;
		$rs = mysql_query($sql);
		
		
	}
	
	$items = array();
	$cad_json='';
	$i=isset($id_documento_guia)? $id_documento_guia : 0;
	
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
	//echo "[$cad_json]";
?>