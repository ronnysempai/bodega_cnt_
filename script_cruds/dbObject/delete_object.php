<?php
		// Lee el fichero en una variable,
		// y convierte su contenido a una estructura de datos
		
		include '../php/conn.php';
		
		function update_object($datos,$id)
		{
			
				$arr_atributos=get_object_vars($datos->objeto);
				$str_attr_up='';
				$i=0;
				$nombre_tabla=$datos->nombre_tabla;
				$nombre_clave=$datos->objeto->nombre_clave;
				foreach ($arr_atributos as $atributo => $v) 
				{	
					if($v!=$nombre_clave)
					{	if($i==0)
							$str_attr_up= $str_attr_up."$atributo=$v";
						else
							$str_attr_up=$str_attr_up.",$atributo=$v";
						$i=1;
					}
					
				}
				
				
				
				$sql_update="update $nombre_tabla set ".$str_attr_up. " where $nombre_clave =".$id;
				//echo $sql_update;	
				$result = @mysql_query($sql_update);
				if ($result)
				{
					echo json_encode(array('success'=>true));
				}
				else {
					echo json_encode(array('msg'=>'Some errors occured.'));
				}
		}
		
		
		
		//update_object($datos,1);
		

 

 

?>