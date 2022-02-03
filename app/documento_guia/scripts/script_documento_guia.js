var url;
		
		function newDocumentoGuia(){
			//$('#dlg_subcategoria').window('open').dialog('setTitle','Nueva documento_guia');
				
			$('#w_documento_guia').window('open').dialog('setTitle','Nuevo Documento Guia');
			$('#fm_documento_guia').form('clear');
			
			$('#documento_guia_id_tipo_documento_guia').combobox('setValue',1);
			url = '/bodega_cnt/app/documento_guia/scripts/save_documento_guia.php';
		}
		
		function editDocumentoGuia(){
			var row = $('#dg_documento_guia').datagrid('getSelected');
			var indice=$('#dg_documento_guia').datagrid('getRowIndex',row)
			if (row){
				$('#w_documento_guia').window('open').dialog('setTitle','Editar Documento Guia');
				$('#documento_guia_id_tipo_documento_guia').combobox('setValue',row.id_tipo_documento_guia);
				$('#fm_documento_guia').form('load',row);
				url = '/bodega_cnt/app/documento_guia/scripts/update_documento_guia.php';
				
			}
		}
		function saveDocumentoGuia(){
			$('#fm_documento_guia').form('submit',
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
					$('#documento_guia_fecha_creacion').val(fecha);
					$('#documento_guia_usuario').val(sessionStorage['usuario']);
					
					var id_tipo_documento = $('#documento_guia_id_tipo_documento_guia').combobox('getValue');	
					if(id_tipo_documento == undefined || id_tipo_documento == null || id_tipo_documento=='')
					{ alert('Por favor seleccione el tipo de documento guia'); return false; }
					//alert(id_tipo_documento)
					 
					return $(this).form('validate');
				},
				success: function(result){
					//alert(result)
					
					try
					{	console.log(result);
						
						var result = eval('('+result+')');
						if (result.success)
						{	
							$('#w_documento_guia').window('close');		// close the dialog
							$('#dg_documento_guia').datagrid('reload');	// reload the user data
							
						}
						else 
						{	if(result.msg)
							if(result.msg=='existe')
							{ $.messager.alert('Datos Erroneos','Ya existe documento guia con este codigo sap.');  
								return;	}
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
		function removeDocumentoGuia(){
			var row = $('#dg_documento_guia').datagrid('getSelected');
			if (row){
				$.messager.confirm('Confirm','esta seguro de que desea eliminarlo?',function(r){
					if (r)
					{
						//console.log(r);
						$.post('/bodega_cnt/app/documento_guia/scripts/remove_documento_guia.php',{id_documento_guia:row.id_documento_guia},function(result)
						{
						
							console.log(result)
							//alert(result)
							if (result.success)
							{
								$('#dg_documento_guia').datagrid('reload');	// reload the user data
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
		
		var indicesDocumentoGuia=0;
		$(function(){  
            $('#dg_documento_guia').datagrid({  
                view: detailview,  
                detailFormatter:function(index,row){  
                    return '<div style="padding:2px"><table id="ddv-' + index + '"></table></div>';  
                },  
                onExpandRow: function(index,row){  
				
                    $('#ddv-'+index).datagrid({  
                        url:'documento_guia/scripts/get_detalle_guia.php?id_documento_guia='+row.id_documento_guia,  
                        fitColumns:true,  
                        singleSelect:true,  
                        rownumbers:true,  
                        loadMsg:'',  
                        height:'auto',
						toolbar:[{
									iconCls: 'icon-add',text:'Agregar',
									handler: function(){newDetalleGuia(index)}
								},'-',
								{
								iconCls: 'icon-edit',text:'Editar',
								handler: function(){editDetalleGuia('#ddv-'+index)} 
								},'-',
								{	iconCls: 'icon-remove',text:'Eliminar',
									handler: function(){removeDetalleGuia('#ddv-'+index)} 
								}
								],	
                        columns:[[ 
							{field:'id_detalle_guia',title:'id_detalle_guia',hidden:true,width:100,align:'right'},
							{field:'id_producto',title:'Producto',hidden:true,width:100,align:'right'},
							{field:'nombre_producto',title:'Producto',width:100,align:'right'},
							{field:'precio_promedio',title:'Precio',width:100,align:'right'},
                            {field:'cantidad',title:'Cantidad',width:100,align:'right'},  
                            {field:'fecha_creacion',title:'Fecha Creacion',width:100,align:'right'}
                        ]],  
                        onResize:function(){  
                            $('#dg_documento_guia').datagrid('fixDetailRowHeight',index);  
                        },  
                        onLoadSuccess:function(data){  
							
                            setTimeout(function(){  
                                $('#dg_documento_guia').datagrid('fixDetailRowHeight',index);  
                            },0);  
                        }  
                    });  
                    
					
					$('#dg_documento_guia').datagrid('fixDetailRowHeight',index); 
					
                }  	
            });  
        });  
		
		function newDetalleGuia(indice_documento_guia){
		
			var objDGDocumento=$('#dg_documento_guia').datagrid('getRows');
			//var objDGDetalle=$('#ddv-'+indice_documento_guia).datagrid('getRows');
				
					for (p=0;p<objDGDocumento.length ;p++)
						if(p== indice_documento_guia )
						{	
								var id_documento_guia = objDGDocumento[p].id_documento_guia;
								indiceDGDocumento=p;
								break;
						}
				
				
			$('#w_detalle_guia').window('open').dialog('setTitle','Nuevo Detalle Guia');
			$('#fm_detalle_guia').form('clear');
			$('#detalle_guia_id_documento_guia').val(id_documento_guia);
			url = '/bodega_cnt/app/documento_guia/scripts/save_detalle_guia.php';
		}
		
		var urlDetalleGuia="";
		var indiceDGDocumento=0;
		function editDetalleGuia(dg_documento_guia)
		{
			var row = $(dg_documento_guia).datagrid('getSelected');
			var indice=$(dg_documento_guia).datagrid('getRowIndex',row);
			
			if (row)
			{
				
				var objDG=$('#dg_busqueda_producto').datagrid('getRows');
				//	alert( JSON.stringify(objDG))
					for (p=0;p<objDG.length ;p++)
						if(objDG[p].id_producto == row.id_producto )
						{	
								$('#id_detalle_guia').val(row.id_detalle_guia);
								$('#detalle_guia_id_documento_guia').val(row.id_documento_guia);
								$('#detalle_guia_id_producto').val(row.id_producto);
								$('#dg_busqueda_producto').datagrid('selectRow',p);
						}
				
				$('#w_detalle_guia').window('open').dialog('setTitle','Editar Documento Guia');
				$('#fm_detalle_guia').form('load',row);
				url = '/bodega_cnt/app/documento_guia/scripts/update_detalle_guia.php';
				
			}
		}
		
		function saveDetalleGuia(){
			$('#fm_detalle_guia').form('submit',
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
						$('#detalle_guia_fecha_creacion').val(fecha);
						$('#detalle_guia_usuario').val(sessionStorage['usuario']);
						
						if( $('#detalle_guia_id_producto').val() == '' || $('#detalle_guia_id_producto').val() == undefined )
						{  
							$.messager.alert('Datos Erroneos','Por favor seleccione un producto');  
							return false;
						}
						 
						if (! validaEnteroPositivo($('#cantidad').val()) || ($('#cantidad').val()*1 <=0 ) )
						 {  
							$.messager.alert('Datos Erroneos','Por favor ingrese una cantidad valida');  
							return false;
						 }
					return  true;//$(this).form('validate');
				},
				success: function(result)
				{
					//alert(result)
					
					try
					{	
						var result = eval('('+result+')');
						if (result.success)
						{	
							$('#w_detalle_guia').window('close');		// close the dialog
							//$('#dg__guia').datagrid('reload');	// reload the user data
							$('#ddv-'+indiceDGDocumento).datagrid('reload');
							indiceDGDocumento=0;
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
		
		function mostrarProductoParaDetalle()
		{
			var row=$('#dg_busqueda_producto').datagrid('getSelected');
			//console.log( row.id_producto ); 
			$('#nombre_producto').val( row.nombre_producto);
			$('#precio_promedio').val(row.precio_promedio);
			$('#clave_producto').val(row.clave_producto);
			$('#detalle_guia_id_producto').val(row.id_producto);

		}
		
		$('#dg_busqueda_producto').datagrid({
			onClickRow: function(index,field,value){
				mostrarProductoParaDetalle();
			}
		});
		
		function validaEnteroPositivo(numero)
		{
					var patron = /^\d*$/;                          //Expresión regular para aceptar solo números enteros
				                               //Variable a analizar
										   
				if ( !patron .test(numero)) {           
				
				return false;

				}else {
					
				return true;

				}
		}
		
		function removeDetalleGuia(dg_detalle_guia)
		{
			var row = $(dg_detalle_guia).datagrid('getSelected');
			if (row){
				$.messager.confirm('Confirm','esta seguro de que desea eliminarlo?',function(r){
					if (r)
					{
						//console.log(r);
						$.post('/bodega_cnt/app/documento_guia/scripts/remove_detalle_guia.php',{id_detalle_guia:row.id_detalle_guia},function(result)
						{
						
							console.log(result)
							//alert(result)
							if (result.success)
							{
								 $(dg_detalle_guia).datagrid('reload');	// reload the user data
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
		
		
		function filtraCodigoSap()
		{
			$.post("documento_guia/scripts/get_documento_guia.php",{filtro: $('#busqueda_codigo_sap').val()},function(data){
						console.log(data);
						$('#dg_documento_guia').datagrid('loadData', data.rows);
					},'json');
		}
		$('#btn_filtro_busqueda_codigo_sap').click(function(){
			filtraCodigoSap();
		});
		$('#busqueda_codigo_sap').keyup(function(e){
			if(e.keyCode == 13)
			{
				filtraCodigoSap();
			}
		});