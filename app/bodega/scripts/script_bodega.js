var url;
		
		function newBodega()
		{
			//$('#dlg_subcategoria').window('open').dialog('setTitle','Nueva bodega');
				
			$('#w_bodega').window('open').dialog('setTitle','Nueva Bodega');
			$('#fm_bodega').form('clear');
			url = '/bodega_cnt/app/bodega/scripts/save_bodega.php';
			var gRecinto = $('#bodega_id_recinto').combogrid('grid');	// get datagrid object
			gRecinto.datagrid('reload'); 
		}
		
		function editBodega()
		{
			var row = $('#dg_bodega').datagrid('getSelected');
			var indice=$('#dg_bodega').datagrid('getRowIndex',row)
			
			if (row)
			{
				$('#w_bodega').window('open').dialog('setTitle','Editar Documento Guia');
				$('#fm_bodega').form('load',row);
				
				var gRecinto = $('#bodega_id_recinto').combogrid('grid');	// get datagrid object
				var rowsRecinto=gRecinto.datagrid('getRows')
				for(var ir=0;ir<rowsRecinto.length;ir++)
					if(rowsRecinto[ir].id_recinto==row.id_recinto)
						gRecinto.datagrid('selectRow',ir);
						
					
				//$('#bodega_id_recinto').combogrid('setValue', row.id_recinto);
				 var gUsuarioResponsable = $('#bodega_usuario_responsable').combogrid('grid');	// get datagrid object
				var rowsUsuarioResponsable=gUsuarioResponsable.datagrid('getRows')
				for(var ir=0;ir<rowsUsuarioResponsable.length;ir++)
					if(rowsUsuarioResponsable[ir].usuario==row.usuario_responsable)
					{	//alert(row.usuario_responsable)
						gUsuarioResponsable.datagrid('selectRow',ir); 
					}
				//$('#bodega_usuario_responsable').combogrid('setValue', row.usuario_responsable);
				url = '/bodega_cnt/app/bodega/scripts/update_bodega.php';
				
			}
		}
		
		function saveBodega()
		{
			$('#fm_bodega').form('submit',
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
						
						
						
					$('#bodega_fecha_creacion').val(fecha);
					$('#bodega_usuario').val(sessionStorage['usuario']);
					var gRecinto = $('#bodega_id_recinto').combogrid('grid');	// get datagrid object
					var rRecinto = gRecinto.datagrid('getSelected');	// get the selected row
					if(rRecinto!= null && rRecinto != undefined)					
					$('#bodega_id_recinto_oculto').val(rRecinto.id_recinto);
					
					if($('#bodega_id_recinto_oculto').val() == undefined || $('#bodega_id_recinto_oculto').val() =='' )
							{ alert('Por favor seleccione el recinto'); return false; }
							
					var gUsuarioResponsable = $('#bodega_usuario_responsable').combogrid('grid');	// get datagrid object
					var rUsuarioResponsable = gUsuarioResponsable.datagrid('getSelected');	// get the selected row
					$('#bodega_usuario_responsable').val(rUsuarioResponsable.usuario);
					
					return $(this).form('validate');
				},
				success: function(result){
						//alert(result)
					
					try
					{	
						var result = eval('('+result+')');
						if (result.success)
						{	
							$('#w_bodega').window('close');		// close the dialog
							$('#dg_bodega').datagrid('reload');	// reload the user data
							
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
		function removeBodega()
		{
			var row = $('#dg_bodega').datagrid('getSelected');
			if (row){
				$.messager.confirm('Confirm','esta seguro de que desea eliminarlo?',function(r){
					if (r)
					{
						//console.log(r);
						$.post('/bodega_cnt/app/bodega/scripts/remove_bodega.php',{id_bodega:row.id_bodega},function(result)
						{
						
							console.log(result)
							//alert(result)
							if (result.success)
							{
								$('#dg_bodega').datagrid('reload');	// reload the user data
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
            
			$('#bodega_id_recinto').combogrid({  
					panelWidth: 500,
					idField: 'bodega_id_recinto',
					textField: 'nombre_recinto',
					url: 'recinto/scripts/get_recinto.php',
					columns: [[
						{field:'id_recinto',title:'id',hidden:true,width:80},
						{field:'nombre_recinto',title:'Nombre Recinto',width:120},
						{field:'descripcion_recinto',title:'Decripcion',width:80,align:'right'},
						{field:'fecha_creacion',title:'Fecha de Creacion',width:80,align:'right'}
					]],
					fitColumns: true 
                
            });  
        });
		
		
		$(function(){  
            
			$('#bodega_usuario_responsable').combogrid({  
					panelWidth: 500,
					idField: 'bodega_usuario_responsable',
					textField: 'usuario',
					url: 'usuario/scripts/get_usuario.php',
					columns: [[
						{field:'bodega_usuario_responsable',title:'id',hidden:true,width:80},
						{field:'usuario',title:'Usuario ',width:120},
						{field:'nombre',title:'Nombre',width:80,align:'right'},
						{field:'apellido',title:'Apellido',width:80,align:'right'},
						{field:'cargo',title:'Cargo',width:80,align:'right'}
					]],
					fitColumns: true 
                
            });  
        });  