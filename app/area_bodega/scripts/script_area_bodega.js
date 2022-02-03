var url;
		
		function newAreaBodega()
		{
			//$('#dlg_subcategoria').window('open').dialog('setTitle','Nueva area_bodega');
				
			$('#w_area_bodega').window('open').dialog('setTitle','Nuevo Area Bodega');
			$('#fm_area_bodega').form('clear');
			url = '/bodega_cnt/app/area_bodega/scripts/save_area_bodega.php';
			var gBodega = $('#area_bodega_id_bodega').combogrid('grid');	// get datagrid object
			gBodega.datagrid('reload'); 
		}
		
		function editAreaBodega()
		{
			var row = $('#dg_area_bodega').datagrid('getSelected');
			var indice=$('#dg_area_bodega').datagrid('getRowIndex',row)
			
			if (row)
			{
				$('#w_area_bodega').window('open').dialog('setTitle','Editar Area Bodega');
				$('#fm_area_bodega').form('load',row);
				
						var gBodega = $('#area_bodega_id_bodega').combogrid('grid');	// get datagrid object
						var rowsBodega=gBodega.datagrid('getRows')
						for(var ir=0;ir<rowsBodega.length;ir++)
							if(rowsBodega[ir].id_bodega==row.id_bodega)
								gBodega.datagrid('selectRow',ir);
				url = '/bodega_cnt/app/area_bodega/scripts/update_area_bodega.php';
				
			}
		}
		
		function saveAreaBodega()
		{
			$('#fm_area_bodega').form('submit',
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
						
					
					var gBodega = $('#area_bodega_id_bodega').combogrid('grid');	// get datagrid object
					var rBodega = gBodega.datagrid('getSelected');	// get the selected row
					$('#area_bodega_id_bodega_oculto').val(rBodega.id_bodega);
					
					
					return $(this).form('validate');
				},
				success: function(result){
					//alert(result)
					
					try
					{	
						var result = eval('('+result+')');
						if (result.success)
						{	
							$('#w_area_bodega').window('close');		// close the dialog
							$('#dg_area_bodega').datagrid('reload');	// reload the user data
							
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
		function removeAreaBodega()
		{
			var row = $('#dg_area_bodega').datagrid('getSelected');
			if (row){
				$.messager.confirm('Confirm','esta seguro de que desea eliminarlo?',function(r){
					if (r)
					{
						//console.log(r);
						$.post('/bodega_cnt/app/area_bodega/scripts/remove_area_bodega.php',{id_area_bodega:row.id_area_bodega},function(result)
						{
						
							console.log(result)
							alert( JSON.stringify( result))
							if (result.success)
							{
								$('#dg_area_bodega').datagrid('reload');	// reload the user data
							}
							else 
							{ alert(result.msg);
								/*$.messager.show({	// show error message
									title: 'Error',
									msg: result.msg
								});
								*/
							}
						},'json');
					}
				});
			}
		}
		
		
		$(function(){  
            
			$('#area_bodega_id_bodega').combogrid({  
					panelWidth: 500,
					idField: 'id_bodega',
					textField: 'nombre_bodega',
					url: 'bodega/scripts/get_bodega.php',
					columns: [[
						{field:'id_recinto',title:'id',hidden:true,width:80},
						{field:'nombre_bodega',title:'Nombre Bodega',width:120},
						{field:'descripcion_bodega',title:'Decripcion',width:80,align:'right'},
						{field:'tipo_bodega',title:'Tipo',width:80,align:'right'},
						{field:'fecha_creacion',title:'Fecha de Creacion',width:80,align:'right'},
						{field:'nombre_recinto',title:'Recinto',width:80,align:'right'}
						
					]],
					fitColumns: true 
                
            });  
        }); 
		
		
		