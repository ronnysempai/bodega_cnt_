<?php class Usuario { 

    /***
     * DB Fields: id_usuario
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     **/
    var $id_usuario;

    /***
     * DB Fields: nombre
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     **/
    var $nombre;

    /***
     * DB Fields: apellido
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     **/
    var $apellido;

    /***
     * DB Fields: cargo
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     **/
    var $cargo;

    /***
     * DB Fields: usuario
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     **/
    var $usuario;

    /***
     * DB Fields: pasword
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     **/
    var $password;
	
	var $perfil;

//--------------- GET METHODS ----------------------------- //
    /***
     * Get value for field: id_usuario
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @result id_usuario
     **/
    function get_id_usuario( ) {
        // returns the value of id_usuario
        return $this->id_usuario;
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


    /***
     * Get value for field: apellido
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @result apellido
     **/
    function get_apellido( ) {
        // returns the value of apellido
        return $this->apellido;
    }


    /***
     * Get value for field: cargo
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @result cargo
     **/
    function get_cargo( ) {
        // returns the value of cargo
        return $this->cargo;
    }


    /***
     * Get value for field: usuario
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @result usuario
     **/
    function get_usuario( ) {
        // returns the value of usuario
        return $this->usuario;
    }


    /***
     * Get value for field: pasword
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @result pasword
     **/
    function get_pasword( ) {
        // returns the value of pasword
        return $this->pasword;
    }


//--------------- SET METHODS ----------------------------- //
    /***
     * Set value for field: id_usuario
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param id_usuario
     * @result void
     **/
    function set_id_usuario( $id_usuario ) {
        // sets the value of id_usuario
        $this->id_usuario = $id_usuario;
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
        $this->nombre = $nombre;
    }

    /***
     * Set value for field: apellido
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param apellido
     * @result void
     **/
    function set_apellido( $apellido ) {
        // sets the value of apellido
        $this->apellido = $apellido;
    }

    /***
     * Set value for field: cargo
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param cargo
     * @result void
     **/
    function set_cargo( $cargo ) {
        // sets the value of cargo
        $this->cargo = $cargo;
    }

    /***
     * Set value for field: usuario
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param usuario
     * @result void
     **/
    function set_usuario( $usuario ) {
        // sets the value of usuario
        $this->usuario = $usuario;
    }

    /***
     * Set value for field: pasword
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param pasword
     * @result void
     **/
    function set_password( $pasword ) {
        // sets the value of pasword
        $this->password = $pasword;
    }
	
	function set_perfil( $perfil ) {
        // sets the value of pasword
        $this->perfil = $perfil;
    }

//--------------- CRUD METHODS ----------------------------- //
    /***
     * Create a new Record: usuario
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param id_usuario
     * @param nombre
     * @param apellido
     * @param cargo
     * @param usuario
     * @param pasword
     * @result void
     **/
    function createnew_usuario( $id_usuario, $nombre, $apellido, $cargo, $usuario, $pasword,$perfil ) {

        // items to be inserted in the database 
        $_obj = array($id_usuario,
                      $nombre,
                      $apellido,
                      $cargo,
                      $usuario,
                      $pasword,$perfil,'0'); 

        // database object connection
        $dbConn = $GLOBALS['dbConn'];

        // perform insert in the database
        return $dbConn->insert("usuario", $_obj);
    }

    /***
     * Retrived an existing record: usuario
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param <br />
<b>Notice</b>:  Undefined variable: __f in <b>C:\xampp\htdocs\cg-2006-05-09\index.setup.php</b> on line <b>146</b><br />

     * @result new Usuario
     **/
    /* function get_usuario( $id_usuario) {

        // retrive the data
        $dbConn = $GLOBALS['dbConn'];

        // retrieved value in the database
        $_resultSet = $dbConn->doQuery("SELECT * FROM usuario WHERE id_usuario = '$id_usuario'");

        $__usuarioObj = new usuario();
        // return the retrived from the database

        // create a new object
        $__obj = new Usuario();
        $__obj->set_id_usuario($_resultSet[0]['id_usuario']);
        $__obj->set_nombre($_resultSet[0]['nombre']);
        $__obj->set_apellido($_resultSet[0]['apellido']);
        $__obj->set_cargo($_resultSet[0]['cargo']);
        $__obj->set_usuario($_resultSet[0]['usuario']);
        $__obj->set_pasword($_resultSet[0]['pasword']);


        return $__obj;
    } */

    /***
     * Update an existing record: usuario
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
    function update_usuario( $id_usuario ) {

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
         return $dbConn->update("usuario", "id_usuario = '$id_usuario'");
    }

    /***
     * Delete an existing record: usuario
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param <br />
<b>Notice</b>:  Undefined variable: __f in <b>C:\xampp\htdocs\cg-2006-05-09\index.setup.php</b> on line <b>146</b><br />

     * @result void
     **/
    function delete_usuario( $id_usuario) {

         // get database connection
         $dbConn = $GLOBALS['dbConn'];

         // performs deletion of data
         $dbConn->delete("usuario", "id_usuario = '$id_usuario'");
    }

    /***
     * Retrived list of objects base on a given parameters: usuario
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param conditionalStatement = ''
     * @result collection of objects: Usuario
     **/
    function list_usuario( $conditionalStatement = '' ) {

         $dbConn = $GLOBALS['dbConn'];
         // check if there is a given parameter list
         if(!empty($conditionalStatement)) { 
              $sqlStatement = "SELECT * FROM usuario WHERE $conditionalStatement"; 
         } else { 
              $sqlStatement = "SELECT * FROM usuario";
         }

         // retrieve the values base on the query result
         $__resObj = $dbConn->doQuery($sqlStatement);

         $__collectionOfObjects = array();
         foreach($__resObj as $__rs) { 
            $__newObj = new Usuario();

            $__newObj->set_id_usuario($__rs['id_usuario']);
            $__newObj->set_nombre($__rs['nombre']);
            $__newObj->set_apellido($__rs['apellido']);
            $__newObj->set_cargo($__rs['cargo']);
            $__newObj->set_usuario($__rs['usuario']);
            $__newObj->set_pasword($__rs['pasword']);

            // add object to collection 
            array_push($__collectionOfObjects, $__newObj);
         }

         // return collection of objects
         return $__collectionOfObjects;
    }

} ?>