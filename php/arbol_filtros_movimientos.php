<?php
	
	
	$result = array();

	include 'conn.php';
	
	//$rs = mysql_query("select count(*) from usuario");
	
	
	
	
	$rs = mysql_query("select * from recinto where eliminado <> '1' ");
	$cad_cuerpo_xml='';
	$cad_cabecera_xml='';
	$items = array();
	
	$arrObjArbol= array();
	$arbol =  new stdClass();
	$arbol->id=0;
	$arbol->text='Recintos';
		try 
		{
			while($row = mysql_fetch_object($rs))
			{	
				$objeto =  new stdClass();
				array_push($items, $row); 
				$objeto->id=$row->id_recinto;
				$objeto->text=$row->nombre_recinto;
				$objeto->state='closed';
				$objeto->iconCls='folder';
				$objeto->attributes='{ "nodoTipo":"recinto"}';
				
				$objRaizBodegas	 =  new stdClass();
				$objRaizBodegas->id=0;
				$objRaizBodegas->text='Bodegas';
				$objRaizBodegas->state='closed';
				$objRaizBodegas->attributes='{ "nodoTipo":"raizBodega"}';
					$rs_bodegas = mysql_query("select * from bodega where id_recinto =".$row->id_recinto);
					$bodega =  new stdClass();
					$bodega->id=-1;
					$arrBodegas=array($bodega);
					while($row_bodega = mysql_fetch_object($rs_bodegas) )
					{	$arrBodegas=array();
						$bodega =  new stdClass();
						$bodega->id=$row_bodega->id_bodega;
						$bodega->text=$row_bodega->nombre_bodega;
						$bodega->iconCls='folder';
						$bodega->attributes='{ "nodoTipo":"bodega"}';
						$bodega->state='closed';
						
								$rs_area_bodegas = mysql_query("select * from area_bodega where id_bodega =".$row->id_recinto);
								$area_bodega =  new stdClass();
								$area_bodega->id=-1;
								$arrAreaBodegas=array();
								$ban_areas_bodegas=false;
								while($row_area_bodega = mysql_fetch_object($rs_area_bodegas) )
								{	$arrBodegas=array();
									$area_bodega =  new stdClass();
									$area_bodega->id=$row_area_bodega->id_area_bodega;
									$area_bodega->text=$row_area_bodega->nombre_area_bodega;
									$area_bodega->iconCls='folder';
									$area_bodega->state='closed';
									$area_bodega->attributes='{ "nodoTipo":"area_bodega"}';
											
											$objRaizDispositivos =  new stdClass();
											$objRaizDispositivos->id=0;
											$objRaizDispositivos->text='Dispositivos';
											$objRaizDispositivos->state='closed';
											$objRaizDispositivos->attributes='{ "nodoTipo":"raizDispositivo"}';
											
											$rs_dispositivos = mysql_query("select * from dispositivo where eliminado <> '1' and id_area_bodega =".$row_area_bodega->id_area_bodega);
											$dispositivo =  new stdClass();
											$dispositivo->id=-1;
											$arrDispositivo=array();
											$ban_dispositivo=false;
											
											while($row_dispositivo = mysql_fetch_object($rs_dispositivos) )
											{	
												$arrDispositivo=array();
												$dispositivo =  new stdClass();
												$dispositivo->id=$row_dispositivo->id_dispositivo;
												$dispositivo->text=$row_dispositivo->nombre_dispositivo;
												$dispositivo->iconCls='folder';
												$dispositivo->attributes='{ "nodoTipo":"dispositivo"}';
												$dispositivo->state='closed';
														
														$rs_antenas = mysql_query("select * from antena where eliminado <> '1' and id_dispositivo =".$row_dispositivo->id_dispositivo);
														$antena =  new stdClass();
														$antena->id=-1;
														$arrAntena=array();
														$ban_antena=false;
														while($row_antena = mysql_fetch_object($rs_antenas) )
														{	
															
															$antena = new stdClass();
															//echo '-'.$row_antena->id_antena;
															$antena->id=$row_antena->id_antena;
															$antena->text= ( $row_antena->sentido=='1') ? 'antena entrada'  : 'antena salida';
															$antena->iconCls='folder';
															$antena->attributes='{ " nodoTipo":"antena"}';
															
																	
															array_push($arrAntena,$antena); 
															$ban_antena=true;
														}
														//print_r($arrAntena);
														$dispositivo->children=$arrAntena;
												array_push($arrDispositivo,$dispositivo); 
												$ban_dispositivo=true;
											}
											$objRaizDispositivos->children=$arrDispositivo;
											$arrRaizDispositivos=array($objRaizDispositivos);
											
									$area_bodega->children=$arrRaizDispositivos;		
									array_push($arrAreaBodegas,$area_bodega); 
									$ban_areas_bodegas=true;
								}
								 if(!$ban_areas_bodegas)
									array_push($arrAreaBodegas,$area_bodega); 
									
								$bodega->children=$arrAreaBodegas;
						array_push($arrBodegas,$bodega); 
					}
					
				$objRaizBodegas->children=$arrBodegas;
				
				$arrRaizBodegas=array($objRaizBodegas);
				$objeto->children=$arrRaizBodegas;	
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