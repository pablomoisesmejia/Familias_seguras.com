<?php
class Anuncio extends Validator{
    // Declaramos la variables de entorno 
    
    Private $id = null;
    Private $nombre_anunciante = null;
    Private $correo = null;
    Private $telefono = null;
    Private $direccion = null;
    Private $imagen_url = null;
    Private $empresa_url = null;
    Private $estado =  null;

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
    
    public function setNombre_anunciante($value){
			if($this->validateAlphanumeric($value, 1, 100)){
				$this->nombre_anunciante = $value;
				return true;
			}else{
				return false;
			}
		}
		public function getNombre(){
			return $this->nombre_anunciante;
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
			
			public function setTelefono($value){
			if($this->validateNumeric($value,1,8)){
				$this->telefono = $value;
				return true;
			}else{
				return false;
			}
		}
		public function getTelefono(){
			return $this->telefono;
			}

			public function setDireccion($value){
				if($this->validateAlphanumeric($value,1,300)){
					$this->direccion = $value;
					return true;
				}else{
					return false;
				}
			}
			public function getDireccion(){
				return $this->direccion;
				}

			public function setImagen($file){
				if($this->validateImage($file, $this->imagen_url, "../../web/img/ANUNCIOS/", 900, 365)){ 
					$this->imagen_url = $this->getImageName();
					return true;
				}else{
					return false;
				}
			}
			public function getImagen(){
				return $this->imagen_url;
			}
			public function unsetImagen(){
				if(unlink("../../web/img/productos/".$this->imagen_url)){
					$this->imagen_url = null;
					return true;
				}else{
					return false;
				}
			}


			public function setEmpresaurl($value){
				if($this->filtroUrl($value)){
					$this->empresa_url = $value;
					return true;
				}else{
					return false;
				}
			}
			public function getEmpresaurl(){
				return $this->empresa_url;
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


				public function getAnuncios(){
					$sql = "select * from anuncios";
					$params = array(null);
					return Database::getRows($sql, $params);
				}

				public function searchAnuncio($value){
					$sql = "SELECT *
							FROM anuncios WHERE nombre_anunciante LIKE ? ORDER BY nombre_anunciante";
					$params = array("%$value%");
					return Database::getRows($sql, $params);
				}



				public function createAnuncio(){
					$sql = "INSERT INTO anuncios ( nombre_anunciante, correo, telefono, direccion, imagen_url, empresa_url, estado) VALUES (?, ?, ?, ?, ?, ?, ?)";
					$params = array($this->nombre_anunciante,$this->correo ,$this->telefono ,$this->direccion,$this->imagen_url,$this->empresa_url ,1);	
					return Database::executeRow($sql, $params);
				} 
    
    


}



?>