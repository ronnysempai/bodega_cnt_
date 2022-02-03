<?php class Documento_guia { 

    /***
     * DB Fields: id_documento_guia
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     **/
    var $id_documento_guia;

    /***
     * DB Fields: tipo_documento
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     **/
    var $tipo_documento;
	
	/***
     * DB Fields: codigo_sap
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     **/
	var $codigo_sap;
	
    /***
     * DB Fields: fuente
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     **/
    var $fuente;
	///
	var $nombre;
    /***
     * DB Fields: fecha_creacion
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     **/
    var $fecha_creacion;

    /***
     * DB Fields: usuario_creacion
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     **/
    var $usuario_creacion;
	
	var $id_tipo_documento_guia;

//--------------- GET METHODS ----------------------------- //
    /***
     * Get value for field: id_documento_guia
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @result id_documento_guia
     **/
    function get_id_documento_guia( ) {
        // returns the value of id_documento_guia
        return $this->id_documento_guia;
    }


    /***
     * Get value for field: tipo_documento
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @result tipo_documento
     **/
    function get_tipo_documento( ) {
        // returns the value of tipo_documento
        return $this->tipo_documento;
    }
	
	/***
     * Get value for field: codigo_sap
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @result tipo_documento
     **/
    function get_codigo_sap( ) {
        // returns the value of tipo_documento
        return $this->codigo_sap;
    }

    /***
     * Get value for field: fuente
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @result fuente
     **/
    function get_fuente( ) {
        // returns the value of fuente
        return $this->fuente;
    }
	
	//////
	function get_nombre( ) {
        // returns the value of fuente
        return $this->nombre;
    }


    /***
     * Get value for field: fecha_creacion
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @result fecha_creacion
     **/
    function get_fecha_creacion( ) {
        // returns the value of fecha_creacion
        return $this->fecha_creacion;
    }


    /***
     * Get value for field: usuario_creacion
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @result usuario_creacion
     **/
    function get_usuario_creacion( ) {
        // returns the value of usuario_creacion
        return $this->usuario_creacion;
    }


//--------------- SET METHODS ----------------------------- //
    /***
     * Set value for field: id_documento_guia
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param id_documento_guia
     * @result void
     **/
    function set_id_documento_guia( $id_documento_guia ) {
        // sets the value of id_documento_guia
        $this->id_documento_guia = $id_documento_guia;
    }

    /***
     * Set value for field: tipo_documento
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param tipo_documento
     * @result void
     **/
    function set_tipo_documento( $tipo_documento ) {
        // sets the value of tipo_documento
        $this->tipo_documento = $tipo_documento;
    }
	
	
	/***
     * Set value for field: id_tipo_documento
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param tipo_documento
     * @result void
     **/
    function set_id_tipo_documento( $id_tipo_documento_guia ) {
        // sets the value of tipo_documento
        $this->id_tipo_documento_guia = $id_tipo_documento_guia;
    }
	
	/***
     * Set value for field: codigo_sap
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param tipo_documento
     * @result void
     **/
    function set_codigo_sap( $codigo_sap ) 
	{
        // sets the value of tipo_documento
        $this->codigo_sap = $codigo_sap;
    }
	
    /***
     * Set value for field: fuente
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param fuente
     * @result void
     **/
    function set_fuente( $fuente ) {
        // sets the value of fuente
        $this->fuente = $fuente;
    }

	/////
	
	 function set_nombre( $nombre ) {
        // sets the value of fuente
        $this->nombre = $nombre;
    }

    /***
     * Set value for field: fecha_creacion
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param fecha_creacion
     * @result void
     **/
    function set_fecha_creacion( $fecha_creacion ) {
        // sets the value of fecha_creacion
        $this->fecha_creacion = $fecha_creacion;
    }

    /***
     * Set value for field: usuario_creacion
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param usuario_creacion
     * @result void
     **/
    function set_usuario_creacion( $usuario_creacion ) {
        // sets the value of usuario_creacion
        $this->usuario_creacion = $usuario_creacion;
    }

//--------------- CRUD METHODS ----------------------------- //
    /***
     * Create a new Record: documento_guia
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param id_documento_guia
     * @param tipo_documento
     * @param fuente
     * @param fecha_creacion
     * @param usuario_creacion
     * @result void
     **/
    function createnew_documento_guia( $id_documento_guia, $tipo_documento,$codigo_sap, $fuente,$nombre,$fecha_creacion,$usuario_creacion,$id_tipo_documento_guia ) {

        // items to be inserted in the database 
        $_obj = array($id_documento_guia,
                      $tipo_documento,$codigo_sap,
                      $fuente,$nombre,
                      $fecha_creacion,
                      $usuario_creacion,$id_tipo_documento_guia,'0'); 
		
        // database object connection
        $dbConn = $GLOBALS['dbConn'];

        // perform insert in the database
       return $dbConn->insert("documento_guia", $_obj);
    }

    /***
     * Retrived an existing record: documento_guia
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param <br />
<b>Notice</b>:  Undefined variable: __f in <b>C:\xampp\htdocs\cg-2006-05-09\index.setup.php</b> on line <b>146</b><br />

     * @result new Documento_guia
     **/
    function get_documento_guia( $id_documento_guia) {

        // retrive the data
        $dbConn = $GLOBALS['dbConn'];

        // retrieved value in the database
        $_resultSet = $dbConn->doQuery("SELECT * FROM documento_guia WHERE  __f = '$'");

        $__documento_guiaObj = new documento_guia();
        // return the retrived from the database

        // create a new object
        $__obj = new Documento_guia();
        $__obj->set_id_documento_guia($_resultSet[0]['id_documento_guia']);
        $__obj->set_tipo_documento($_resultSet[0]['tipo_documento']);
        $__obj->set_fuente($_resultSet[0]['fuente']);
        $__obj->set_fecha_creacion($_resultSet[0]['fecha_creacion']);
        $__obj->set_usuario_creacion($_resultSet[0]['usuario_creacion']);


        return $__obj;
    }

    /***
     * Update an existing record: documento_guia
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param <br />
<b>Notice</b>:  Undefined variable: __f in <b>C:\xampp\htdocs\cg-2006-05-09\index.setup.php</b> on line <b>146</b><br />

     * @param itemsToBeUpdated = array()
     * @result void
     **/
    function update_documento_guia( $id_documento_guia ) {

         // get database connection
         $dbConn = $GLOBALS['dbConn'];
		
		
		$itemsToBeUpdated = array();
		$arr_atributos=get_object_vars($this);
				
			foreach ($arr_atributos as $atributo => $v) 
					$itemsToBeUpdated[$atributo]=$v;
		
         // performs update in the database
         foreach($itemsToBeUpdated as $_fName => $_fVal) { 
               $dbConn->addValuePair($_fName, $_fVal);
         }

         // perform update operation
        return $dbConn->update("documento_guia", "id_documento_guia= '$id_documento_guia'");
    }

    /***
     * Delete an existing record: documento_guia
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param <br />
<b>Notice</b>:  Undefined variable: __f in <b>C:\xampp\htdocs\cg-2006-05-09\index.setup.php</b> on line <b>146</b><br />

     * @result void
     **/
    function delete_documento_guia( $id_documento_guia)
	{

         // get database connection
         $dbConn = $GLOBALS['dbConn'];

         // performs deletion of data
         $dbConn->delete("documento_guia", "<br />
<b>Notice</b>:  Undefined variable: __f in <b>C:\xampp\htdocs\cg-2006-05-09\index.setup.php</b> on line <b>146</b><br />
 = '$<br />
<b>Notice</b>:  Undefined variable: __f in <b>C:\xampp\htdocs\cg-2006-05-09\index.setup.php</b> on line <b>146</b><br />
'");
    }

    /***
     * Retrived list of objects base on a given parameters: documento_guia
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param conditionalStatement = ''
     * @result collection of objects: Documento_guia
     **/
    function list_documento_guia( $conditionalStatement = '' ) {

         $dbConn = $GLOBALS['dbConn'];
         // check if there is a given parameter list
         if(!empty($conditionalStatement)) { 
              $sqlStatement = "SELECT * FROM documento_guia WHERE $conditionalStatement"; 
         } else { 
              $sqlStatement = "SELECT * FROM documento_guia";
         }

         // retrieve the values base on the query result
         $__resObj = $dbConn->doQuery($sqlStatement);

         $__collectionOfObjects = array();
         foreach($__resObj as $__rs) { 
            $__newObj = new Documento_guia();

            $__newObj->set_id_documento_guia($__rs['id_documento_guia']);
            $__newObj->set_tipo_documento($__rs['tipo_documento']);
            $__newObj->set_fuente($__rs['fuente']);
            $__newObj->set_fecha_creacion($__rs['fecha_creacion']);
            $__newObj->set_usuario_creacion($__rs['usuario_creacion']);

            // add object to collection 
            array_push($__collectionOfObjects, $__newObj);
         }

         // return collection of objects
         return $__collectionOfObjects;
    }

} ?>