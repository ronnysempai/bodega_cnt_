var url;
		
		function newUnidadMedida(){
			//$('#dlg').dialog('open').dialog('setTitle','Nueva unidad_medida');
				
			$('#w_unidad_medida').window('open').dialog('setTitle','Nueva Unidad Medida');
			$('#fm_unidad_medida').form('clear');
			url = '/bodega_cnt/app/unidad_medida/scripts/save_unidad_medida.php';
		}
		
		function editUnidadMedida(){
			var row = $('#dg_unidad_medida').datagrid('getSelected');
			if (row){
				
				//$('#dlg').dialog('open').dialog('setTitle','Editar unidad_medida');
				$('#w_unidad_medida').window('open').dialog('setTitle','Editar Unidad Medida');
				$('#fm_unidad_medida').form('load',row);
				url = '/bodega_cnt/app/unidad_medida/scripts/update_unidad_medida.php?id_unidad_medida='+row.id_unidad_medida;
			}
		}
		function saveUnidadMedida(){
			$('#fm_unidad_medida').form('submit',
			{
				url: url,
				onSubmit: function(){
					
					$('#unidad_medida_usuario').val(sessionStorage['usuario'])
					return $(this).form('validate');
				},
				success: function(result){
					//alert(result)
					
					try
					{	
						var result = eval('('+result+')');
						if (result.success)
						{	
							$('#w_unidad_medida').window('close');		// close the dialog
							$('#dg_unidad_medida').datagrid('reload');	// reload the user data
							
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
		function removeUnidadMedida(){
			var row = $('#dg_unidad_medida').datagrid('getSelected');
			if (row){
				$.messager.confirm('Confirm','ests seguro de que dese eliminarlo?',function(r){
					if (r)
					{
						//console.log(r);
						$.post('/bodega_cnt/app/unidad_medida/scripts/remove_unidad_medida.php',{id_unidad_medida:row.id_unidad_medida},function(result)
						{
						
							console.log(result)
							//alert(result)
							if (result.success)
							{
								$('#dg_unidad_medida').datagrid('reload');	// reload the user data
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
		
		