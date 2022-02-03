<?php class Categoria { 

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
     * DB Fields: descripcion_categoria
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     **/
    var $descripcion_categoria;

    /***
     * DB Fields: nombre_categoria
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     **/
    var $nombre_categoria;

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
     * Get value for field: descripcion_categoria
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @result descripcion_categoria
     **/
    function get_descripcion_categoria( ) {
        // returns the value of descripcion_categoria
        return $this->descripcion_categoria;
    }


    /***
     * Get value for field: nombre_categoria
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @result nombre_categoria
     **/
    function get_nombre_categoria( ) {
        // returns the value of nombre_categoria
        return $this->nombre_categoria;
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
     * Set value for field: descripcion_categoria
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param descripcion_categoria
     * @result void
     **/
    function set_descripcion_categoria( $descripcion_categoria ) {
        // sets the value of descripcion_categoria
        $this->descripcion_categoria = $descripcion_categoria;
    }

    /***
     * Set value for field: nombre_categoria
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param nombre_categoria
     * @result void
     **/
    function set_nombre_categoria( $nombre_categoria ) {
        // sets the value of nombre_categoria
        $this->nombre_categoria = $nombre_categoria;
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
     * Create a new Record: categoria
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param id_categoria
     * @param descripcion_categoria
     * @param nombre_categoria
     * @param fecha_creacion
     * @result void
     **/
    function createnew_categoria( $id_categoria, $descripcion_categoria, $nombre_categoria, $fecha_creacion ) {

        // items to be inserted in the database 
        $_obj = array($id_categoria,
                      $descripcion_categoria,
                      $nombre_categoria,
                      $fecha_creacion); 

        // database object connection
        $dbConn = $GLOBALS['dbConn'];

        // perform insert in the database
        $dbConn->insert("categoria", $_obj);
    }

    /***
     * Retrived an existing record: categoria
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param <br />
<b>Notice</b>:  Undefined variable: __f in <b>C:\xampp\htdocs\cg-2006-05-09\index.setup.php</b> on line <b>146</b><br />

     * @result new Categoria
     **/
    function get_categoria( $<br />
<b>Notice</b>:  Undefined variable: __f in <b>C:\xampp\htdocs\cg-2006-05-09\index.setup.php</b> on line <b>146</b><br />
 ) {

        // retrive the data
        $dbConn = $GLOBALS['dbConn'];

        // retrieved value in the database
        $_resultSet = $dbConn->doQuery("SELECT * FROM categoria WHERE <br />
<b>Notice</b>:  Undefined variable: __f in <b>C:\xampp\htdocs\cg-2006-05-09\index.setup.php</b> on line <b>146</b><br />
 = '$<br />
<b>Notice</b>:  Undefined variable: __f in <b>C:\xampp\htdocs\cg-2006-05-09\index.setup.php</b> on line <b>146</b><br />
'");

        $__categoriaObj = new categoria();
        // return the retrived from the database

        // create a new object
        $__obj = new Categoria();
        $__obj->set_id_categoria($_resultSet[0]['id_categoria']);
        $__obj->set_descripcion_categoria($_resultSet[0]['descripcion_categoria']);
        $__obj->set_nombre_categoria($_resultSet[0]['nombre_categoria']);
        $__obj->set_fecha_creacion($_resultSet[0]['fecha_creacion']);


        return $__obj;
    }

    /***
     * Update an existing record: categoria
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
    function update_categoria( $<br />
<b>Notice</b>:  Undefined variable: __f in <b>C:\xampp\htdocs\cg-2006-05-09\index.setup.php</b> on line <b>146</b><br />
, $itemsToBeUpdated = array() ) {

         // get database connection
         $dbConn = $GLOBALS['dbConn'];

         // performs update in the database
         foreach($itemsToBeUpdated as $_fName => $_fVal) { 
               $dbConn->addValuePair($_fName, $_fVal);
         }

         // perform update operation
         $dbConn->update("categoria", "<br />
<b>Notice</b>:  Undefined variable: __f in <b>C:\xampp\htdocs\cg-2006-05-09\index.setup.php</b> on line <b>146</b><br />
 = '$<br />
<b>Notice</b>:  Undefined variable: __f in <b>C:\xampp\htdocs\cg-2006-05-09\index.setup.php</b> on line <b>146</b><br />
'");
    }

    /***
     * Delete an existing record: categoria
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param <br />
<b>Notice</b>:  Undefined variable: __f in <b>C:\xampp\htdocs\cg-2006-05-09\index.setup.php</b> on line <b>146</b><br />

     * @result void
     **/
    function delete_categoria( $<br />
<b>Notice</b>:  Undefined variable: __f in <b>C:\xampp\htdocs\cg-2006-05-09\index.setup.php</b> on line <b>146</b><br />
 ) {

         // get database connection
         $dbConn = $GLOBALS['dbConn'];

         // performs deletion of data
         $dbConn->delete("categoria", "<br />
<b>Notice</b>:  Undefined variable: __f in <b>C:\xampp\htdocs\cg-2006-05-09\index.setup.php</b> on line <b>146</b><br />
 = '$<br />
<b>Notice</b>:  Undefined variable: __f in <b>C:\xampp\htdocs\cg-2006-05-09\index.setup.php</b> on line <b>146</b><br />
'");
    }

    /***
     * Retrived list of objects base on a given parameters: categoria
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param conditionalStatement = ''
     * @result collection of objects: Categoria
     **/
    function list_categoria( $conditionalStatement = '' ) {

         $dbConn = $GLOBALS['dbConn'];
         // check if there is a given parameter list
         if(!empty($conditionalStatement)) { 
              $sqlStatement = "SELECT * FROM categoria WHERE $conditionalStatement"; 
         } else { 
              $sqlStatement = "SELECT * FROM categoria";
         }

         // retrieve the values base on the query result
         $__resObj = $dbConn->doQuery($sqlStatement);

         $__collectionOfObjects = array();
         foreach($__resObj as $__rs) { 
            $__newObj = new Categoria();

            $__newObj->set_id_categoria($__rs['id_categoria']);
            $__newObj->set_descripcion_categoria($__rs['descripcion_categoria']);
            $__newObj->set_nombre_categoria($__rs['nombre_categoria']);
            $__newObj->set_fecha_creacion($__rs['fecha_creacion']);

            // add object to collection 
            array_push($__collectionOfObjects, $__newObj);
         }

         // return collection of objects
         return $__collectionOfObjects;
    }

} ?>