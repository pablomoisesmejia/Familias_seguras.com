<?php
class Categoria extends Validator{
    //Declaracion de proipedades 
    private $id = null;
	private $nombre = null;
	private $imagen_url = null;
    private $descripcion = null;
    private $estado = null;
    //mmetodos para poder llenar las propiedades
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

    public function setNombre($value){
			if($this->validateAlphanumeric($value, 1, 100)){
				$this->nombre = $value;
				return true;
			}else{
				return false;
						}
    }
    public function getNombre(){
		return $this->nombre;
	}
	
	
	public function setImagen($file){
		if($this->validateImage($file, $this->imagen, "../../web/img/categoria/", 300000, 300000)){
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
		if(unlink("../../web/img/categoria/".$this->imagen)){
			$this->imagen = null;
			return true;
		}else{
			return false;
		}
	}
    
	public function setDescripcion($value){
		if($value){
			if($this->validateAlphanumeric($value, 1, 200)){
				$this->descripcion = $value;
				return true;
			}else{
				return false;
			}
		}else{
			$this->descripcion = null;
			return true;
		}		
	}
	public function getDescripcion(){
		return $this->descripcion;
    }

	public function setEstado($value){
		if($value){
			if($this->validateAlphanumeric($value, 1, 200)){
				$this->estado = $value;
				return true;
			}else{
				return false;
			}
		}else{
			$this->estado = null;
			return true;
		}		
	}
	public function getEstado(){
		return $this->estado;
	}


	//Metodos para el manejo del CRUD
	public function getCategorias(){
		$sql = "SELECT ID_categoria, nombre_categoria,descripcion_categoria, imagen_url, Estado FROM categoria ORDER BY nombre_categoria";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	
	public function searchCategoria($value){
		$sql = "SELECT ID_categoria, nombre_categoria, imagen_url, Estado
				FROM categoria WHERE nombre_categoria LIKE ? ORDER BY nombre_categoria";
		$params = array("%$value%");
		return Database::getRows($sql, $params);
	}
	public function createCategoria(){
		$sql = "INSERT INTO categoria(nombre_categoria, imagen_url,  Estado) VALUES(?,?,?)";
		$params = array($this->nombre, $this->imagen,  1);	
		return Database::executeRow($sql, $params);
	}
	public function readCategoria(){
		$sql = "SELECT nombre_categoria, imagen_url, Estado FROM categoria WHERE ID_categoria = ?";
		$params = array($this->id);
		$categoria = Database::getRow($sql, $params);
		if($categoria){
			$this->nombre = $categoria['nombre_categoria'];
			$this->imagen = $categoria['imagen_url'];
			$this->estado = $categoria['Estado'];
			$this->imagen_url = $categoria['imagen_url'];
			
			return true;
		}else{
			return null;
		}
	}
	public function updateCategoria(){
		$sql = "UPDATE categoria SET nombre_categoria = ?, imagen_url = ?, Estado = ? WHERE ID_categoria = ?";
		$params = array($this->nombre, $this->imagen, $this->estado, $this->id);
		return Database::executeRow($sql, $params);
	}
	public function deleteCategoria(){
		$sql = "DELETE FROM categoria WHERE ID_categoria = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>