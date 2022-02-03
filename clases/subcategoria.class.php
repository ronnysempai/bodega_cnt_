<?php class Subcategoria { 

    /***
     * DB Fields: id_subcategoria
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     **/
    var $id_subcategoria;

    /***
     * DB Fields: id_categoria
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     **/
    var $id_categoria;

    /***
     * DB Fields: nombre_subcategoria
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     **/
    var $nombre_subcategoria;

    /***
     * DB Fields: decripcion_subcategoria
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     **/
    var $deScripcion_subcategoria;

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
     * Get value for field: id_subcategoria
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @result id_subcategoria
     **/
    function get_id_subcategoria( ) {
        // returns the value of id_subcategoria
        return $this->id_subcategoria;
    }


    /***
     * Get value for field: id_categoria
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @result id_categoria
     **/
    function get_id_categoria( ) {
        // returns the value of id_categoria
        return $this->id_categoria;
    }


    /***
     * Get value for field: nombre_subcategoria
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @result nombre_subcategoria
     **/
    function get_nombre_subcategoria( ) {
        // returns the value of nombre_subcategoria
        return $this->nombre_subcategoria;
    }


    /***
     * Get value for field: decripcion_subcategoria
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @result decripcion_subcategoria
     **/
    function get_descripcion_subcategoria( ) {
        // returns the value of decripcion_subcategoria
        return $this->descripcion_subcategoria;
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
     * Set value for field: id_subcategoria
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param id_subcategoria
     * @result void
     **/
    function set_id_subcategoria( $id_subcategoria ) {
        // sets the value of id_subcategoria
        $this->id_subcategoria = $id_subcategoria;
    }

    /***
     * Set value for field: id_categoria
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param id_categoria
     * @result void
     **/
    function set_id_categoria( $id_categoria ) {
        // sets the value of id_categoria
        $this->id_categoria = $id_categoria;
    }

    /***
     * Set value for field: nombre_subcategoria
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param nombre_subcategoria
     * @result void
     **/
    function set_nombre_subcategoria( $nombre_subcategoria ) {
        // sets the value of nombre_subcategoria
        $this->nombre_subcategoria = $nombre_subcategoria;
    }

    /***
     * Set value for field: decripcion_subcategoria
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param decripcion_subcategoria
     * @result void
     **/
    function set_descripcion_subcategoria( $descripcion_subcategoria ) {
        // sets the value of decripcion_subcategoria
        $this->descripcion_subcategoria = $descripcion_subcategoria;
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
    function set_fecha_creacion( $fecha_creacion ) 
	{
        // sets the value of fecha_creacion
        $this->fecha_creacion = $fecha_creacion;
    }

//--------------- CRUD METHODS ----------------------------- //
    /***
     * Create a new Record: subcategoria
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param id_subcategoria
     * @param id_categoria
     * @param nombre_subcategoria
     * @param decripcion_subcategoria
     * @param fecha_creacion
     * @result void
     **/
    function createnew_subcategoria( $id_subcategoria, $id_categoria, $nombre_subcategoria, $decripcion_subcategoria, $fecha_creacion ) {

        // items to be inserted in the database 
        $_obj = array($id_subcategoria,
                      $id_categoria,
                      $nombre_subcategoria,
                      $decripcion_subcategoria,
                      $fecha_creacion,'0'); 
		
        // database object connection
        $dbConn = $GLOBALS['dbConn'];
		
        // perform insert in the database
      return  $dbConn->insert("subcategoria", $_obj);
	  
    }

    /***
     * Retrived an existing record: subcategoria
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param <br />
<b>Notice</b>:  Undefined variable: __f in <b>C:\xampp\htdocs\cg-2006-05-09\index.setup.php</b> on line <b>146</b><br />

     * @result new Subcategoria
     **/
    function get_subcategoria( $id_subcategoria) {

        // retrive the data
        $dbConn = $GLOBALS['dbConn'];

        // retrieved value in the database
        $_resultSet = $dbConn->doQuery("SELECT * FROM subcategoria WHERE <br />
<b>Notice</b>:  Undefined variable: __f in <b>C:\xampp\htdocs\cg-2006-05-09\index.setup.php</b> on line <b>146</b><br />
 = '$<br />
<b>Notice</b>:  Undefined variable: __f in <b>C:\xampp\htdocs\cg-2006-05-09\index.setup.php</b> on line <b>146</b><br />
'");

        $__subcategoriaObj = new subcategoria();
        // return the retrived from the database

        // create a new object
        $__obj = new Subcategoria();
        $__obj->set_id_subcategoria($_resultSet[0]['id_subcategoria']);
        $__obj->set_id_categoria($_resultSet[0]['id_categoria']);
        $__obj->set_nombre_subcategoria($_resultSet[0]['nombre_subcategoria']);
        $__obj->set_decripcion_subcategoria($_resultSet[0]['decripcion_subcategoria']);
        $__obj->set_fecha_creacion($_resultSet[0]['fecha_creacion']);


        return $__obj;
    }

    /***
     * Update an existing record: subcategoria
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
    function update_subcategoria( $id_subcategoria) {

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
        return $dbConn->update("subcategoria", "id_subcategoria = '$id_subcategoria'");
		 
    }

    /***
     * Delete an existing record: subcategoria
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param <br />
<b>Notice</b>:  Undefined variable: __f in <b>C:\xampp\htdocs\cg-2006-05-09\index.setup.php</b> on line <b>146</b><br />

     * @result void
     **/
    function delete_subcategoria( $id_subcategoria) {

         // get database connection
         $dbConn = $GLOBALS['dbConn'];

         // performs deletion of data
         $dbConn->delete("subcategoria", "<br />
<b>Notice</b>:  Undefined variable: __f in <b>C:\xampp\htdocs\cg-2006-05-09\index.setup.php</b> on line <b>146</b><br />
 = '$<br />
<b>Notice</b>:  Undefined variable: __f in <b>C:\xampp\htdocs\cg-2006-05-09\index.setup.php</b> on line <b>146</b><br />
'");
    }

    /***
     * Retrived list of objects base on a given parameters: subcategoria
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param conditionalStatement = ''
     * @result collection of objects: Subcategoria
     **/
    function list_subcategoria( $conditionalStatement = '' ) {

         $dbConn = $GLOBALS['dbConn'];
         // check if there is a given parameter list
         if(!empty($conditionalStatement)) { 
              $sqlStatement = "SELECT * FROM subcategoria WHERE $conditionalStatement"; 
         } else { 
              $sqlStatement = "SELECT * FROM subcategoria";
         }

         // retrieve the values base on the query result
         $__resObj = $dbConn->doQuery($sqlStatement);

         $__collectionOfObjects = array();
         foreach($__resObj as $__rs) { 
            $__newObj = new Subcategoria();

            $__newObj->set_id_subcategoria($__rs['id_subcategoria']);
            $__newObj->set_id_categoria($__rs['id_categoria']);
            $__newObj->set_nombre_subcategoria($__rs['nombre_subcategoria']);
            $__newObj->set_decripcion_subcategoria($__rs['decripcion_subcategoria']);
            $__newObj->set_fecha_creacion($__rs['fecha_creacion']);

            // add object to collection 
            array_push($__collectionOfObjects, $__newObj);
         }

         // return collection of objects
         return $__collectionOfObjects;
    }

} ?>