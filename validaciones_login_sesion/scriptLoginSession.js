		var SERVIDOR_REMOTO=''; 	
		var SERVIDOR_LOCAL='127.0.0.1';	
		
		
		$("#iddiv_fecha").jTime();

		$(document).on("ready", function(){
			//alert("avanza");	
			//document.getElementByIdgetElementById('idtxt_usuario').focus();
			$("#idtxt_usuario").keypress(function(e){
				if(e.which == 13){
					ingresar();
				}
			});
			$("#idtxt_clave").keypress(function(e){
				if(e.which == 13){
					ingresar();
				}
			});
		});
		
		var INICIADO=false;
		
		function cargaHabilitaDeshabilita(habilitado)
		{
			if(!habilitado)
			{
				$('#popup').fadeIn('slow');
				$('#popupIngresar').fadeIn('slow');
				
			}
			else
			{	
				$('#popup').fadeOut('slow');
				//$('#popup').css('display','none');
				$('#popupIngresar').fadeOut('slow');
			
			}
			 
		}

		function verificaSession()
		{
			
					
			
			 $.ajax({
				url: "/bodega_cnt/php/session.php",
				cache: false,
				type: "POST",
				//dataType: 'script',
				success: function(data){
				
				
					if(sessionStorage['usuario']!=undefined)
					{ 	
						console.log(sessionStorage['usuario']);
						$('#iddiv_usuario').html( (sessionStorage['usuario']))
						$('div[data-role="footer"] div:nth-child(1) div:nth-child(3) :first-child div:nth-child(3)').html( (sessionStorage['usuario']));
						cargaHabilitaDeshabilita(true);
						INICIADO=true;
						
					}
					else
					{	
						cargaHabilitaDeshabilita(false)
						INICIADO=false;
					}
			
					
				},
				error: function(even)
				{
					console.log(even)	
				}
			}); 
			
			
		}
		
		function cerrarSession(){
			console.log("Entro por aqui");
		
			//recibeUsuarios.emit("recibeUsuario", {"usuario":$("#idtxt_usuario").val(),"estado":"desconectado"});
			sessionStorage.clear();
			
			verificaSession();	
		}
		
		$('#iddiv_salir').click(function(){
			cerrarSession();
		});		
		$('#idbtn_Ingresar_Aceptar').click(function(){
			ingresar();
		});
		
		var recibeUsuarios = null;

		function ingresar(){
			
			var tags="<div id='id_indicador_sin'><img Style='height:40px;' src='/citacion/images/Green-002-loading.gif'  title='indicador' /> <span id='texto_indicador'></span>  </div>";
			tags+='Autentificando';
			
				$('#w').window('open');
							 
			$.ajax({
				url: "php/session.php",
				cache: false,
				type: "POST",
				data: "username=" + $("#idtxt_usuario").val() + "&password=" + $("#idtxt_clave").val(),
				success: function(data)
				{
								//alert(data)
								try
								{	console.log(data);
								  var obj=JSON.parse( data)
								  if(obj.usuario!=undefined )
									if(obj.usuario == '0')
										{ $.messager.alert('Autentificacion','Usuario erroneo');  
												$('#w').window('close');
											return;
										}
									else
										{ if(obj.perfil!='administrador')$('.pefil_administrador').fadeOut('fast');
											else 
											$('.pefil_administrador').fadeIn('fast');
										}								
								}
								catch (err)
								{
								  // Do something about the exception here
								  console.log(err.toString())
								  return;
								}
								
								$('#iddiv_usuario').html(obj.usuario);
								$('#popup').fadeOut('slow');
								$('#popupIngresar').fadeOut('fast');
								INICIADO=true;
								
								//alert($('#iddiv_usuario').html())
								sessionStorage['usuario']=obj.usuario;
								sessionStorage['perfil']=obj.perfil;
								$('#w').window('close');
				}
			});
		}

		verificaSession();
		consume_alert();
			var _alert=null;
			function consume_alert(){
				if ( _alert)
				{
					return;
				}
				_alert = window.alert;
				window.alert = function(message)
				{
					$.messager.alert('Alert',message,'info');
					//$.messager.show({title: 'Alert',msg: message});
				}
			}
		
		if(localStorage['servidor']!=undefined)
		{
			SERVIDOR_REMOTO=localStorage['servidor'];
		}

		var mostroFotoRobado=false;
	
