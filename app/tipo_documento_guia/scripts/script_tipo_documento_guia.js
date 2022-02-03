var url;
		
		function newTipoDocumentoGuia()
		{
			//$('#dlg_subcategoria').window('open').dialog('setTitle','Nueva tipo_documento_guia');
				
			$('#w_tipo_documento_guia').window('open').dialog('setTitle','Nuevo Tipo Documento Guia');
			$('#fm_tipo_documento_guia').form('clear');
			url = '/bodega_cnt/app/tipo_documento_guia/scripts/save_tipo_documento_guia.php';
		}
		var modoEdicion=false;
		function editTipoDocumentoGuia()
		{
			var row = $('#dg_tipo_documento_guia').datagrid('getSelected');
			var indice=$('#dg_tipo_documento_guia').datagrid('getRowIndex',row)
			
			if (row)
			{
				$('#w_tipo_documento_guia').window('open').dialog('setTitle','Editar Tipo Documento Guia');
				$('#fm_tipo_documento_guia').form('load',row);
				
					$('#id_tipo_documento_guia').val(row.id_tipo_documento_guia);	
					$('#tipo_documento_guia_fecha_creacion').val(row.fecha_creacion);	
					modoEdicion=true;
				
				
				//$('#tipo_documento_guia_usuario_responsable').combogrid('setValue', row.usuario_responsable);
				url = '/bodega_cnt/app/tipo_documento_guia/scripts/update_tipo_documento_guia.php';
				
			}
		}
		
		function saveTipoDocumentoGuia()
		{
			$('#fm_tipo_documento_guia').form('submit',
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
					$('#tipo_documento_guia_fecha_creacion').val(fecha);
					
					
					return $(this).form('validate');
				},
				success: function(result){
						//alert(result)
					
					try
					{	
						var result = eval('('+result+')');
						if (result.success)
						{	
							$('#w_tipo_documento_guia').window('close');		// close the dialog
							$('#dg_tipo_documento_guia').datagrid('reload');	// reload the user data
							
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
		function removeTipoDocumentoGuia()
		{
			var row = $('#dg_tipo_documento_guia').datagrid('getSelected');
			if (row){
				$.messager.confirm('Confirm','esta seguro de que desea eliminarlo?',function(r){
					if (r)
					{
						//console.log(r);
						$.post('/bodega_cnt/app/tipo_documento_guia/scripts/remove_tipo_documento_guia.php',{id_tipo_documento_guia:row.id_tipo_documento_guia},function(result)
						{
						
							console.log(result)
							//alert(result)
							if (result.success)
							{
								$('#dg_tipo_documento_guia').datagrid('reload');	// reload the user data
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
            
			$('#documento_guia_id_tipo_documento_guia').combobox({  
					url:'tipo_documento_guia/scripts/get_combo_tipo_documento_guia.php',
															valueField:'id',
															textField:'text',
															panelHeight:'auto'
                
            });  
        });
		
		