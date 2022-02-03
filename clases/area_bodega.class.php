<?php class Area_bodega { 

    /***
     * DB Fields: id_area_bodega
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     **/
    var $id_area_bodega;

    /***
     * DB Fields: clave_area
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     **/
    var $clave_area;

    /***
     * DB Fields: decripcion_area_bodega
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     **/
    var $descripcion_area_bodega;

    /***
     * DB Fields: nombre_area_bodega
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     **/
    var $nombre_area_bodega;

    /***
     * DB Fields: id_bodega
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     **/
    var $id_bodega;

//--------------- GET METHODS ----------------------------- //
    /***
     * Get value for field: id_area_bodega
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @result id_area_bodega
     **/
    function get_id_area_bodega( ) {
        // returns the value of id_area_bodega
        return $this->id_area_bodega;
    }


    /***
     * Get value for field: clave_area
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @result clave_area
     **/
    function get_clave_area( ) {
        // returns the value of clave_area
        return $this->clave_area;
    }


    /***
     * Get value for field: decripcion_area_bodega
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @result decripcion_area_bodega
     **/
    function get_descripcion_area_bodega( ) {
        // returns the value of decripcion_area_bodega
        return $this->decripcion_area_bodega;
    }


    /***
     * Get value for field: nombre_area_bodega
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @result nombre_area_bodega
     **/
    function get_nombre_area_bodega( ) {
        // returns the value of nombre_area_bodega
        return $this->nombre_area_bodega;
    }


    /***
     * Get value for field: id_bodega
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @result id_bodega
     **/
    function get_id_bodega( ) {
        // returns the value of id_bodega
        return $this->id_bodega;
    }


//--------------- SET METHODS ----------------------------- //
    /***
     * Set value for field: id_area_bodega
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param id_area_bodega
     * @result void
     **/
    function set_id_area_bodega( $id_area_bodega ) {
        // sets the value of id_area_bodega
        $this->id_area_bodega = $id_area_bodega;
    }

    /***
     * Set value for field: clave_area
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param clave_area
     * @result void
     **/
    function set_clave_area( $clave_area ) {
        // sets the value of clave_area
        $this->clave_area = $clave_area;
    }

    /***
     * Set value for field: decripcion_area_bodega
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param decripcion_area_bodega
     * @result void
     **/
    function set_descripcion_area_bodega( $decripcion_area_bodega ) {
        // sets the value of decripcion_area_bodega
        $this->descripcion_area_bodega = $decripcion_area_bodega;
    }

    /***
     * Set value for field: nombre_area_bodega
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param nombre_area_bodega
     * @result void
     **/
    function set_nombre_area_bodega( $nombre_area_bodega ) {
        // sets the value of nombre_area_bodega
        $this->nombre_area_bodega = $nombre_area_bodega;
    }

    /***
     * Set value for field: id_bodega
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param id_bodega
     * @result void
     **/
    function set_id_bodega( $id_bodega ) {
        // sets the value of id_bodega
        $this->id_bodega = $id_bodega;
    }

//--------------- CRUD METHODS ----------------------------- //
    /***
     * Create a new Record: area_bodega
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param id_area_bodega
     * @param clave_area
     * @param decripcion_area_bodega
     * @param nombre_area_bodega
     * @param id_bodega
     * @result void
     **/
    function createnew_area_bodega( $id_area_bodega, $clave_area, $decripcion_area_bodega, $nombre_area_bodega, $id_bodega ) {

        // items to be inserted in the database 
        $_obj = array($id_area_bodega,
                      $clave_area,
                      $decripcion_area_bodega,
                      $nombre_area_bodega,
                      $id_bodega,'0'); 

        // database object connection
        $dbConn = $GLOBALS['dbConn'];

        // perform insert in the database
       return $dbConn->insert("area_bodega", $_obj);
    }

    /***
     * Retrived an existing record: area_bodega
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param <br />
<b>Notice</b>:  Undefined variable: __f in <b>C:\xampp\htdocs\cg-2006-05-09\index.setup.php</b> on line <b>146</b><br />

     * @result new Area_bodega
     **/
    function get_area_bodega( $id_area_bodega) {

        // retrive the data
        $dbConn = $GLOBALS['dbConn'];

        // retrieved value in the database
        $_resultSet = $dbConn->doQuery("SELECT * FROM area_bodega WHERE id_area_bodega = '$id_area_bodega'");

        $__area_bodegaObj = new area_bodega();
        // return the retrived from the database

        // create a new object
        $__obj = new Area_bodega();
        $__obj->set_id_area_bodega($_resultSet[0]['id_area_bodega']);
        $__obj->set_clave_area($_resultSet[0]['clave_area']);
        $__obj->set_decripcion_area_bodega($_resultSet[0]['decripcion_area_bodega']);
        $__obj->set_nombre_area_bodega($_resultSet[0]['nombre_area_bodega']);
        $__obj->set_id_bodega($_resultSet[0]['id_bodega']);


        return $__obj;
    }

    /***
     * Update an existing record: area_bodega
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
    function update_area_bodega( $id_area_bodega ) {

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
        return $dbConn->update("area_bodega", "id_area_bodega = '$id_area_bodega'");
    }

    /***
     * Delete an existing record: area_bodega
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param <br />
<b>Notice</b>:  Undefined variable: __f in <b>C:\xampp\htdocs\cg-2006-05-09\index.setup.php</b> on line <b>146</b><br />

     * @result void
     **/
    function delete_area_bodega( $id_area_bodega ) {

         // get database connection
         $dbConn = $GLOBALS['dbConn'];

         // performs deletion of data
         $dbConn->delete("area_bodega", "<br />
<b>Notice</b>:  Undefined variable: __f in <b>C:\xampp\htdocs\cg-2006-05-09\index.setup.php</b> on line <b>146</b><br />
 = '$<br />
<b>Notice</b>:  Undefined variable: __f in <b>C:\xampp\htdocs\cg-2006-05-09\index.setup.php</b> on line <b>146</b><br />
'");
    }

    /***
     * Retrived list of objects base on a given parameters: area_bodega
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param conditionalStatement = ''
     * @result collection of objects: Area_bodega
     **/
    function list_area_bodega( $conditionalStatement = '' ) {

         $dbConn = $GLOBALS['dbConn'];
         // check if there is a given parameter list
         if(!empty($conditionalStatement)) { 
              $sqlStatement = "SELECT * FROM area_bodega WHERE $conditionalStatement"; 
         } else { 
              $sqlStatement = "SELECT * FROM area_bodega";
         }

         // retrieve the values base on the query result
         $__resObj = $dbConn->doQuery($sqlStatement);

         $__collectionOfObjects = array();
         foreach($__resObj as $__rs) { 
            $__newObj = new Area_bodega();

            $__newObj->set_id_area_bodega($__rs['id_area_bodega']);
            $__newObj->set_clave_area($__rs['clave_area']);
            $__newObj->set_decripcion_area_bodega($__rs['decripcion_area_bodega']);
            $__newObj->set_nombre_area_bodega($__rs['nombre_area_bodega']);
            $__newObj->set_id_bodega($__rs['id_bodega']);

            // add object to collection 
            array_push($__collectionOfObjects, $__newObj);
         }

         // return collection of objects
         return $__collectionOfObjects;
    }

} ?>