<?php
class Usuario extends Validator{
	//Declaración de propiedades
	private $id = null;
	private $nombres = null;
	private $apellidos = null;
	private $correo = null;
	private $alias = null;
	private $clave = null;
	private $direccion =  null;
	private $documento =  null;
	private $tipo_documento =  null;
	private $estado =  null;
	private $imagen =  null;
	private $fechaNac = null;
	private $tipo_usuario = null;
	private $nombre_tipo_usuario = null;
	private $fecha_contrasena = null;


	private $login_id = null; 

	private $fecha_bloqueo = null;
	private $codigo_auth = null;

	//Métodos para sobrecarga de propiedades
	public function setId($value){
		if($this->validateId($value)){
			$this->id = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId(){
		return $this->id;
	}



	public function setCodigo_auth($value){
		if($this->validateAlphanumeric($value, 1, 20)){
			$this->codigo_auth = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getCodigo_auth(){
		return $this->codigo_auth;
	}

	Public function setLogin_id($value){
		if($this->validateAlphanumeric($value,1,80)){
			$this->login_id = $value;
			return true;
		}else{
			return false;
		}
	}

	public function setFecha_bloqueo($value){
        if($this->validateDate($value)){
            $this->fecha_bloqueo = $value;
            return true;
        }else{
            return false;
        }
    }

    public function getFecha_bloqueo(){
        return $this->fecha_bloqueo;
	}
	
	public function getLogin_id(){
		return $this->login_id;
	}

	public function setTipousuario($value){
		if($this->validateId($value)){
			$this->tipo_usuario = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getTipousuario(){
		return $this->tipo_usuario;
	}

	public function setNombre_tipo_usuario($value){
		if($this->validateAlphabetic($value, 1, 50)){
			$this->nombre_tipo_usuario = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getNombre_tipo_usuario(){
		return $this->nombre_tipo_usuario;
	}

	public function setFecha_contrasena($value){
        if($this->validateDate($value)){
            $this->fecha_contrasena = $value;
            return true;
        }else{
            return false;
        }
    }

    public function getFecha_contrasena(){
        return $this->fecha_contrasena;
	}

	public function setNombres($value){
		if($this->validateAlphabetic($value, 1, 50)){
			$this->nombres = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getNombres(){
		return $this->nombres;
	}


	public function setDireccion($value){
		if($this->validateAlphanumeric($value, 1, 100)){
			$this->direccion = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getDireccion(){
		return $this->direccion;
	}

	public function setFechaNac($value){
		if($this->validateDate($value)){
			$this->fechaNac = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getFechaNac(){
		$cadena = $this->fechaNac;
		$buscar = '-';
		$reemplazar = '/';
		
		return str_replace($buscar, $reemplazar, $cadena);;
	}

	public function setDocumento($value){
		if($this->validateNumeric($value,8,11)){
			$this->documento = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getDocumento(){
		return $this->documento;
	}

	public function setApellidos($value){
		if($this->validateAlphabetic($value, 1, 50)){
			$this->apellidos = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getApellidos(){
		return $this->apellidos;
	}

	public function setCorreo($value){
		if($this->validateEmail($value)){
			$this->correo = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getCorreo(){
		return $this->correo;
	}

	public function setAlias($value){
		if($this->validateAlphanumeric($value, 1, 50)){
			$this->alias = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getAlias(){
		return $this->alias;
	}

	public function setClave($value){
		if($this->validatePassword($value)){
			$this->clave = $value;
			return true;
		}else{
			return false;
		}
	}

	public function setClave2($value){
		if($this->validatePasswordcaracter2($value)){
			$this->clave = $value;
			return true;
		}else{
			return false;
		}
	}


	public function getClave(){
		return $this->clave;
	}

	public function setImagen($file){
		if($this->validateImage($file, $this->imagen, "../../web/img/usuarios/", 3000, 3000)){
			$this->imagen = $this->getImageName();
			return true;
		}else{
			return false;
		}
	}
	public function getImagen(){
		return $this->imagen;
	}
	public function unsetImagen(){
		if(unlink("../../web/img/usuarios/".$this->imagen)){
			$this->imagen = null;
			return true;
		}else{
			return false;
		}
	}

	public function setTipoDocumento($value){
		if($this->validateId($value)){
			$this->tipo_documento = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getTipoDocumento(){
		return $this->tipo_documento;
	}

	//Métodos para manejar la sesión del usuario
	public function checkAlias(){
		$sql = "SELECT ID_admin ,login_id FROM administrador WHERE username = ?";
		$params = array($this->alias);
		$data = Database::getRow($sql, $params);
		if($data){
			$this->id = $data['ID_admin'];
			$this->login_id = $data['login_id'];
			return true;
		}else{
			return false;
		}
	}

	public function checkCorreo(){
		$sql = "SELECT ID_admin,login_id FROM administrador WHERE correo = ?";
		$params = array($this->correo);
		$data = Database::getRow($sql, $params);
		if($data){
			$this->id = $data['ID_admin'];
			$this->login_id = $data['login_id'];
			return true;
		}else{
			return false;
		}
	}

	
    public function checkNombre(){
		$sql = "SELECT nombre FROM administrador WHERE ID_admin = ?";
		$params = array($this->id);
		$data = Database::getRow($sql, $params);
		if($data){
			$this->nombres = $data['nombre'];
			return true;
		}else{
			return false;
		}
	}
	
	public function checkPassword(){
		$sql = "SELECT contrasena, imagen_url, nombre,apellido,correo,username, documento, fecha_nac, direccion FROM administrador WHERE ID_admin = ?";
		$params = array($this->id);
		$data = Database::getRow($sql, $params);
		if(password_verify($this->clave, $data['contrasena'])){
			$this->nombres = $data['nombre'];
			$this->imagen = $data['imagen_url'];
			$this->apellidos = $data['apellido'];
			$this->correo = $data['correo'];
			$this->alias = $data['username'];
			$this->documento = $data['documento'];
			$this->fechaNac = $data['fecha_nac'];
			$this->direccion = $data['direccion'];
			return true;
		}else{
			return false;
		}
	}

	public function changePassword(){
		$hash = password_hash($this->clave, PASSWORD_DEFAULT);
		$sql = "UPDATE administrador SET contrasena = ? , fecha_contrasena = CURDATE() WHERE ID_admin = ?";
		$params = array($hash, $this->id);
		return Database::executeRow($sql, $params);
	}

	public function changePassword2(){
		$hash = password_hash($this->clave, PASSWORD_DEFAULT);
		$sql = "UPDATE administrador SET contrasena = ? , login_id = 0000 ,fecha_contrasena = CURDATE() WHERE ID_admin = ?";
		$params = array($hash, $this->id);
		return Database::executeRow($sql, $params);
	}

	public function logOut(){
		return session_destroy();
	}

	//Metodos para manejar el CRUD
	public function getTipoDocumentos(){
		$sql = "SELECT id_tipo_doc, nombre_tipo_doc FROM tipo_doc";
		$params = array(null);
		return Database::getRows($sql, $params);
	}


	public function getTipoUsuarios(){
		$sql = "SELECT ID_tipo_usuario, nombre_tipo FROM tipo_usuario";
		$params = array(null);
		return Database::getRows($sql, $params);
	}


	public function getUsuarios(){
		$sql = "SELECT ID_admin, nombre, apellido, correo, username, imagen_url, fecha_nac FROM administrador ORDER BY apellido";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function searchUsuario($value){
		$sql = "SELECT ID_admin, nombre, apellido, correo, username, imagen_url FROM administrador WHERE apellido LIKE ? OR nombre LIKE ? ORDER BY apellido";
		$params = array("%$value%", "%$value%");
		return Database::getRows($sql, $params);
	}
	public function createUsuario(){
		$hash = password_hash($this->clave, PASSWORD_DEFAULT);
		$sql = "INSERT INTO administrador(FK_ID_tipousuario ,nombre, apellido, fecha_nac, correo, contrasena, imagen_url, direccion, documento, username, FK_ID_tipo_doc, estado,fecha_contrasena) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,CURDATE())";
		$params = array($this->tipo_usuario,$this->nombres, $this->apellidos, $this->fechaNac, $this->correo, $hash,  $this->imagen , $this->direccion, $this->documento, $this->alias, $this->tipo_documento, 1);
		return Database::executeRow($sql, $params);
	}
	public function createPrimer_Usuario(){
		$hash = password_hash($this->clave, PASSWORD_DEFAULT);
		$sql = "INSERT INTO administrador(FK_ID_tipousuario ,nombre, apellido, fecha_nac, correo, contrasena,  direccion, documento, username, FK_ID_tipo_doc, estado, fecha_contrasena) VALUES(?,?,?,?,?,?,?,?,?,?,?, CURDATE())";
		$params = array(1, $this->nombres, $this->apellidos, $this->fechaNac, $this->correo, $hash, $this->direccion, $this->documento, $this->alias, $this->tipo_documento, 1);
		return Database::executeRow($sql, $params);
	}
	public function readUsuario(){
		$sql = "SELECT nombre, apellido, correo, username, fecha_nac, direccion, documento, imagen_url,FK_ID_tipousuario ,codigo_auth ,login_id FROM administrador WHERE ID_admin = ?";
		$params = array($this->id);
		$user = Database::getRow($sql, $params);
		if($user){
			$this->nombres = $user['nombre'];
			$this->apellidos = $user['apellido'];
			$this->correo = $user['correo'];
			$this->alias = $user['username'];
			$fecha_naci = str_replace('-', '/', $user['fecha_nac']);
			$this->fechanac = $fecha_naci;
			$this->direccion = $user['direccion'];
			$this->documento = $user['documento'];
			$this->imagen = $user['imagen_url'];
			$this->tipo_usuario = $user['FK_ID_tipousuario'];
			$this->codigo_auth =  $user['codigo_auth'];
			$this->login_id = $user['login_id'];
			return true;
		}else{
			return null;
		}
	}
	public function updateUsuario(){
		$sql = "UPDATE administrador SET nombre = ?, apellido = ?, correo = ?, username = ?, fecha_nac =? , direccion=?, documento=?, imagen_url=? WHERE ID_admin = ?";
		$params = array($this->nombres, $this->apellidos, $this->correo, $this->alias, $this->fechanac,$this->direccion,$this->documento, $this->imagen, $this->id);
		return Database::executeRow($sql, $params);
	}

	public function updatelogin_id(){
		$sql = "UPDATE administrador SET administrador.login_id = ? WHERE ID_admin = ?";
		$params = array( $this->login_id, $this->id);
		return Database::executeRow($sql, $params); 
	}


	public function deleteUsuario(){
		$sql = "DELETE FROM administrador WHERE ID_admin = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
	public function changefecha_blo(){
		$sql = "UPDATE administrador SET administrador.fecha_bloqueo = (SELECT DATE_ADD(CURDATE(), INTERVAL 1 DAY)) WHERE administrador.ID_admin = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
	public function update_clave_google(){
		$sql = "UPDATE administrador SET administrador.codigo_auth = ? WHERE administrador.ID_admin= ?";
		$params = array($this->codigo_auth,$this->id);
		return Database::executeRow($sql, $params);
	}

	public function checkfecha_contrasena(){
		$sql="SELECT DATEDIFF( CURDATE(),(SELECT a.fecha_contrasena)) AS fecha_diferencia , a.FK_ID_tipousuario , t.nombre_tipo FROM administrador a
		INNER JOIN tipo_usuario t ON a.FK_ID_tipousuario = t.ID_tipo_usuario
		WHERE a.ID_admin = ?";
		$params = array($this->id);
		$data=Database::getRow($sql,$params);

		if($data){
			$this->fecha_contrasena = $data['fecha_diferencia'];
			$this->tipo_usuario = $data['FK_ID_tipousuario'];
			$this->nombre_tipo_usuario = $data['nombre_tipo'];
			return true;
		}else{
			return false;
		}
	}


	public function checkfecha_bloqueo(){
		$sql="SELECT DATEDIFF( CURDATE() ,(SELECT administrador.fecha_bloqueo)) AS fecha_blo FROM administrador WHERE administrador.id_admin = ? ";
		$params = array($this->id);
		$data2 = Database::getRow($sql,$params);

		if($data2){
			$this->fecha_bloqueo = $data2['fecha_blo'];
			return true;
		}else{
			return false;
		}
	}
}
?>