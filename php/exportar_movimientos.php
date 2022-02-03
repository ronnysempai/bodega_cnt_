<?php
	
			header("Content-type: application/octet-stream");
			//indicamos al navegador que se está devolviendo un archivo
			header("Content-Disposition: attachment; filename=movimientos.xls");
			//con esto evitamos que el navegador lo grabe en su caché
			header("Pragma: no-cache");
			header("Expires: 0");
	
	
			
	
	$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
	$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
	$offset = ($page-1)*$rows;
	$result = array();
	
	
	
	
	if(isset($_GET['idNodoSeleccionado']))
			$id_nodo=$_GET['idNodoSeleccionado'];
	
	if(isset($_GET['nodoTipo']))
		$nodoTipo=$_GET['nodoTipo'];
	
	if(isset($_GET['idNodoPadre']))
		$id_nodo_padre=$_GET['idNodoPadre'];
	
	if(isset($_GET['fecha_lectura1']))
		$fecha_lectura1=$_GET['fecha_lectura1'];
	
	if(isset($_GET['fecha_lectura2']))
		$fecha_lectura2=$_GET['fecha_lectura2'];
	
	if(isset($_GET['texto_nodoPadre']))
		$texto_nodoPadre=$_GET['texto_nodoPadre'];
	
	
	
	
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
		$query = "select movimiento.*, IF(movimiento.sentido='1', 'entrada', 'salida') as sentido_movimiento , producto.clave_producto,producto.nombre_producto   from movimiento, producto,bodega where movimiento.id_producto=producto.id_producto order by fecha_reader  limit $offset,$rows" ;
	else
	{	if( isset($id_recinto)  )
			$cad_filtros_arbol= ($cad_filtros_arbol=='' ) ? ' movimiento.id_recinto = '.$id_recinto : $cad_filtros_arbol.' and id_recinto = '.$id_recinto  ;
		if( isset($id_bodega)  )
			$cad_filtros_arbol= ($cad_filtros_arbol=='' ) ? ' movimiento.id_bodega = '.$id_bodega : $cad_filtros_arbol.' and id_bodega = '.$id_bodega  ;	
		else
			if( isset($id_area_bodega)  )
				$cad_filtros_arbol= ($cad_filtros_arbol=='' ) ? ' movimiento.id_area_bodega = '.$id_area_bodega : $cad_filtros_arbol.' and id_area_bodega = '.$id_area_bodega;
			else
			if(isset($id_dispositivo))
				$cad_filtros_arbol= ($cad_filtros_arbol=='' ) ? ' movimiento.id_dispositivo = '.$id_dispositivo : $cad_filtros_arbol.' and id_dispositivo = '.$id_dispositivo ;
			else	
			if( isset($id_antena) )
				$cad_filtros_arbol= ($cad_filtros_arbol=='' ) ? 'id_antena = '.$id_antena : $cad_filtros_arbol.' and id_antena = '.$id_antena ;
			else	
				if(isset($fecha_lectura1) && isset($fecha_lectura2) && $fecha_lectura1 != '' && $fecha_lectura2 != '' )
					$cad_filtros_arbol= ($cad_filtros_arbol=='' ) ? " fecha_reader between '$fecha_lectura1' and '$fecha_lectura2'   " : " fecha_reader between '$fecha_lectura1' and '$fecha_lectura2'   " ;
					
		$query="select movimiento.*,IF(movimiento.sentido='1', 'entrada', 'salida') as sentido_movimiento ,producto.clave_producto,producto.nombre_producto,bodega.nombre_bodega,recinto.nombre_recinto from movimiento,producto,bodega,recinto  where $cad_filtros_arbol and recinto.id_recinto = movimiento.id_recinto and bodega.id_bodega=movimiento.id_bodega and movimiento.id_producto=producto.id_producto limit $offset,$rows";
	}		
		//echo $query;
		//exit;
		$rs = mysql_query($query);
		
	$items = array();
	$nombre_bodega='';
	$nombre_recinto='';
		$tableBody='';
			try 
			{
				while($row = mysql_fetch_object($rs))
				{	
					$tableBody=$tableBody."<tr><td>$row->fecha_reader</td> <td>$row->cantidad</td> <td>$row->sentido_movimiento</td> <td>$row->clave_producto</td> <td>$row->nombre_producto</td> ";
					$nombre_bodega=$row->nombre_bodega;	
					$nombre_recinto=$row->nombre_recinto;	
					array_push($items, $row);
				}
				
				$result["rows"] = $items;
			}
			catch (ErrorException $e) 
			{
				echo '';
			}
			$texto_titulo='';
			$texto_fechas='';
			//$texto_titulo=  ($es_subcategoria != '0' && ( isset($filtro)  ) ) ? 'Subcategoria' : 'Categoria' ;
			
			if(isset($fecha_lectura1) && isset($fecha_lectura2) && $fecha_lectura1 != '' && $fecha_lectura2 != '' )
				$texto_fechas =  " $fecha_lectura1 a $fecha_lectura2 ";
			if( isset($nombre_bodega))
				$texto_titulo = " <div>  Bodega: $nombre_bodega ".$texto_titulo . " </div> ";
			
			if( isset($nombre_recinto))
				$texto_titulo = "<div>  Recinto: $nombre_recinto ".$texto_titulo . "<div/> ";
						
				
			echo "<table>
             <header>
			 <caption> 
			 <h3> Listado Movimientos $texto_titulo </h3>
			 <h3>  $texto_fechas </h3>
			 </caption>
               
			   <tr>
                  <th>Fecha Lectura</th>
                  <th>Cantidad</th>
				  <th>Sentido</th>
				  <th>Clave Producto</th>
				  <th>Producto</th>
               </tr>
             </header>".$tableBody."</table> ";
			 

?>