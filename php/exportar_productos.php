<?php
			header("Content-type: application/octet-stream");
			//indicamos al navegador que se está devolviendo un archivo
			header("Content-Disposition: attachment; filename=productos.xls");
			//con esto evitamos que el navegador lo grabe en su caché
			header("Pragma: no-cache");
			header("Expires: 0");
	
	
			
			
			
			$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
			$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
			$offset = ($page-1)*$rows;
			$result = array();
			
			
			if(isset($_GET['filtro']))
					$filtro=$_GET['filtro'];
			if(isset($_GET['es_subcategoria']))
					$es_subcategoria=$_GET['es_subcategoria'];
			else
					$es_subcategoria=0;
			
			if( isset( $_GET['texto_nodo']))
				$texto_nodo = $_GET['texto_nodo'];
	
	
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
			$tableBody='';
			try 
			{
				while($row = mysql_fetch_object($rs))
				{	
					$tableBody=$tableBody."<tr><td>$row->nombre_producto</td><td>$row->nombre_producto</td> <td align='right' >$row->precio_promedio</td> </tr>";
					array_push($items, $row);
				}
				$result["rows"] = $items;
			}
			catch (ErrorException $e) 
			{
				echo '';
			}
			$texto_titulo='';
			//$texto_titulo=  ($es_subcategoria != '0' && ( isset($filtro)  ) ) ? 'Subcategoria' : 'Categoria' ;
			if($es_subcategoria !='0'  )
				$texto_titulo=   ($texto_nodo !='?' ) ? "Subcategoria $texto_nodo" : '' ;
			else
				$texto_titulo=   ($texto_nodo !='?' ) ? "Categoria $texto_nodo" : '' ;
			//echo "<div style='font-weight: bold' >Listado Productos $texto_titulo $texto_nodo </div>";
			
			echo "<table>
             <header>
			 <caption> <h3> Listado Productos $texto_titulo </h3></caption>
               
			   <tr>
                  <th>Nombre Producto</th>
                  <th>Stock Actual</th>
				  <th>Precio</th>
               </tr>
             </header>".$tableBody."</table> ";

		//echo json_encode($result);

			
			
				
			
			
			/* 
			
			//damos salida a la tabla */

?>