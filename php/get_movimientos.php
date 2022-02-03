<?php
	
	$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
	$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
	$offset = ($page-1)*$rows;
	$result = array();
	
	
	
	
	if(isset($_POST['idNodoSeleccionado']))
			$id_nodo=$_POST['idNodoSeleccionado'];
	
	if(isset($_POST['nodoTipo']))
		$nodoTipo=$_POST['nodoTipo'];
	
	if(isset($_POST['idNodoPadre']))
		$id_nodo_padre=$_POST['idNodoPadre'];
	
	if(isset($_POST['fecha_lectura1']))
		$fecha_lectura1=$_POST['fecha_lectura1'];
	
	if(isset($_POST['fecha_lectura2']))
		$fecha_lectura2=$_POST['fecha_lectura2'];
	
	
	
	
	if(isset($nodoTipo))
	if($nodoTipo=='raizBodega' )
			$id_recinto=$id_nodo_padre;
	else
		if($nodoTipo=='raizDispositivo' )
			$id_area_bodega=$id_nodo_padre;
		
	
	if(isset($nodoTipo))
	if($nodoTipo=='recinto' )
			$id_recinto=$id_nodo;
	else
	if($nodoTipo=='bodega')
			$id_bodega=$id_nodo;
	else
	if($nodoTipo=='area_bodega')
			$id_area_bodega=$id_nodo;
	else
		if($nodoTipo=='dispositivo')
			$id_dispositivo=$id_nodo;
	else
		if($nodoTipo=='antena')
			$id_antena=$id_nodo;
			
			
	
	include 'conn.php';
	
	//$rs = mysql_query("select count(*) from usuario");
	$rs = mysql_query("select count(*) from movimiento ");
	
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
	
	$cad_filtros_arbol='';
	//echo $id_nodo.' '.$nodoTipo.' ' ;
	
	if(! (isset($id_recinto) || isset($id_bodega) || isset($id_area_bodega) || isset($id_dispositivo) || isset($id_antena)  || ( isset($fecha_lectura1) && isset($fecha_lectura2) )  ) )
		$query = "select movimiento.*, IF(movimiento.sentido='1', 'entrada', 'salida') as sentido_movimiento , producto.clave_producto,producto.nombre_producto   from movimiento, producto where movimiento.id_producto=producto.id_producto order by fecha_reader  limit $offset,$rows" ;
	else
	{	if( isset($id_recinto)  )
			$cad_filtros_arbol= ($cad_filtros_arbol=='' ) ? ' id_recinto = '.$id_recinto : $cad_filtros_arbol.' and id_recinto = '.$id_recinto  ;
		if( isset($id_bodega)  )
			$cad_filtros_arbol= ($cad_filtros_arbol=='' ) ? ' id_bodega = '.$id_bodega : $cad_filtros_arbol.' and id_bodega = '.$id_bodega  ;	
		else
			if( isset($id_area_bodega)  )
				$cad_filtros_arbol= ($cad_filtros_arbol=='' ) ? ' id_area_bodega = '.$id_area_bodega : $cad_filtros_arbol.' and id_area_bodega = '.$id_area_bodega;
			else
			if(isset($id_dispositivo))
				$cad_filtros_arbol= ($cad_filtros_arbol=='' ) ? 'id_dispositivo = '.$id_dispositivo : $cad_filtros_arbol.' and id_dispositivo = '.$id_dispositivo ;
			else	
			if( isset($id_antena) )
				$cad_filtros_arbol= ($cad_filtros_arbol=='' ) ? 'id_antena = '.$id_antena : $cad_filtros_arbol.' and id_antena = '.$id_antena ;
			else	
				if(isset($fecha_lectura1) && isset($fecha_lectura2) )
					$cad_filtros_arbol= ($cad_filtros_arbol=='' ) ? " fecha_reader between '$fecha_lectura1' and '$fecha_lectura2'   " : " fecha_reader between '$fecha_lectura1' and '$fecha_lectura2'   " ;
					
		$query="select movimiento.*,IF(movimiento.sentido='1', 'entrada', 'salida') as sentido_movimiento ,producto.clave_producto,producto.nombre_producto from movimiento,producto  where $cad_filtros_arbol and movimiento.id_producto=producto.id_producto limit $offset,$rows";
	}		
		//echo $query;
		//exit;
		$rs = mysql_query($query);
		
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