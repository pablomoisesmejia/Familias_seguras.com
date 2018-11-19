<?php
class Cliente extends Validator{
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
	private $fecha_nacimiento = null;
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
		if($this->validateAlphabetic($value, 1, 100)){
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
			$this->fecha_nacimiento = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getFechaNac(){
		$cadena = $this->fecha_nacimiento;
		$buscar = '-';
		$reemplazar = '/';
		
		return str_replace($buscar, $reemplazar, $cadena);;
	}

	public function setDocumento($value){
		if($this->validateNumeric($value,1,11)){
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
		if($this->validateImage($file, $this->imagen, "../../web/img/Clientes/", 3000, 3000)){
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
		if(unlink("../../web/img/Clientes/".$this->imagen)){
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
	
	public function setEstado($value){
		if($value == "1" || $value == "0"){
			$this->estado = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getEstado(){
		return $this->estado;
	}


	//Métodos para manejar la sesión del Cliente
	public function checkAlias(){
		$sql = "SELECT ID_cliente FROM cliente WHERE username = ?";
		$params = array($this->alias);
		$data = Database::getRow($sql, $params);
		if($data){
			$this->id = $data['ID_cliente'];
			return true;
		}else{
			return false;
		}
	}


	public function checkCorreo(){
		$sql = "SELECT ID_cliente,login_id FROM cliente WHERE correo = ?";
		$params = array($this->correo);
		$data = Database::getRow($sql, $params);
		if($data){
			$this->id = $data['ID_cliente'];
			$this->login_id = $data['login_id'];
			return true;
		}else{
			return false;
		}
	}
	public function checkNombre(){
		$sql = "SELECT nombre FROM cliente WHERE username = ?";
		$params = array($this->alias);
		$data3 = Database::getRow($sql, $params);
		if($data3){
			$this->nombres = $data3['nombre'];
			return true;
		}else{
			return false;
		}
	}
	public function checkApellido(){
		$sql = "SELECT apellido FROM cliente WHERE username = ?";
		$params = array($this->alias);
		$data4 = Database::getRow($sql, $params);
		if($data4){
			$this->apellidos = $data4['apellido'];
			return true;
		}else{
			return false;
		}
	}

	public function checkPassword(){
		$sql = "SELECT contrasena, imagen_url, nombre FROM cliente WHERE username = ?";
		$params = array($this->alias);
		$data = Database::getRow($sql, $params);
		if(password_verify($this->clave, $data['contrasena'])){
			$this->nombres = $data['nombre'];
			$this->imagen = $data['imagen_url'];
			return true;
		}else{
			return false;
		}
	}
	public function changePassword(){
		$hash = password_hash($this->clave, PASSWORD_DEFAULT);
		$sql = "UPDATE cliente SET contrasena = ? , fecha_contrasena = CURDATE() WHERE ID_cliente = ?";
		$params = array($hash, $this->id);
		return Database::executeRow($sql, $params);
	}
	public function logOut(){
		return session_destroy();
	}

	//Metodos para manejar el CRUD
	public function getTipoDocumentos(){
		$sql = "SELECT ID_tipo_doc, nombre_tipo_doc FROM tipo_doc";
		$params = array(null);
		return Database::getRows($sql, $params);
	}

	public function getClientes(){
		$sql = "SELECT ID_cliente, nombre, apellido, correo, username, imagen_url, estado FROM cliente ORDER BY estado DESC";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function searchCliente($value){
		$sql = "SELECT ID_cliente, nombre, apellido, correo, username, imagen_url, estado FROM cliente WHERE apellido LIKE ? OR nombre LIKE ? ORDER BY apellido";
		$params = array("%$value%", "%$value%");
		return Database::getRows($sql, $params);
	}
	public function createCliente(){
		$hash = password_hash($this->clave, PASSWORD_DEFAULT);
		$sql = "INSERT INTO cliente(nombre, apellido, fecha_nacimiento, correo, contrasena, direccion, documento, username, FK_ID_tipo_doc, estado) VALUES(?,?,?,?,?,?,?,?,?,?)";
		$params = array($this->nombres, $this->apellidos, $this->fecha_nacimiento, $this->correo, $hash, $this->direccion, $this->documento, $this->alias, $this->tipo_documento,  1);
		return Database::executeRow($sql, $params);
	}

	public function readCliente(){
		$sql = "SELECT nombre, apellido, correo, username, fecha_nacimiento, direccion, documento, imagen_url, estado FROM cliente WHERE ID_cliente = ?";
		$params = array($this->id);
		$user = Database::getRow($sql, $params);
		if($user){
			$this->nombres = $user['nombre'];
			$this->apellidos = $user['apellido'];
			$this->correo = $user['correo'];
			$this->alias = $user['username'];
			$this->fecha_nacimiento = $user['fecha_nacimiento'];
			$this->direccion = $user['direccion'];
			$this->documento = $user['documento'];
			$this->imagen = $user['imagen_url'];
			$this->estado = $user['estado'];
			return true;
		}else{
			return null;
		}
	}
	public function updateCliente(){
		$sql = "UPDATE cliente SET nombre = ?, apellido = ?, correo = ?, username = ?, fecha_nacimiento =? , direccion=?, documento=?, imagen_url=?, estado=? WHERE ID_cliente = ? ";
		$params = array($this->nombres, $this->apellidos, $this->correo, $this->alias, $this->fecha_nacimiento,$this->direccion,$this->documento, $this->imagen, $this->estado, $this->id);
		return Database::executeRow($sql, $params);
	}
	public function deleteCliente(){
		$sql = "DELETE FROM cliente WHERE ID_cliente = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>