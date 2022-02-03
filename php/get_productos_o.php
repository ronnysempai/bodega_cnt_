<?php
	
	
	include '../dbObject/core.dbfunctions.php';
	include '../clases/antena.class.php';
	include '../dbObject/update_object.php';
	
	$obj=new Antena();
	
		$obj->createnew_antena( 0, 1, 'antena 2', '1', '2013-06-12' );
	
	exit;
	$result = array();

	include 'conn.php';
	
	//$rs = mysql_query("select count(*) from usuario");
	$rs = mysql_query("select count(*) from categoria ");
	
	try 
	{
    $row = mysql_fetch_row($rs);
	}
	catch (ErrorException $e) 
	{
			echo '';
	}
	$result["total"] = $row[0];
	//$rs = mysql_query("select * from usuario limit $offset,$rows");
	$rs = mysql_query("select * from categoria ");
	
	$items = array();
		try 
		{
			while($row = mysql_fetch_object($rs))
			{
				array_push($items, $row);
				
			}
			$result["rows"] = $items;
		}
		catch (ErrorException $e) 
		{
			echo '';
		}
	

	//echo json_encode($result);

?>