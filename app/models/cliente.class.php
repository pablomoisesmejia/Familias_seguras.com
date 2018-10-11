<?php
class Cliente extends Validator{
	//Declaración de propiedades
	private $id_cliente = null;
	private $nombre = null;
	private $id_tipo_cliente = null;
	private $telefono = null;
	private $correo = null;

	//Métodos para sobrecarga de propiedades
	public function setIdCliente($value)
	{
		if($this->validateId($value))
		{
			$this->id_cliente = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getIdCliente()
	{
		return $this->id_cliente;
	}


	public function setNombre($value)
	{
		if($this->validateAlphanumeric($value, 1, 50))
		{
			$this->nombre = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getNombre()
	{
		return $this->nombre;
	}

	public function setIdTipoCliente($value)
	{
		if($this->validateId($value))
		{
			$this->id_tipo_cliente = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getIdTipoCliente()
	{
		return $this->id_tipo_cliente;
	}

	public function setTelefono($value)
	{
		if($this->validateAlphanumeric($value, 1, 12))
		{
			$this->telefono = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getTelefono()
	{
		return $this->telefono;
	}

	public function setCorreo($value)
	{
		if($this->validateEmail($value))
		{
			$this->correo = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getCorreo()
	{
		return $this->correo;
	}

	public function createCliente()
	{
		$sql = "INSERT INTO clientes(nombre_completo, FK_ID_tipo_cliente, telefono, correo) VALUES(?, ?, ?, ?)";
		$params = array($this->nombre, $this->id_tipo_cliente, $this->telefono, $this->correo);
		$cliente = Database::executeRow($sql, $params);
		if($cliente)
		{
			$this->id_cliente = Database::getLastRowId();
		}
	}
}
?>