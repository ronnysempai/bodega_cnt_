<?php
	
	
	$result = array();

	include 'conn.php';
	
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
	$rs = mysql_query("select * from categoria ");
	$cad_cuerpo_xml='';
	$cad_cabecera_xml='';
	$items = array();
	
	$arrObjArbol= array();
	$arbol =  new stdClass();
	$arbol->id=0;
	$arbol->text='Categorias';
		try 
		{
			while($row = mysql_fetch_object($rs))
			{	$objeto =  new stdClass();
				array_push($items, $row); 
				$objeto->id=$row->id_categoria;
				$objeto->text=$row->nombre_categoria;
				$objeto->state='closed';
				$objeto->iconCls='folder';
				$objeto->attributes='{ "subcategoria":0}';
					
					$rs_subcategorias = mysql_query("select * from subcategoria where eliminado <> '1' and id_categoria =".$row->id_categoria);
					$subcategoria =  new stdClass();
					$subcategoria->id=-1;
					$subcategoria->text='Sin Subcategoria';
					$arrSubcatagorias=array($subcategoria);
					while($row_subcategorias = mysql_fetch_object($rs_subcategorias) )
					{	$arrSubcatagorias=array();
						$subcategoria =  new stdClass();
						$subcategoria->id=$row_subcategorias->id_subcategoria;
						$subcategoria->text=$row_subcategorias->nombre_subcategoria;
						$subcategoria->iconCls='folder';
						$subcategoria->attributes='{ "subcategoria":1}';
						array_push($arrSubcatagorias,$subcategoria); 
					}
				$objeto->children=$arrSubcatagorias;	
				//$objeto->children=[0];
				array_push($arrObjArbol, $objeto); 
				
				
			}
			
			$result["rows"] = $items;
			$arbol->children=$arrObjArbol;
			$arrbolTotal=array($arbol);
		}
		catch (ErrorException $e) 
		{
			echo '';
		}
		
		echo json_encode($arrbolTotal);
			
?>