<?php
class Valoracion extends Validator{
    //Declaración de propiedades

    private $id = null;
    private $id_usuario = null;
    private $id_producto = null;
    private $valoracion= null;
    private $comentario = null;
    private $fecha = null;


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
    
    public function setId_usuario($value){
		if($this->validateId($value)){
			$this->id_usuario = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId_usuario(){
		return $this->id_usuario;
    }
    
    public function setId_producto($value){
		if($this->validateId($value)){
			$this->id_producto = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId_producto(){
		return $this->id_producto;
    }
    
    
	public function setValoracion($value){
		if($this->validateNumeric($value, 1, 11)){
			$this->valoracion = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getValoracion(){
		return $this->valoracion;
    }
    
    public function setComentario($value){
		if($this->validateAlphanumeric($value, 1, 200)){
			$this->comentario = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getComentario(){
		return $this->comentario;
    }
    
    // metodos para manejar el crud
    public function checkValoraciones(){
        $sql = "SELECT round(AVG(valoracion),1) AS estrellas  FROM valoracion WHERE FK_ID_producto = ?";
        $params = array($this->id_producto);
        $valoraciones = Database::getRow($sql, $params);
        if($valoraciones){
            $this->valoracion = $valoraciones['estrellas'];
            return true;
		}else{
			return null;
        }
	}

	public function getValoracionporproducto(){
		$sql = "SELECT valoracion.ID_valoracion, cliente.nombre,  valoracion.valoracion, valoracion.comentario FROM valoracion
		INNER JOIN cliente ON valoracion.FK_ID_cliente = cliente.ID_cliente
		WHERE valoracion.FK_ID_producto = ?";
		$params = array($this->id_producto);
		
		return Database::getRows($sql, $params);
	}
	public function readValoracion(){
		$sql = "SELECT valoracion.FK_ID_cliente,valoracion.valoracion, valoracion.comentario, valoracion.FK_ID_producto,valoracion.fecha 
        FROM valoracion WHERE valoracion.ID_valoracion = ?";
		$params = array($this->id);
		$valoracion = Database::getRow($sql, $params);
		if($valoracion){
			$this->id_usuario = $valoracion['fk_id_usuario'];
			$this->valoracion = $valoracion['valoracion'];
			$this->comentario = $valoracion['comentario'];
			$this->id_producto = $valoracion['fk_id_producto'];
			return true;
		}else{
			return null;
		}
	}
	
    public function mostrarComentarios(){
        $sql = "SELECT cliente.nombre,cliente.apellido,valoracion.comentario,valoracion.fecha 
        FROM valoracion 
        INNER JOIN cliente ON valoracion.FK_ID_cliente = cliente.ID_cliente
        WHERE valoracion.FK_ID_producto = ?";
        $params = array($this->id_producto);
        return Database::getRows($sql, $params);
    }

    public function createValoracion(){
        $sql = "INSERT INTO valoracion(FK_ID_cliente, FK_ID_producto , valoracion, comentario) VALUES (?, ?, ?, ?)";
        $params = array($this->id_usuario,$this->id_producto,$this->valoracion,$this->comentario);
        return Database::executeRow($sql, $params);
	} 
	
	public function deleteValoracion(){
		$sql = "DELETE FROM valoracion WHERE ID_valoracion = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>