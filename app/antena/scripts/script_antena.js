var url;
		
		function newAntena()
		{
			//$('#dlg_subcategoria').window('open').dialog('setTitle','Nueva antena');
				
			$('#w_antena').window('open').dialog('setTitle','Nueva Antena');
			$('#fm_antena').form('clear');
			url = '/bodega_cnt/app/antena/scripts/save_antena.php';
			var gDispositivo = $('#antena_id_dispositivo').combogrid('grid');	// get datagrid object
			gDispositivo.datagrid('reload'); 
		}
		var modoEdicion=false;
		function editAntena()
		{
			var row = $('#dg_antena').datagrid('getSelected');
			var indice=$('#dg_antena').datagrid('getRowIndex',row)
			
			if (row)
			{
				$('#w_antena').window('open').dialog('setTitle','Editar Antena');
				$('#fm_antena').form('load',row);
				
				var gDispositivo = $('#antena_id_dispositivo').combogrid('grid');	// get datagrid object
				var rowsDispositivo=gDispositivo.datagrid('getRows')
				for(var ir=0;ir<rowsDispositivo.length;ir++)
					if(rowsDispositivo[ir].id_dispositivo==row.id_dispositivo)
						gDispositivo.datagrid('selectRow',ir);
					
					$('#antena_fecha_creacion').val(row.fecha_creacion);	
					modoEdicion=true;
				
				
				//$('#antena_usuario_responsable').combogrid('setValue', row.usuario_responsable);
				url = '/bodega_cnt/app/antena/scripts/update_antena.php';
				
			}
		}
		
		function saveAntena()
		{
			$('#fm_antena').form('submit',
			{
				url: url,
				onSubmit: function(){
						var date=new Date();
						var y = date.getFullYear();
						var m = ((date.getMonth()>9) ? (date.getMonth() +1) : '0'+(date.getMonth() +1) );
						var d = ( (date.getDate()>9) ? date.getDate(): '0'+date.getDate() ) ;
						var hh=date.getHours();
						var mm=date.getMinutes();
						var ss=date.getSeconds();
						var fecha= y+'-'+m+'-'+d+' '+hh+':'+mm+':'+ss;
					
					if(!modoEdicion)	
					$('#antena_fecha_creacion').val(fecha);
					
					var gDispositivo = $('#antena_id_dispositivo').combogrid('grid');	// get datagrid object
					var rDispositivo = gDispositivo.datagrid('getSelected');	// get the selected row
					$('#antena_id_dispositivo_oculto').val(rDispositivo.id_dispositivo);
					
					return $(this).form('validate');
				},
				success: function(result){
						//alert(result)
					
					try
					{	
						var result = eval('('+result+')');
						if (result.success)
						{	
							$('#w_antena').window('close');		// close the dialog
							$('#dg_antena').datagrid('reload');	// reload the user data
							
						}
						else 
						{
							$.messager.show({
								title: 'Error',
								msg: result.msg
							});
						}
						modoEdicion=false;
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
		function removeAntena()
		{
			var row = $('#dg_antena').datagrid('getSelected');
			if (row){
				$.messager.confirm('Confirm','esta seguro de que desea eliminar la antena?',function(r){
					if (r)
					{
						//console.log(r);
						$.post('/bodega_cnt/app/antena/scripts/remove_antena.php',{id_antena:row.id_antena},function(result)
						{
						
							console.log(result)
							//alert(result)
							if (result.success)
							{
								$('#dg_antena').datagrid('reload');	// reload the user data
							}
							else 
							{	alert(result.msg);
								/* $.messager.show({	// show error message
									title: 'Error',
									msg: result.msg
								}); */
							}
						},'json');
					}
				});
			}
		}
		
		
		$(function(){  
            
			$('#antena_id_dispositivo').combogrid({  
					panelWidth: 500,
					idField: 'id_dispositivo',
					textField: 'nombre_dispositivo',
					url: 'dispositivo/scripts/get_dispositivo.php',
					columns: [[
						{field:'id_dispositivo',title:'id',hidden:true,width:80},
						{field:'nombre_dispositivo',title:'Nombre Dispositivo',width:120},
						{field:'modelo',title:'Modelo',width:80,align:'right'},
						{field:'marca',title:'Marca',width:80,align:'right'},
						{field:'nombre_area_bodega',title:'Area Bodega',width:80,align:'right'}
					]],
					fitColumns: true 
                
            });  
        });
		
		