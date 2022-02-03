var url;
		function newRecinto(){
			//$('#dlg').dialog('open').dialog('setTitle','Nueva recinto');
			$('#w_recinto').window('open').dialog('setTitle','Nueva recinto');
			$('#fm_recinto').form('clear');
			url = '/bodega_cnt/app/recinto/scripts/save_recinto.php';
		}
		function editRecinto(){
			var row = $('#dg_recintos').datagrid('getSelected');
			if (row){
				
				//$('#dlg').dialog('open').dialog('setTitle','Editar recinto');
				$('#w_recinto').window('open').dialog('setTitle','Editar recinto');
				$('#fm_recinto').form('load',row);
				url = '/bodega_cnt/app/recinto/scripts/update_recinto.php?id_recinto='+row.id_recinto;
			}
		}
		function saveRecinto(){
			$('#fm_recinto').form('submit',
			{
				url: url,
				onSubmit: function(){
					
					$('#recinto_usuario').val(sessionStorage['usuario'])
					return $(this).form('validate');
				},
				success: function(result){
					//alert(result)
					
					try
					{	
						var result = eval('('+result+')');
						if (result.success)
						{	
							$('#w_recinto').window('close');		// close the dialog
							$('#dg_recintos').datagrid('reload');	// reload the user data
							
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
		function removeRecinto(){
			var row = $('#dg_recintos').datagrid('getSelected');
			if (row){
				$.messager.confirm('Confirm','Esta seguaro de eliminar este recinto?',function(r){
					if (r)
					{
						//console.log(r);
						$.post('/bodega_cnt/app/recinto/scripts/remove_recinto.php',{id_recinto:row.id_recinto},function(result)
						{
						
							console.log(JSON.stringify(result))
							
							if (result.success)
							{ 
								$('#dg_recintos').datagrid('reload');	// reload the user data
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
		
		