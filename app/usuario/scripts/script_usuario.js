var url;
		
		function newUsuario()
		{
			//$('#dlg_subcategoria').window('open').dialog('setTitle','Nueva usuario');
				
			$('#w_usuario').window('open').dialog('setTitle','Nuevo Usuario');
			$('#fm_usuario').form('clear');
			url = '/bodega_cnt/app/usuario/scripts/save_usuario.php';
		}
		
		function editUsuario()
		{
			var row = $('#dg_usuario').datagrid('getSelected');
			var indice=$('#dg_usuario').datagrid('getRowIndex',row)
			
			if (row)
			{
				$('#w_usuario').window('open').dialog('setTitle','Editar Usuario');
				$('#fm_usuario').form('load',row);
				$('#id_usuario').val(  row.id_usuario);
				$('#confirmacion_password').val(  $('#password').val() );
				
				url = '/bodega_cnt/app/usuario/scripts/update_usuario.php';
				
			}
			
		}
		
		function saveUsuario()
		{
			$('#fm_usuario').form('submit',
			{
				url: url,
				onSubmit: function(){
						var date=new Date();
						var y = date.getFullYear();
						var m = ((date.getMonth()>9) ? (date.getMonth() +1) : '0'+(date.getMonth() +1) );
						var d = ( (date.getDate()>9) ? date.getDate(): '0'+date.getDate() ) ;
						var fecha= y+'-'+m+'-'+d;
					//$('#usuario_fecha_creacion').val(fecha);
					
					if($('#confirmacion_password').val() != $('#password').val() )
					{alert('Por favor confirmacion no coincide con password '); return false;}
					
					
					//$('#usuario_usuario').val(sessionStorage['usuario']);
					 
					return $(this).form('validate');
				},
				success: function(result){
				
					//alert(result)
					
					try
					{	
						var result = eval('('+result+')');
						if (result.success)
						{	
							$('#w_usuario').window('close');		// close the dialog
							$('#dg_usuario').datagrid('reload');	// reload the user data
							
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
		
		function removeUsuario()
		{
			var row = $('#dg_usuario').datagrid('getSelected');
			if (row){
				$.messager.confirm('Confirm','esta seguro de que desea eliminarlo?',function(r){
					if (r)
					{
						//console.log(r);
						$.post('/bodega_cnt/app/usuario/scripts/remove_usuario.php',{id_usuario:row.id_usuario},function(result)
						{
						
							console.log(result)
							//alert(result)
							if (result.success)
							{
								$('#dg_usuario').datagrid('reload');	// reload the user data
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
		
		