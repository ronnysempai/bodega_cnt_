<?php 
	
	

class Antena { 

    /***
     * DB Fields: id_antena
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     **/
    var $id_antena;

    /***
     * DB Fields: id_dispositivo
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     **/
    var $id_dispositivo;

    /***
     * DB Fields: descripcion
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     **/
    var $descripcion;

    /***
     * DB Fields: sentido
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     **/
    var $sentido;

    /***
     * DB Fields: fecha_creacion
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     **/
    var $fecha_creacion;
	
	

//--------------- GET METHODS ----------------------------- //
    /***
     * Get value for field: id_antena
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @result id_antena
     **/
    function get_id_antena( ) {
        // returns the value of id_antena
        return $this->id_antena;
    }


    /***
     * Get value for field: id_dispositivo
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @result id_dispositivo
     **/
    function get_id_dispositivo( ) {
        // returns the value of id_dispositivo
        return $this->id_dispositivo;
    }


    /***
     * Get value for field: descripcion
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @result descripcion
     **/
    function get_descripcion( ) {
        // returns the value of descripcion
        return $this->descripcion;
    }


    /***
     * Get value for field: sentido
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @result sentido
     **/
    function get_sentido( ) {
        // returns the value of sentido
        return $this->sentido;
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


//--------------- SET METHODS ----------------------------- //
    /***
     * Set value for field: id_antena
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param id_antena
     * @result void
     **/
    function set_id_antena( $id_antena ) {
        // sets the value of id_antena
        $this->id_antena = $id_antena;
    }

    /***
     * Set value for field: id_dispositivo
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param id_dispositivo
     * @result void
     **/
    function set_id_dispositivo( $id_dispositivo ) {
        // sets the value of id_dispositivo
        $this->id_dispositivo = $id_dispositivo;
    }

    /***
     * Set value for field: descripcion
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param descripcion
     * @result void
     **/
    function set_descripcion( $descripcion ) {
        // sets the value of descripcion
        $this->descripcion = $descripcion;
    }

    /***
     * Set value for field: sentido
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param sentido
     * @result void
     **/
    function set_sentido( $sentido ) {
        // sets the value of sentido
        $this->sentido = $sentido;
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

//--------------- CRUD METHODS ----------------------------- //
    /***
     * Create a new Record: antena
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param id_antena
     * @param id_dispositivo
     * @param descripcion
     * @param sentido
     * @param fecha_creacion
     * @result void
     **/
    function createnew_antena( $id_antena, $id_dispositivo, $descripcion, $sentido, $fecha_creacion ) {

        // items to be inserted in the database 
        $_obj = array($id_antena,
                      $id_dispositivo,
                      $descripcion,
                      $sentido,
                      $fecha_creacion,'0'); 
			
        // database object connection
		/*$dbConn = new DbConnection();
		$dbConn->useManualDefinition('localhost', 'bodegas_cnt', 'root', 'root');
        $dbConn->doConnection(); //$GLOBALS['dbConn'];
		*/
		$dbConn=$GLOBALS['dbConn'];
        // perform insert in the database
       return $dbConn->insert("antena", $_obj);
    }

    /***
     * Retrived an existing record: antena
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param <br />
<b>Notice</b>:  Undefined variable: __f in <b>C:\xampp\htdocs\cg-2006-05-09\index.setup.php</b> on line <b>146</b><br />

     * @result new Antena
     **/
    function get_antena( $id_antena) {

        // retrive the data
        $dbConn = $GLOBALS['dbConn'];

        // retrieved value in the database
        $_resultSet = $dbConn->doQuery("SELECT * FROM antena WHERE id_antena = '$id_antena'");

        $__antenaObj = new antena();
        // return the retrived from the database

        // create a new object
        $__obj = new Antena();
        $__obj->set_id_antena($_resultSet[0]['id_antena']);
        $__obj->set_id_dispositivo($_resultSet[0]['id_dispositivo']);
        $__obj->set_descripcion($_resultSet[0]['descripcion']);
        $__obj->set_sentido($_resultSet[0]['sentido']);
        $__obj->set_fecha_creacion($_resultSet[0]['fecha_creacion']);


        return $__obj;
    }

    /***
     * Update an existing record: antena
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
    function update_antena( $id_antena ) 
	{

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
        return $dbConn->update("antena", "id_antena= '$id_antena'");
    }

    /***
     * Delete an existing record: antena
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param <br />
<b>Notice</b>:  Undefined variable: __f in <b>C:\xampp\htdocs\cg-2006-05-09\index.setup.php</b> on line <b>146</b><br />

     * @result void
     **/
    function delete_antena( $id_antena) {

         // get database connection
         $dbConn = $GLOBALS['dbConn'];

         // performs deletion of data
         $dbConn->delete("antena", "id_antena = '$id_antena'");
    }

    /***
     * Retrived list of objects base on a given parameters: antena
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param conditionalStatement = ''
     * @result collection of objects: Antena
     **/
    function list_antena( $conditionalStatement = '' ) {

         $dbConn = $GLOBALS['dbConn'];
         // check if there is a given parameter list
         if(!empty($conditionalStatement)) { 
              $sqlStatement = "SELECT * FROM antena WHERE $conditionalStatement"; 
         } else { 
              $sqlStatement = "SELECT * FROM antena";
         }
	
         // retrieve the values base on the query result
         $__resObj = $dbConn->doQuery($sqlStatement);

         $__collectionOfObjects = array();
         foreach($__resObj as $__rs) { 
            $__newObj = new Antena();

            $__newObj->set_id_antena($__rs['id_antena']);
            $__newObj->set_id_dispositivo($__rs['id_dispositivo']);
            $__newObj->set_descripcion($__rs['descripcion']);
            $__newObj->set_sentido($__rs['sentido']);
            $__newObj->set_fecha_creacion($__rs['fecha_creacion']);

            // add object to collection 
            array_push($__collectionOfObjects, $__newObj);
         }

         // return collection of objects
         return $__collectionOfObjects;
    }

} ?>