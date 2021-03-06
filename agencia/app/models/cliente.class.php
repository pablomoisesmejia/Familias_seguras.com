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
	private $whats = null;
	private $tel = null;
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
		if($this->validateId($value)){
			$this->documento = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getDocumento(){
		return $this->documento;
	}

	
	public function setWha($value){
		if($this->validateId($value)){
			$this->wha = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getWha(){
		return $this->wha;
	}

	public function setTel($value){
		if($this->validateId($value)){
			$this->tel = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getTel(){
		return $this->tel;
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
	public function getClave(){
		return $this->clave;
	}

	public function setImagen($file){
		if($this->validateImage($file, $this->imagen, "../../../web/img/usuarios/", 4000, 4000)){
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
		if(unlink("../../../web/img/usuarios/".$this->imagen)){
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
		$sql = "UPDATE cliente SET contrasena = ? WHERE ID_cliente = ?";
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

	public function getClientes(){
		$sql = "SELECT ID_usuario, nombres_usuario, apellidos_usuario, correo_usuario, imagen, whatssapp FROM usuarios_anuncios  ORDER BY apellidos_usuario DESC";
		$params = array(null);
		return Database::getRows($sql, $params);
		if($user){
			$this->wha = $user['whatssapp'];
			return true;
		}else{
			return null;
		}
	}
	public function searchCliente($value){
		$sql = "SELECT ID_usuario, nombres_usuario, apellidos_usuario, correo_usuario, imagen FROM usuarios_anuncios
		 WHERE apellidos_usuario LIKE ? OR nombres_usuario LIKE ? OR correo_usuario LIKE ?  ORDER BY apellidos_usuario";
		$params = array("%$value%", "%$value%", "%$value%");
		return Database::getRows($sql, $params);
	}
	public function createCliente(){
		$hash = password_hash($this->clave, PASSWORD_DEFAULT);
		$sql = "INSERT INTO cliente(nombre, apellido, fecha_nacimiento, correo, contrasena, direccion, documento, username, FK_ID_tipo_doc, imagen_url) VALUES(?,?,?,?,?,?,?,?,?,?)";
		$params = array($this->nombres, $this->apellidos, $this->fecha_nacimiento, $this->correo, $hash, $this->direccion, $this->documento, $this->alias, $this->tipo_documento, $this->imagen);
		return Database::executeRow($sql, $params);
	}
	public function readCliente(){
		$sql = "SELECT nombres_usuario, apellidos_usuario, correo_usuario, alias_usuario,  imagen,  whatssapp, telefono FROM  usuarios_anuncios WHERE id_usuario= ?";
		$params = array($this->id);
		$user = Database::getRow($sql, $params);
		if($user){
			$this->nombres = $user['nombres_usuario'];
			$this->apellidos = $user['apellidos_usuario'];
			$this->correo = $user['correo_usuario'];
			$this->alias = $user['alias_usuario'];
			$this->imagen = $user['imagen'];
			$this->tel = $user['telefono'];
			$this->wha = $user['whatssapp'];
			return true;
		}else{
			return null;
		}
	}
	public function updateCliente(){
		$sql = "UPDATE usuarios_anuncios SET nombres_usuario = ?, apellidos_usuario = ?, correo_usuario = ?, alias_usuario = ?, imagen = ?, telefono=?, whatssapp = ? WHERE id_usuario = ? ";
		$params = array($this->nombres, $this->apellidos, $this->correo, $this->alias, $this->imagen, $this->tel, $this->wha, $this->id);
		return Database::executeRow($sql, $params);
	}
	public function deleteCliente(){
		$sql = "DELETE FROM cliente WHERE ID_cliente = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>