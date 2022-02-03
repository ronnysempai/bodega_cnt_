var url;
		function newProducto(){
			//$('#dlg').dialog('open').dialog('setTitle','Nuevo producto');
			$('#w').window('open').window('setTitle','Nuevo producto');
			$('#fm').form('clear');
			$('#id_categoria').val(getSelected());
			
			url = '/bodega_cnt/script_cruds/save_producto.php';
		
		}
		function editProducto(){
			var row = $('#dg').datagrid('getSelected');
			if (row){
				//$('#dlg').dialog('open').dialog('setTitle','Editar Producto');
				$('#w').window('open').window('setTitle','Editar Producto');
				$('#id_subcategoria').val(row.id_subcategoria);
				$('#fm').form('load',row);
				$('#cod_unidad_medida').combobox('setValue',row.cod_unidad_medida);
					$("#fm").find(':input').each(function() {
						var elemento= this;
						
						//alert("elemento.id="+ elemento.id + ", elemento.value=" + elemento.value); 
					});
				url = '/bodega_cnt/script_cruds/update_producto.php?id_producto='+row.id_producto;
			}
		}
		function saveProducto(){
			var t = $('#id_categoria').combotree('tree');	// get the tree object
			var n = t.tree('getSelected');		// get selected node
			var cb=$('#cod_unidad_medida').combobox('getValue')
			if(n == null || n==undefined)
			{$.messager.alert('Datos Erroneos','Por favor seleccione la categoria.');
			return;}
			if(!(cb != '' && cb !=null && cb != undefined))
			{$.messager.alert('Datos Erroneos','Por favor seleccione unidad de medida.');
			return;}
			
			$('#fm').form('submit',{
				url: url,
				onSubmit: function(){
				
						
							var atributo=JSON.parse(n.attributes);
							var es_subcategorias=atributo.subcategoria;
							
							if( es_subcategorias=='1')
								$('#id_subcategoria').val(n.id)  
							else 
								$('#id_subcategoria').val('0');
							$('#usuario').val(sessionStorage['usuario']);	
							return $(this).form('validate');

				},
				success: function(result){
				console.log(result);
					var result = eval('('+result+')');
					if (result.success){
						//$('#dlg').dialog('close');		// close the dialog
						$('#w').window('close');
						$('#dg').datagrid('reload');	// reload the user data
					} else {
						$.messager.show({
							title: 'Error',
							msg: result.msg
						});
					}
				}
			});
		}
		
		function removeProducto(){
			var row = $('#dg').datagrid('getSelected');
			if (row){
				$.messager.confirm('Confirm','Esta seguro de querer eliminar este product?',function(r){
					if (r){
						$.post('script_cruds/remove_producto.php',{id_producto:row.id_producto},function(result){
							if (result.success){
								$('#dg').datagrid('reload');	// reload the user data
							} else {
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
		
		$(document).on("ready", function(){
			//alert("avanza");	
			//document.getElementByIdgetElementById('idtxt_usuario').focus();
			$("#stock_actual").keypress(function(e){
				
				
					 var p=$("#stock_actual").val().indexOf('.');
					 var c=$("#stock_actual").val().indexOf(',');
					 if(p!=-1 ||  c!=-1)
						alert('Dato erroneo');
				
			});
			
			$("#stock_minimo").keypress(function(e){
				
				
					 var p=$("#stock_minimo").val().indexOf('.');
					 var c=$("#stock_minimo").val().indexOf(',');
					 if(p!=-1 ||  c!=-1)
						alert('Dato erroneo');
				
			});
			
			$("#stock_inicial").keypress(function(e){
				
				
					 var p=$("#stock_inicial").val().indexOf('.');
					 var c=$("#stock_inicial").val().indexOf(',');
					 if(p!=-1 ||  c!=-1)
						alert('Dato erroneo');
				
			});
			
		});
		
		function exportarProducto()
		{
			var tagTable= $('#dg').html();
			
			var node = $('#treeboxbox_tree').tree('getSelected')
			
			
					var esSubcategoria=0;
					var texto_nodo='?';
					
					try
					{
						var id_nodo=node.id;
						texto_nodo=node.text;
						console.log( JSON.parse(node.attributes));	
						var atributo=JSON.parse(node.attributes);
						esSubcategoria=atributo.subcategoria;
					}
					catch(e)
					{
						id_nodo=-1;
					}
					
					
					var inputs = $(".datagrid-btable").html	();
					var url = 'php/exportar_productos.php?filtro='+id_nodo+'&es_subcategoria='+esSubcategoria+'&texto_nodo='+texto_nodo;
					location.href = url;
					
			
		}
		
		$(function(){  
            
			$('#cod_unidad_medida').combobox({  
					url:'app/unidad_medida/scripts/get_unidad_medida.php?combo=1',
															valueField:'id',
															textField:'text',
															panelHeight:'auto'
                
            });  
        });