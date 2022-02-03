var url;
		
		function newSubcategoria()
		{
			//$('#dlg_subcategoria').window('open').dialog('setTitle','Nueva subcategoria');
				
			$('#w_subcategoria').window('open').dialog('setTitle','Nueva Subcategoria');
			$('#fm_subcategoria').form('clear');
			url = '/bodega_cnt/app/subcategoria/scripts/save_subcategoria.php';
			var gCategoria = $('#subcategoria_id_categoria').combogrid('grid');	// get datagrid object
			gCategoria.datagrid('reload'); 
		}
		
		var modoEdicion=false;
		function editSubcategoria()
		{
			var row = $('#dg_subcategoria').datagrid('getSelected');
			var indice=$('#dg_subcategoria').datagrid('getRowIndex',row)
			
			if (row)
			{
				$('#w_subcategoria').window('open').dialog('setTitle','Editar Documento Guia');
				$('#fm_subcategoria').form('load',row);
				
				var gCategoria = $('#subcategoria_id_categoria').combogrid('grid');	// get datagrid object
				var rowsCategoria=gCategoria.datagrid('getRows');
				for(var ir=0;ir<rowsCategoria.length;ir++)
					if(rowsCategoria[ir].id_categoria==row.id_categoria)
						gCategoria.datagrid('selectRow',ir);
					
					$('#subcategoria_fecha_creacion').val(row.fecha_creacion);	
					modoEdicion=true;
				
				
				//$('#subcategoria_usuario_responsable').combogrid('setValue', row.usuario_responsable);
				url = '/bodega_cnt/app/subcategoria/scripts/update_subcategoria.php';
				
			}
		}
		
		function saveSubcategoria()
		{
			$('#fm_subcategoria').form('submit',
			{
				url: url,
				onSubmit: function()
				{
						var date=new Date();
						var y = date.getFullYear();
						var m = ((date.getMonth()>9) ? (date.getMonth() +1) : '0'+(date.getMonth() +1) );
						var d = ( (date.getDate()>9) ? date.getDate(): '0'+date.getDate() ) ;
						var hh=date.getHours();
						var mm=date.getMinutes();
						var ss=date.getSeconds();
						var fecha= y+'-'+m+'-'+d+' '+hh+':'+mm+':'+ss;
					
					if(!modoEdicion)	
						$('#subcategoria_fecha_creacion').val(fecha);
					//alert($('#subcategoria_fecha_creacion').val())
					var gCategoria = $('#subcategoria_id_categoria').combogrid('grid');	// get datagrid object
					var rCategoria = gCategoria.datagrid('getSelected');	// get the selected row
					if(rCategoria==null || rCategoria == undefined)
					{alert('Por favor seleccione la categoria'); return false;}
					$('#subcategoria_id_categoria_oculto').val(rCategoria.id_categoria);
					
					return $(this).form('validate');
				},
				success: function(result){
						//alert(result)
					
					try
					{	
						var result = eval('('+result+')');
						if (result.success)
						{	
							$('#w_subcategoria').window('close');		// close the dialog
							$('#dg_subcategoria').datagrid('reload');	// reload the user data
							
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
		
		function removeSubcategoria()
		{
			var row = $('#dg_subcategoria').datagrid('getSelected');
			if (row){
				$.messager.confirm('Confirm','esta seguro de que desea eliminarlo?',function(r){
					if (r)
					{
						//console.log(r);
						$.post('/bodega_cnt/app/subcategoria/scripts/remove_subcategoria.php',{id_subcategoria:row.id_subcategoria},function(result)
						{
						
							console.log(result)
							//alert(result)
							if (result.success)
							{
								$('#dg_subcategoria').datagrid('reload');	// reload the user data
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
            
			$('#subcategoria_id_categoria').combogrid({  
					panelWidth: 500,
					idField: 'id_dispositivo',
					textField: 'nombre_categoria',
					url: 'categoria/scripts/get_categoria.php',
					columns: [[
						{field:'id_categoria',title:'id',hidden:true,width:80},
						{field:'nombre_categoria',title:'Nombre Categoria',width:120},
						{field:'descripcion_categoria',title:'Descripcion',width:80,align:'right'},
						{field:'fecha_creacion',title:'Fecha Creacion',width:80,align:'right'}
						
					]],
					fitColumns: true 
                
            });  
        });
		
		