<?php class Unidad_medida { 

    /***
     * DB Fields: id_unidad_medida
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     **/
    var $id_unidad_medida;

    /***
     * DB Fields: clave_unidad_medida
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     **/
    var $clave_unidad_medida;

    /***
     * DB Fields: nombre
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     **/
    var $nombre_unidad_medida;

//--------------- GET METHODS ----------------------------- //
    /***
     * Get value for field: id_unidad_medida
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @result id_unidad_medida
     **/
    function get_id_unidad_medida( ) {
        // returns the value of id_unidad_medida
        return $this->id_unidad_medida;
    }


    /***
     * Get value for field: clave_unidad_medida
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @result clave_unidad_medida
     **/
    function get_clave_unidad_medida( ) {
        // returns the value of clave_unidad_medida
        return $this->clave_unidad_medida;
    }


    /***
     * Get value for field: nombre
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @result nombre
     **/
    function get_nombre( ) {
        // returns the value of nombre
        return $this->nombre;
    }


//--------------- SET METHODS ----------------------------- //
    /***
     * Set value for field: id_unidad_medida
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param id_unidad_medida
     * @result void
     **/
    function set_id_unidad_medida( $id_unidad_medida ) {
        // sets the value of id_unidad_medida
        $this->id_unidad_medida = $id_unidad_medida;
    }

    /***
     * Set value for field: clave_unidad_medida
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param clave_unidad_medida
     * @result void
     **/
    function set_clave_unidad_medida( $clave_unidad_medida ) {
        // sets the value of clave_unidad_medida
        $this->clave_unidad_medida = $clave_unidad_medida;
    }

    /***
     * Set value for field: nombre
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param nombre
     * @result void
     **/
    function set_nombre( $nombre ) {
        // sets the value of nombre
        $this->nombre_unidad_medida = $nombre;
    }

//--------------- CRUD METHODS ----------------------------- //
    /***
     * Create a new Record: unidad_medida
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param id_unidad_medida
     * @param clave_unidad_medida
     * @param nombre
     * @result void
     **/
    function createnew_unidad_medida( $id_unidad_medida, $clave_unidad_medida, $nombre ) {

        // items to be inserted in the database 
        $_obj = array($id_unidad_medida,
                      $clave_unidad_medida,
                      $nombre); 

        // database object connection
        $dbConn = $GLOBALS['dbConn'];

        // perform insert in the database
       return $dbConn->insert("unidad_medida", $_obj);
    }

    /***
     * Retrived an existing record: unidad_medida
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param <br />
<b>Notice</b>:  Undefined variable: __f in <b>C:\xampp\htdocs\cg-2006-05-09\index.setup.php</b> on line <b>146</b><br />

     * @result new Unidad_medida
     **/
    function get_unidad_medida( $id_unidad_medida) {

        // retrive the data
        $dbConn = $GLOBALS['dbConn'];

        // retrieved value in the database
        $_resultSet = $dbConn->doQuery("SELECT * FROM unidad_medida WHERE <br />
<b>Notice</b>:  Undefined variable: __f in <b>C:\xampp\htdocs\cg-2006-05-09\index.setup.php</b> on line <b>146</b><br />
 = '$<br />
<b>Notice</b>:  Undefined variable: __f in <b>C:\xampp\htdocs\cg-2006-05-09\index.setup.php</b> on line <b>146</b><br />
'");

        $__unidad_medidaObj = new unidad_medida();
        // return the retrived from the database

        // create a new object
        $__obj = new Unidad_medida();
        $__obj->set_id_unidad_medida($_resultSet[0]['id_unidad_medida']);
        $__obj->set_clave_unidad_medida($_resultSet[0]['clave_unidad_medida']);
        $__obj->set_nombre($_resultSet[0]['nombre']);


        return $__obj;
    }

    /***
     * Update an existing record: unidad_medida
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
    function update_unidad_medida( $id_unidad_medida) {

         // get database connection
         $dbConn = $GLOBALS['dbConn'];
		
		$itemsToBeUpdated = array();
				$arr_atributos=get_object_vars($this);
				
				foreach ($arr_atributos as $atributo => $v) 
					$itemsToBeUpdated[$atributo]=$v;
					
         // performs update in the database
         foreach($itemsToBeUpdated as $_fName => $_fVal) 
		 { 
               $dbConn->addValuePair($_fName, $_fVal);
         }
		
         // perform update operation
         return $dbConn->update("unidad_medida", "id_unidad_medida= '$id_unidad_medida'");
    }

    /***
     * Delete an existing record: unidad_medida
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param <br />
<b>Notice</b>:  Undefined variable: __f in <b>C:\xampp\htdocs\cg-2006-05-09\index.setup.php</b> on line <b>146</b><br />

     * @result void
     **/
    function delete_unidad_medida( $id_unidad_medida) {

         // get database connection
         $dbConn = $GLOBALS['dbConn'];

         // performs deletion of data
         return $dbConn->delete("unidad_medida", "id_unidad_medida= '$id_unidad_medida'");
    }

    /***
     * Retrived list of objects base on a given parameters: unidad_medida
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param conditionalStatement = ''
     * @result collection of objects: Unidad_medida
     **/
    function list_unidad_medida( $conditionalStatement = '' ) {

         $dbConn = $GLOBALS['dbConn'];
         // check if there is a given parameter list
         if(!empty($conditionalStatement)) { 
              $sqlStatement = "SELECT * FROM unidad_medida WHERE $conditionalStatement"; 
         } else { 
              $sqlStatement = "SELECT * FROM unidad_medida";
         }

         // retrieve the values base on the query result
         $__resObj = $dbConn->doQuery($sqlStatement);

         $__collectionOfObjects = array();
         foreach($__resObj as $__rs) { 
            $__newObj = new Unidad_medida();

            $__newObj->set_id_unidad_medida($__rs['id_unidad_medida']);
            $__newObj->set_clave_unidad_medida($__rs['clave_unidad_medida']);
            $__newObj->set_nombre($__rs['nombre']);

            // add object to collection 
            array_push($__collectionOfObjects, $__newObj);
         }

         // return collection of objects
         return $__collectionOfObjects;
    }

} ?>