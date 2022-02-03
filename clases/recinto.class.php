<?php class Recinto { 

    /***
     * DB Fields: id_recinto
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     **/
    var $id_recinto;

    /***
     * DB Fields: descripcion_recinto
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     **/
    var $descripcion_recinto;

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
     * DB Fields: user_creo
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     **/
    var $user_creo;

    /***
     * DB Fields: nombre_recinto
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     **/
    var $nombre_recinto;

//--------------- GET METHODS ----------------------------- //
    /***
     * Get value for field: id_recinto
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @result id_recinto
     **/
    function get_id_recinto( ) {
        // returns the value of id_recinto
        return $this->id_recinto;
    }


    /***
     * Get value for field: descripcion_recinto
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @result descripcion_recinto
     **/
    function get_descripcion_recinto( ) {
        // returns the value of descripcion_recinto
        return $this->descripcion_recinto;
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
     * Get value for field: user_creo
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @result user_creo
     **/
    function get_user_creo( ) {
        // returns the value of user_creo
        return $this->user_creo;
    }


    /***
     * Get value for field: nombre_recinto
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @result nombre_recinto
     **/
    function get_nombre_recinto( ) {
        // returns the value of nombre_recinto
        return $this->nombre_recinto;
    }


//--------------- SET METHODS ----------------------------- //
    /***
     * Set value for field: id_recinto
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param id_recinto
     * @result void
     **/
    function set_id_recinto( $id_recinto ) {
        // sets the value of id_recinto
        $this->id_recinto = $id_recinto;
    }

    /***
     * Set value for field: descripcion_recinto
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param descripcion_recinto
     * @result void
     **/
    function set_descripcion_recinto( $descripcion_recinto ) {
        // sets the value of descripcion_recinto
        $this->descripcion_recinto = $descripcion_recinto;
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
     * Set value for field: user_creo
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param user_creo
     * @result void
     **/
    function set_user_creo( $user_creo ) {
        // sets the value of user_creo
        $this->user_creo = $user_creo;
    }

    /***
     * Set value for field: nombre_recinto
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param nombre_recinto
     * @result void
     **/
    function set_nombre_recinto( $nombre_recinto ) {
        // sets the value of nombre_recinto
        $this->nombre_recinto = $nombre_recinto;
    }

//--------------- CRUD METHODS ----------------------------- //
    /***
     * Create a new Record: recinto
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param id_recinto
     * @param descripcion_recinto
     * @param fecha_creacion
     * @param user_creo
     * @param nombre_recinto
     * @result void
     **/
    function createnew_recinto( $id_recinto, $descripcion_recinto, $fecha_creacion, $user_creo, $nombre_recinto )
	{

        // items to be inserted in the database 
        $_obj = array($id_recinto,
                      $descripcion_recinto,
                      $fecha_creacion,
                      $user_creo,
                      $nombre_recinto,0); 
		
        // database object connection
        $dbConn = $GLOBALS['dbConn'];

        // perform insert in the database
      return  $dbConn->insert("recinto", $_obj);
    }

    /***
     * Retrived an existing record: recinto
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param <br />
<b>Notice</b>:  Undefined variable: __f in <b>C:\xampp\htdocs\cg-2006-05-09\index.setup.php</b> on line <b>146</b><br />

     * @result new Recinto
     **/
    function get_recinto( $id_recinto) {

        // retrive the data
        $dbConn = $GLOBALS['dbConn'];

        // retrieved value in the database
        $_resultSet = $dbConn->doQuery("SELECT * FROM recinto WHERE <br />
<b>Notice</b>:  Undefined variable: __f in <b>C:\xampp\htdocs\cg-2006-05-09\index.setup.php</b> on line <b>146</b><br />
 = '$<br />
<b>Notice</b>:  Undefined variable: __f in <b>C:\xampp\htdocs\cg-2006-05-09\index.setup.php</b> on line <b>146</b><br />
'");

        $__recintoObj = new recinto();
        // return the retrived from the database

        // create a new object
        $__obj = new Recinto();
        $__obj->set_id_recinto($_resultSet[0]['id_recinto']);
        $__obj->set_descripcion_recinto($_resultSet[0]['descripcion_recinto']);
        $__obj->set_fecha_creacion($_resultSet[0]['fecha_creacion']);
        $__obj->set_user_creo($_resultSet[0]['user_creo']);
        $__obj->set_nombre_recinto($_resultSet[0]['nombre_recinto']);


        return $__obj;
    }

    /***
     * Update an existing record: recinto
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
    function update_recinto( $id_recinto) {

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
        return $dbConn->update("recinto", "id_recinto=  '$id_recinto'");
    }

    /***
     * Delete an existing record: recinto
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param <br />
<b>Notice</b>:  Undefined variable: __f in <b>C:\xampp\htdocs\cg-2006-05-09\index.setup.php</b> on line <b>146</b><br />

     * @result void
     **/
    function delete_recinto( $id_recinto ) {

         // get database connection
         $dbConn = $GLOBALS['dbConn'];

         // performs deletion of data
       return  $dbConn->delete("recinto", "id_recinto = '$id_recinto'");
    }

    /***
     * Retrived list of objects base on a given parameters: recinto
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param conditionalStatement = ''
     * @result collection of objects: Recinto
     **/
    function list_recinto( $conditionalStatement = '' ) {

         $dbConn = $GLOBALS['dbConn'];
         // check if there is a given parameter list
         if(!empty($conditionalStatement)) { 
              $sqlStatement = "SELECT * FROM recinto WHERE $conditionalStatement"; 
         } else { 
              $sqlStatement = "SELECT * FROM recinto";
         }

         // retrieve the values base on the query result
         $__resObj = $dbConn->doQuery($sqlStatement);

         $__collectionOfObjects = array();
         foreach($__resObj as $__rs) { 
            $__newObj = new Recinto();

            $__newObj->set_id_recinto($__rs['id_recinto']);
            $__newObj->set_descripcion_recinto($__rs['descripcion_recinto']);
            $__newObj->set_fecha_creacion($__rs['fecha_creacion']);
            $__newObj->set_user_creo($__rs['user_creo']);
            $__newObj->set_nombre_recinto($__rs['nombre_recinto']);

            // add object to collection 
            array_push($__collectionOfObjects, $__newObj);
         }

         // return collection of objects
         return $__collectionOfObjects;
    }

} ?>