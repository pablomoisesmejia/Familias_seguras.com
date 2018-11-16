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
	private $tipo_team =  null;
	private $tipo_estado =  null;
	private $estado =  null;
	private $imagen =  null;
	private $Fecha_Nac = null;
	private $telefono = null;
	private $celular = null;
	private $whatsapp = null;
	
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
	public function setCelular($value){
		if($this->validateAlphanumeric($value, 8,12)){
			$this->celular = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getCelular(){
		return $this->celular;
	}
	public function setTelefono($value){
		if($this->validateAlphanumeric($value, 8,12)){
			$this->telefono = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getTelefono(){
		return $this->telefono;
	}
	public function setWhatsapp($value){
		if($this->validateAlphanumeric($value, 8,12)){
			$this->telefono = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getWhatsapp(){
		return $this->telefono;
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

	public function setFecha_Nac($value){
		if($this->validateDate($value)){
			$this->Fecha_Nac = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getFecha_Nac(){
		$cadena = $this->Fecha_Nac;
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

	public function setTipoTeam($value){
		if($this->validateId($value)){
			$this->tipo_team = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getTipoTeam(){
		return $this->tipo_team;
	}
	public function setTipoEstado($value){
		if($this->validateId($value)){
			$this->tipo_estado = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getTipoEstado(){
		return $this->tipo_estado;
	}

	//Métodos para manejar la sesión del usuario
	public function checkCorreo(){
		$sql = "SELECT PK_id_usuario FROM usuarios WHERE correo = ?";
		$params = array($this->correo);
		$data = Database::getRow($sql, $params);
		if($data){
			$this->id = $data['PK_id_usuario'];
			return true;
		}else{
			return false;
		}
	}
	public function checkPassword(){
		$sql = "SELECT clave, nombres, apellidos, correo, direccion FROM Usuarios WHERE PK_id_usuario = ?";
		$params = array($this->id);
		$data = Database::getRow($sql, $params);
		if(password_verify($this->clave, $data['clave'])){
			$this->nombres = $data['nombres'];	
			$this->apellidos = $data['apellidos'];
			$this->correo = $data['correo'];
			$this->direccion = $data['direccion'];
			return true;
		}else{
			return false;
		}
	}
	public function changePassword(){
		$hash = password_hash($this->clave, PASSWORD_DEFAULT);
		$sql = "UPDATE administrador SET contrasena = ? WHERE ID_admin = ?";
		$params = array($hash, $this->id);
		return Database::executeRow($sql, $params);
	}
	public function logOut(){
		return session_destroy();
	}

	//Metodos para manejar el CRUD
	public function getTipo_Team(){
		$sql = "SELECT PK_id_tipo_team, tipo_team FROM tipos_team";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function getTipo_Estado(){
		$sql = "SELECT PK_id_estado, estado FROM estados";
		$params = array(null);
		return Database::getRows($sql, $params);
	}

	public function getUsuarios(){
		$sql = "SELECT PK_id_usuario, nombres, apellidos, correo FROM usuarios ";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function getUsuariosII(){
		$sql = "SELECT PK_id_usuario, nombres, apellidos, correo FROM Usuarios where PK_id_usuario != ? and fk_id_tipo_team=1 ORDER BY apellidos ";
		$params = array($this->id);
		//print_r($params);
		return Database::getRows($sql, $params);
	}
	public function getUsuariosfs(){
		$sql = "SELECT PK_id_usuario, nombres, apellidos, correo, FK_id_tipo_team FROM Usuarios where PK_id_usuario != ? and fk_id_tipo_team=1 ORDER BY apellidos ";
		$params = array($this->id);
		//print_r($params);
		return Database::getRows($sql, $params);
	}
	public function getTeams(){
		$sql = "SELECT PK_id_tipo_team, tipo_team FROM tipos_team  ORDER BY PK_id_tipo_team ";
		$params = array($this->id);
		//print_r($params);
		return Database::getRows($sql, $params);
	}
	public function searchUsuario($value){
		$sql = "SELECT PK_id_usuario, nombres, apellidos, correo FROM Usuarios WHERE apellidos LIKE ? OR nombres LIKE ?  AND PK_id_usuario != ? and fk_id_tipo_team=1 ORDER BY apellido";
		$params = array("%$value%", "%$value%", $this->id);
		return Database::getRows($sql, $params);
	}
	public function createUsuario(){
		$hash = password_hash($this->clave, PASSWORD_DEFAULT);
		$sql = "INSERT INTO administrador(nombre, apellido, fecha_nac, correo, contrasena, imagen_url, direccion, documento, username, FK_ID_tipo_doc, estado) VALUES(?,?,?,?,?,?,?,?,?,?,?)";
		$params = array($this->nombres, $this->apellidos, $this->Fecha_Nac, $this->correo, $hash,  $this->imagen , $this->direccion, $this->documento, $this->alias, $this->tipo_documento, 1);
		return Database::executeRow($sql, $params);
	}
	public function readUsuariofs($PK_id_usuario){
		$sql = "SELECT nombres, apellidos, correo,  direccion, FK_id_tipo_team, FK_id_estado, telefono, celular, whatsapp, FROM usuarios WHERE PK_id_usuario = ?";
		$params = array($this->id);
		$user = Database::getRow($sql, $params);
		if($user){
			$this->nombres = $user['nombre'];
			$this->apellidos = $user['apellido'];
			$this->correo = $user['correo'];
			$this->tipo_team = $user['FK_id_tipo_team'];
			$this->tipo_estado = $user['FK_id_estado'];
			$this->telefono = $user['telefono'];
			$this->celular = $user['celular'];
			$this->whatsapp = $user['whatsapp'];
			return true;
		}else{
			return null;
		}
	}
	public function updateUsuario(){
		$sql = "UPDATE administrador SET nombre = ?, apellido = ?, correo = ?, username = ?, fecha_nac =? , direccion=?, documento=?, imagen_url=? WHERE ID_admin = ?";
		$params = array($this->nombres, $this->apellidos, $this->correo, $this->alias, $this->Fecha_Nac,$this->direccion,$this->documento, $this->imagen, $this->id);
		return Database::executeRow($sql, $params);
	}
	public function deleteUsuario(){
		$sql = "DELETE FROM administrador WHERE ID_admin = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>