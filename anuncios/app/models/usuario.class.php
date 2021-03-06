<?php
class Usuario extends Validator{
	//Declaración de propiedades
	private $id = null;
	private $nombres = null;
	private $apellidos = null;
	private $correo = null;
	private $alias = null;
	private $clave = null;
	private $tel = null;
	private $wha = null;

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
	public function setWha($value){
		if($this->validateId($value, 1,8)){
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
		if($this->validateId($value, 1,8)){
			$this->tel = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getTel(){
		return $this->tel;
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

	//Métodos para manejar la sesión del usuario
	public function checkAlias(){
		$sql = "SELECT id_usuario FROM usuarios_anuncios WHERE alias_usuario = ?";
		$params = array($this->alias);
		$data = Database::getRow($sql, $params);
		if($data){
			$this->id = $data['id_usuario'];
			return true;
		}else{
			return false;
		}
	}
	public function checkPassword(){
		$sql = "SELECT clave_usuario FROM usuarios_anuncios WHERE id_usuario = ?";
		$params = array($this->id);
		$data = Database::getRow($sql, $params);
		if($data)
        {
            if(strlen($data['clave_usuario']) == 60)
            {
                if(password_verify($this->clave, $data['clave_usuario']))
                {
                    return true;
                }
                else
                {
                    return false;
                }
            }
            else
            {
                if($this->clave == $data['clave_usuario'])
                {
					$this->clave = $data['clave_usuario'];
					$this->changePassword();
                    return true;
                }
                else
                {
                    return false;
                }                
            }			
        }
        else
        {
			return false;
		}
	}
	public function changePassword(){
		$hash = password_hash($this->clave, PASSWORD_DEFAULT);
		$sql = "UPDATE usuarios_anuncios SET clave_usuario = ? WHERE id_usuario = ?";
		$params = array($hash, $this->id);
		return Database::executeRow($sql, $params);
	}
	public function logOut(){
		return session_destroy();
	}

	//Metodos para manejar el CRUD
	public function getUsuarios(){
		$sql = "SELECT id_usuario, nombres_usuario, apellidos_usuario, correo_usuario, alias_usuario FROM usuarios_anuncios ORDER BY apellidos_usuario";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function searchUsuario($value){
		$sql = "SELECT id_usuario, nombres_usuario, apellidos_usuario, correo_usuario, alias_usuario FROM usuarios_anuncios WHERE apellidos_usuario LIKE ? OR nombres_usuario LIKE ? ORDER BY apellidos_usuario";
		$params = array("%$value%", "%$value%");
		return Database::getRows($sql, $params);
	}
	public function createUsuario(){
		$hash = password_hash($this->clave, PASSWORD_DEFAULT);
		$sql = "INSERT INTO usuarios_anuncios(nombres_usuario, apellidos_usuario, correo_usuario, alias_usuario, clave_usuario, telefono, whatssapp) VALUES(?, ?, ?, ?, ?, ?, ?)";
		$params = array($this->nombres, $this->apellidos, $this->correo, $hash, $this->alias, $this->tel, $this->wha);
		return Database::executeRow($sql, $params);
	}
	public function readUsuario(){
		$sql = "SELECT nombres_usuario, apellidos_usuario, correo_usuario, alias_usuario FROM usuarios_anuncios WHERE id_usuario = ?";
		$params = array($this->id);
		$user = Database::getRow($sql, $params);
		if($user){
			$this->nombres = $user['nombres_usuario'];
			$this->apellidos = $user['apellidos_usuario'];
			$this->correo = $user['correo_usuario'];
			$this->alias = $user['alias_usuario'];
			return true;
		}else{
			return null;
		}
	}
	public function updateUsuario(){
		$sql = "UPDATE usuarios_anuncios SET nombres_usuario = ?, apellidos_usuario = ?, correo_usuario = ?, alias_usuario = ? WHERE id_usuario = ?";
		$params = array($this->nombres, $this->apellidos, $this->correo, $this->alias, $this->id);
		return Database::executeRow($sql, $params);
	}
	public function deleteUsuario(){
		$sql = "DELETE FROM usuarios_anuncios WHERE id_usuario = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>