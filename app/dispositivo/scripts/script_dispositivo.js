var url;
		
		function newDispositivo()
		{
			//$('#dlg_subcategoria').window('open').dialog('setTitle','Nueva dispositivo');
				
			$('#w_dispositivo').window('open').dialog('setTitle','Nuevo Dispositivo');
			$('#fm_dispositivo').form('clear');
			url = '/bodega_cnt/app/dispositivo/scripts/save_dispositivo.php';
			var gAreaBodega = $('#dispositivo_id_area_bodega').combogrid('grid');	// get datagrid object
			gAreaBodega.datagrid('reload'); 
		}
		
		function editDispositivo()
		{
			var row = $('#dg_dispositivo').datagrid('getSelected');
			var indice=$('#dg_dispositivo').datagrid('getRowIndex',row)
			
			if (row)
			{
				$('#w_dispositivo').window('open').dialog('setTitle','Editar Documento Guia');
				$('#fm_dispositivo').form('load',row);
				
				var gAreaBodega = $('#dispositivo_id_area_bodega').combogrid('grid');	// get datagrid object
				var rowsAreaBodega=gAreaBodega.datagrid('getRows');
				for(var ir=0;ir<rowsAreaBodega.length;ir++)
					if(rowsAreaBodega[ir].id_area_bodega==row.id_area_bodega)
						gAreaBodega.datagrid('selectRow',ir);
						
					
				//$('#dispositivo_usuario_responsable').combogrid('setValue', row.usuario_responsable);
				url = '/bodega_cnt/app/dispositivo/scripts/update_dispositivo.php';
				
			}
		}
		
		function saveDispositivo()
		{
			$('#fm_dispositivo').form('submit',
			{
				url: url,
				onSubmit: function(){
						/* var date=new Date();
						var y = date.getFullYear();
						var m = ((date.getMonth()>9) ? (date.getMonth() +1) : '0'+(date.getMonth() +1) );
						var d = ( (date.getDate()>9) ? date.getDate(): '0'+date.getDate() ) ;
						var hh=date.getHours();
						var mm=date.getMinutes();
						var ss=date.getSeconds();
						var fecha= y+'-'+m+'-'+d+' '+hh+':'+mm+':'+ss;
						 */
					
					var gAreaBodega = $('#dispositivo_id_area_bodega').combogrid('grid');	// get datagrid object
					var rAreaBodega = gAreaBodega.datagrid('getSelected');	// get the selected row
					$('#dispositivo_id_area_bodega_oculto').val(rAreaBodega.id_area_bodega);
					
					return $(this).form('validate');
				},
				success: function(result){
						//alert(result)
					
					try
					{	
						var result = eval('('+result+')');
						if (result.success)
						{	
							$('#w_dispositivo').window('close');		// close the dialog
							$('#dg_dispositivo').datagrid('reload');	// reload the user data
							
						}
						else 
						{
							$.messager.show({
								title: 'Error',
								msg: result.msg
							});
						}
					}
					catch(err)
					{
						$.messager.show({
								title: 'Error',
								msg: 'Error tratar de grabar en bases de datos'
							});
					}
					
				}
			});
		}
		function removeDispositivo()
		{
			var row = $('#dg_dispositivo').datagrid('getSelected');
			if (row){
				$.messager.confirm('Confirm','esta seguro de que desea eliminarlo?',function(r){
					if (r)
					{
						//console.log(r);
						$.post('/bodega_cnt/app/dispositivo/scripts/remove_dispositivo.php',{id_dispositivo:row.id_dispositivo},function(result)
						{
						
							console.log(result)
							//alert(result)
							if (result.success)
							{
								$('#dg_dispositivo').datagrid('reload');	// reload the user data
							}
							else 
							{
								$.messager.show({	// show error message
									title: 'Error',
									msg: result.msg
								});
							}
						},'json');
					}
				});
			}
		}
		
		
		$(function(){  
            
			$('#dispositivo_id_area_bodega').combogrid({  
					panelWidth: 500,
					idField: 'id_area_bodega',
					textField: 'nombre_area_bodega',
					url: 'area_bodega/scripts/get_area_bodega.php',
					columns: [[
						{field:'id_area_bodega',title:'id',hidden:true,width:80},
						{field:'clave_area',title:'Clave',width:120},
						{field:'nombre_area_bodega',title:'Nombre Area Bodega',width:120},
						{field:'descripcion_area_bodega',title:'Decripcion',width:80,align:'right'},
						{field:'nombre_bodega',title:'Bodega',width:80,align:'right'}
					]],
					fitColumns: true 
                
            });  
        });
		
		
		