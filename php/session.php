<?php
	//session_start();
	
	

	include 'conn.php';



	//if(!isset($_SESSION['username']))
	//{
		
		if(!empty($_POST['username']))
		{
			$usuario=trim($_POST['username']);
			$password=trim($_POST['password']);
			
			$query = "SELECT usuario,password,perfil FROM usuario where usuario='".$usuario."'and password='".$password."' ";
			$array = array();
				
					$i = 0;
				//echo $query;	
					
					$rs = mysql_query($query);
		
						try 
						{
							while($row = mysql_fetch_object($rs))
							{	
								echo json_encode($row);
								//$_SESSION['username']=$_POST['username'];
									exit;
							}
							
						}
						catch (ErrorException $e) 
						{
							echo '';
						}
									
					echo '{"usuario": "0"}'; exit;
				
				
				
			
		}
		else
			echo '{"usuario": "0"}'; exit;
	
?>
