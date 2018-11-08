<?php
class Cliente_Prospecto extends Validator{
	//Declaración de propiedades
	private $PK_id_cliente_prospecto = null;
	private $FK_id_usuario = null;
	private $FK_id_tipo_seguro = null;
	private $hora_contactarle = null;
	private $cantidad_pagos = null;
	private $forma_pago = null;
	private $fecha_cita = null;
	private $hora_cita = null;
	private $fecha_aceptacion = null;

	//Métodos para sobrecarga de propiedades
	public function setIdClienteProspecto($value)
	{
		if($this->validateId($value))
		{
			$this->PK_id_cliente_prospecto = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getIdClienteProspecto()
	{
		return $this->PK_id_cliente_prospecto;
	}

	public function setIdUsuario($value)
	{
		if($this->validateId($value))
		{
			$this->FK_id_usuario= $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getIdUsuario()
	{
		return $this->FK_id_usuario;
	}

	public function setIdTipoSeguro($value)
	{
		if($this->validateId($value))
		{
			$this->FK_id_tipo_seguro = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getIdTipoSeguro()
	{
		return $this->FK_id_tipo_seguro;
	}

	public function setHoraContactarle($value)
	{
		if($this->validateAlphanumeric($value, 1, 30))
		{
			$this->hora_contactarle = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getHoraContactarle()
	{
		return $this->hora_contactarle;
	}

	public function setFormaPago($value)
	{
		if($this->validateAlphanumeric($value, 1, 30))
		{
			$this->forma_pago = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getFormaPago()
	{
		return $this->forma_pago;
	}

	public function setFechaCita($value)
	{
		if($this->validateAlphanumeric($value, 1, 10))
		{
			$this->fecha_cita = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getFechaCita()
	{
		return $this->fecha_cita;
	}

	public function setHoraCita($value)
	{
		if($this->validateAlphanumeric($value, 1, 10))
		{
			$this->hora_cita = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getHoraCita()
	{
		return $this->hora_cita;
	}

	public function setFechaAceptacion($value)
	{
		if($this->validateAlphanumeric($value, 1, 10))
		{
			$this->fecha_aceptacion = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getFechaAceptacion()
	{
		return $this->fecha_aceptacion;
	}
	

	/*public function createCliente()
	{
		$sql = "INSERT INTO clientes(nombre_completo, FK_ID_tipo_cliente, telefono, correo) VALUES(?, ?, ?, ?)";
		$params = array($this->nombre, $this->id_tipo_cliente, $this->telefono, $this->correo);
		$cliente = Database::executeRow($sql, $params);
		if($cliente)
		{
			$this->id_cliente = Database::getLastRowId();
		}
	}*/
}
?>