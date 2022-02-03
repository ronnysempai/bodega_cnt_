var url;
		function newCategoria(){
			//$('#dlg').dialog('open').dialog('setTitle','Nueva Categoria');
			$('#w_categoria').window('open').dialog('setTitle','Nueva Categoria');
			$('#fm_categoria').form('clear');
			url = '/bodega_cnt/app/categoria/scripts/save_categoria.php';
		}
		function editCategoria(){
			var row = $('#dg_categorias').datagrid('getSelected');
			if (row){
				
				//$('#dlg').dialog('open').dialog('setTitle','Editar Categoria');
				$('#w_categoria').window('open').dialog('setTitle','Editar Categoria');
				$('#fm_categoria').form('load',row);
				url = '/bodega_cnt/app/categoria/scripts/update_categoria.php?id_categoria='+row.id_categoria;
			}
		}
		
		function saveCategoria(){
		
			$('#fm_categoria').form('submit',{
				url: url,
				onSubmit: function(){
					return $(this).form('validate');
				},
				success: function(result){
				
					console.log(result);
					var result = eval('('+result+')');
					if (result.success)
					{
						$('#w_categoria').dialog('close');		// close the dialog
						$('#dg_categorias').datagrid('reload');	// reload the user data
						
					}
					else 
					{
						$.messager.show({
							title: 'Error',
							msg: result.msg
						});
					}
				}
			});
		}
		function removeCategoria(){
			var row = $('#dg_categorias').datagrid('getSelected');
			if (row){
				$.messager.confirm('Confirm','Are you sure you want to remove this user?',function(r){
					if (r)
					{
					console.log(r);
						$.post('/bodega_cnt/app/categoria/scripts/remove_categoria.php',{id_categoria:row.id_categoria},function(result)
						{
						
							
							if (result.success)
							{
								$('#dg_categorias').datagrid('reload');	// reload the user data
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
		
		