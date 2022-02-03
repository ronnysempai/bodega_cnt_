<?php class Producto { 

    /***
     * DB Fields: id_producto
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     **/
    var $id_producto;

    /***
     * DB Fields: clave_producto
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     **/
    var $clave_producto;

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
     * DB Fields: id_subcategoria
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     **/
    var $id_subcategoria;

    /***
     * DB Fields: nombre_producto
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     **/
    var $nombre_producto;

    /***
     * DB Fields: nombre_corto
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     **/
    var $nombre_corto;

    /***
     * DB Fields: cod_unidad_medida
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     **/
    var $cod_unidad_medida;

    /***
     * DB Fields: stock_actual
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     **/
    var $stock_actual;

    /***
     * DB Fields: stock_minimo
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     **/
    var $stock_minimo;

    /***
     * DB Fields: stock_inicial
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     **/
    var $stock_inicial;

    /***
     * DB Fields: precio_promedio
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     **/
    var $precio_promedio;

    /***
     * DB Fields: fecha_ingreso_stockini
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     **/
    var $fecha_ingreso_stockini;

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
     * DB Fields: usuario_creo
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     **/
    var $usuario_creo;

//--------------- GET METHODS ----------------------------- //
    /***
     * Get value for field: id_producto
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @result id_producto
     **/
    function get_id_producto( ) {
        // returns the value of id_producto
        return $this->id_producto;
    }


    /***
     * Get value for field: clave_producto
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @result clave_producto
     **/
    function get_clave_producto( ) {
        // returns the value of clave_producto
        return $this->clave_producto;
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
     * Get value for field: nombre_producto
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @result nombre_producto
     **/
    function get_nombre_producto( ) {
        // returns the value of nombre_producto
        return $this->nombre_producto;
    }


    /***
     * Get value for field: nombre_corto
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @result nombre_corto
     **/
    function get_nombre_corto( ) {
        // returns the value of nombre_corto
        return $this->nombre_corto;
    }


    /***
     * Get value for field: cod_unidad_medida
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @result cod_unidad_medida
     **/
    function get_cod_unidad_medida( ) {
        // returns the value of cod_unidad_medida
        return $this->cod_unidad_medida;
    }


    /***
     * Get value for field: stock_actual
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @result stock_actual
     **/
    function get_stock_actual( ) {
        // returns the value of stock_actual
        return $this->stock_actual;
    }


    /***
     * Get value for field: stock_minimo
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @result stock_minimo
     **/
    function get_stock_minimo( ) {
        // returns the value of stock_minimo
        return $this->stock_minimo;
    }


    /***
     * Get value for field: stock_inicial
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @result stock_inicial
     **/
    function get_stock_inicial( ) {
        // returns the value of stock_inicial
        return $this->stock_inicial;
    }


    /***
     * Get value for field: precio_promedio
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @result precio_promedio
     **/
    function get_precio_promedio( ) {
        // returns the value of precio_promedio
        return $this->precio_promedio;
    }


    /***
     * Get value for field: fecha_ingreso_stockini
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @result fecha_ingreso_stockini
     **/
    function get_fecha_ingreso_stockini( ) {
        // returns the value of fecha_ingreso_stockini
        return $this->fecha_ingreso_stockini;
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
     * Get value for field: usuario_creo
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @result usuario_creo
     **/
    function get_usuario_creo( ) {
        // returns the value of usuario_creo
        return $this->usuario_creo;
    }


//--------------- SET METHODS ----------------------------- //
    /***
     * Set value for field: id_producto
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param id_producto
     * @result void
     **/
    function set_id_producto( $id_producto ) {
        // sets the value of id_producto
        $this->id_producto = $id_producto;
    }

    /***
     * Set value for field: clave_producto
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param clave_producto
     * @result void
     **/
    function set_clave_producto( $clave_producto ) {
        // sets the value of clave_producto
        $this->clave_producto = $clave_producto;
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
     * Set value for field: nombre_producto
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param nombre_producto
     * @result void
     **/
    function set_nombre_producto( $nombre_producto ) {
        // sets the value of nombre_producto
        $this->nombre_producto = $nombre_producto;
    }

    /***
     * Set value for field: nombre_corto
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param nombre_corto
     * @result void
     **/
    function set_nombre_corto( $nombre_corto ) {
        // sets the value of nombre_corto
        $this->nombre_corto = $nombre_corto;
    }

    /***
     * Set value for field: cod_unidad_medida
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param cod_unidad_medida
     * @result void
     **/
    function set_cod_unidad_medida( $cod_unidad_medida ) {
        // sets the value of cod_unidad_medida
        $this->cod_unidad_medida = $cod_unidad_medida;
    }

    /***
     * Set value for field: stock_actual
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param stock_actual
     * @result void
     **/
    function set_stock_actual( $stock_actual ) {
        // sets the value of stock_actual
        $this->stock_actual = $stock_actual;
    }

    /***
     * Set value for field: stock_minimo
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param stock_minimo
     * @result void
     **/
    function set_stock_minimo( $stock_minimo ) {
        // sets the value of stock_minimo
        $this->stock_minimo = $stock_minimo;
    }

    /***
     * Set value for field: stock_inicial
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param stock_inicial
     * @result void
     **/
    function set_stock_inicial( $stock_inicial ) {
        // sets the value of stock_inicial
        $this->stock_inicial = $stock_inicial;
    }

    /***
     * Set value for field: precio_promedio
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param precio_promedio
     * @result void
     **/
    function set_precio_promedio( $precio_promedio ) {
        // sets the value of precio_promedio
        $this->precio_promedio = $precio_promedio;
    }

    /***
     * Set value for field: fecha_ingreso_stockini
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param fecha_ingreso_stockini
     * @result void
     **/
    function set_fecha_ingreso_stockini( $fecha_ingreso_stockini ) {
        // sets the value of fecha_ingreso_stockini
        $this->fecha_ingreso_stockini = $fecha_ingreso_stockini;
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
     * Set value for field: usuario_creo
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param usuario_creo
     * @result void
     **/
    function set_usuario_creo( $usuario_creo ) {
        // sets the value of usuario_creo
        $this->usuario_creo = $usuario_creo;
    }

//--------------- CRUD METHODS ----------------------------- //
    /***
     * Create a new Record: producto
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param id_producto
     * @param clave_producto
     * @param id_categoria
     * @param id_subcategoria
     * @param nombre_producto
     * @param nombre_corto
     * @param cod_unidad_medida
     * @param stock_actual
     * @param stock_minimo
     * @param stock_inicial
     * @param precio_promedio
     * @param fecha_ingreso_stockini
     * @param fecha_creacion
     * @param usuario_creo
     * @result void
     **/
    function createnew_producto( $id_producto, $clave_producto, $id_categoria, $id_subcategoria, $nombre_producto, $nombre_corto, $cod_unidad_medida, $stock_actual, $stock_minimo, $stock_inicial, $precio_promedio, $fecha_ingreso_stockini, $fecha_creacion, $usuario_creo ) {

        // items to be inserted in the database 
        $_obj = array($id_producto,
                      $clave_producto,
                      $id_categoria,
                      $id_subcategoria,
                      $nombre_producto,
                      $nombre_corto,
                      $cod_unidad_medida,
                      $stock_actual,
                      $stock_minimo,
                      $stock_inicial,
                      $precio_promedio,
                      $fecha_ingreso_stockini,
                      $fecha_creacion,
                      $usuario_creo); 

        // database object connection
        $dbConn = $GLOBALS['dbConn'];

        // perform insert in the database
        $dbConn->insert("producto", $_obj);
    }

    /***
     * Retrived an existing record: producto
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param <br />
<b>Notice</b>:  Undefined variable: __f in <b>C:\xampp\htdocs\cg-2006-05-09\index.setup.php</b> on line <b>146</b><br />

     * @result new Producto
     **/
    function get_producto( $<br />
<b>Notice</b>:  Undefined variable: __f in <b>C:\xampp\htdocs\cg-2006-05-09\index.setup.php</b> on line <b>146</b><br />
 ) {

        // retrive the data
        $dbConn = $GLOBALS['dbConn'];

        // retrieved value in the database
        $_resultSet = $dbConn->doQuery("SELECT * FROM producto WHERE <br />
<b>Notice</b>:  Undefined variable: __f in <b>C:\xampp\htdocs\cg-2006-05-09\index.setup.php</b> on line <b>146</b><br />
 = '$<br />
<b>Notice</b>:  Undefined variable: __f in <b>C:\xampp\htdocs\cg-2006-05-09\index.setup.php</b> on line <b>146</b><br />
'");

        $__productoObj = new producto();
        // return the retrived from the database

        // create a new object
        $__obj = new Producto();
        $__obj->set_id_producto($_resultSet[0]['id_producto']);
        $__obj->set_clave_producto($_resultSet[0]['clave_producto']);
        $__obj->set_id_categoria($_resultSet[0]['id_categoria']);
        $__obj->set_id_subcategoria($_resultSet[0]['id_subcategoria']);
        $__obj->set_nombre_producto($_resultSet[0]['nombre_producto']);
        $__obj->set_nombre_corto($_resultSet[0]['nombre_corto']);
        $__obj->set_cod_unidad_medida($_resultSet[0]['cod_unidad_medida']);
        $__obj->set_stock_actual($_resultSet[0]['stock_actual']);
        $__obj->set_stock_minimo($_resultSet[0]['stock_minimo']);
        $__obj->set_stock_inicial($_resultSet[0]['stock_inicial']);
        $__obj->set_precio_promedio($_resultSet[0]['precio_promedio']);
        $__obj->set_fecha_ingreso_stockini($_resultSet[0]['fecha_ingreso_stockini']);
        $__obj->set_fecha_creacion($_resultSet[0]['fecha_creacion']);
        $__obj->set_usuario_creo($_resultSet[0]['usuario_creo']);


        return $__obj;
    }

    /***
     * Update an existing record: producto
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
    function update_producto( $<br />
<b>Notice</b>:  Undefined variable: __f in <b>C:\xampp\htdocs\cg-2006-05-09\index.setup.php</b> on line <b>146</b><br />
, $itemsToBeUpdated = array() ) {

         // get database connection
         $dbConn = $GLOBALS['dbConn'];

         // performs update in the database
         foreach($itemsToBeUpdated as $_fName => $_fVal) { 
               $dbConn->addValuePair($_fName, $_fVal);
         }

         // perform update operation
         $dbConn->update("producto", "<br />
<b>Notice</b>:  Undefined variable: __f in <b>C:\xampp\htdocs\cg-2006-05-09\index.setup.php</b> on line <b>146</b><br />
 = '$<br />
<b>Notice</b>:  Undefined variable: __f in <b>C:\xampp\htdocs\cg-2006-05-09\index.setup.php</b> on line <b>146</b><br />
'");
    }

    /***
     * Delete an existing record: producto
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param <br />
<b>Notice</b>:  Undefined variable: __f in <b>C:\xampp\htdocs\cg-2006-05-09\index.setup.php</b> on line <b>146</b><br />

     * @result void
     **/
    function delete_producto( $<br />
<b>Notice</b>:  Undefined variable: __f in <b>C:\xampp\htdocs\cg-2006-05-09\index.setup.php</b> on line <b>146</b><br />
 ) {

         // get database connection
         $dbConn = $GLOBALS['dbConn'];

         // performs deletion of data
         $dbConn->delete("producto", "<br />
<b>Notice</b>:  Undefined variable: __f in <b>C:\xampp\htdocs\cg-2006-05-09\index.setup.php</b> on line <b>146</b><br />
 = '$<br />
<b>Notice</b>:  Undefined variable: __f in <b>C:\xampp\htdocs\cg-2006-05-09\index.setup.php</b> on line <b>146</b><br />
'");
    }

    /***
     * Retrived list of objects base on a given parameters: producto
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param conditionalStatement = ''
     * @result collection of objects: Producto
     **/
    function list_producto( $conditionalStatement = '' ) {

         $dbConn = $GLOBALS['dbConn'];
         // check if there is a given parameter list
         if(!empty($conditionalStatement)) { 
              $sqlStatement = "SELECT * FROM producto WHERE $conditionalStatement"; 
         } else { 
              $sqlStatement = "SELECT * FROM producto";
         }

         // retrieve the values base on the query result
         $__resObj = $dbConn->doQuery($sqlStatement);

         $__collectionOfObjects = array();
         foreach($__resObj as $__rs) { 
            $__newObj = new Producto();

            $__newObj->set_id_producto($__rs['id_producto']);
            $__newObj->set_clave_producto($__rs['clave_producto']);
            $__newObj->set_id_categoria($__rs['id_categoria']);
            $__newObj->set_id_subcategoria($__rs['id_subcategoria']);
            $__newObj->set_nombre_producto($__rs['nombre_producto']);
            $__newObj->set_nombre_corto($__rs['nombre_corto']);
            $__newObj->set_cod_unidad_medida($__rs['cod_unidad_medida']);
            $__newObj->set_stock_actual($__rs['stock_actual']);
            $__newObj->set_stock_minimo($__rs['stock_minimo']);
            $__newObj->set_stock_inicial($__rs['stock_inicial']);
            $__newObj->set_precio_promedio($__rs['precio_promedio']);
            $__newObj->set_fecha_ingreso_stockini($__rs['fecha_ingreso_stockini']);
            $__newObj->set_fecha_creacion($__rs['fecha_creacion']);
            $__newObj->set_usuario_creo($__rs['usuario_creo']);

            // add object to collection 
            array_push($__collectionOfObjects, $__newObj);
         }

         // return collection of objects
         return $__collectionOfObjects;
    }

} ?>