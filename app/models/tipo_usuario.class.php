<?php
class Tipo_usuario extends Validator{
	//Declaración de Variables
	private $id_tipo_cliente = null;
	private $tipo_cliente = null;

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

	public function setTipoCliente($value)
	{
		if($this->validateAlphanumeric($value, 1, 100))
		{
			$this->tipo_cliente = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getTipoCliente()
	{
		return $this->tipo_cliente;
	}
}
?>