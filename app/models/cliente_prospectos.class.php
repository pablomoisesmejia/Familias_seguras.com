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

	public function setCantidadPagos($value)
	{
		if($this->validateAlphanumeric($value, 1, 30))
		{
			$this->cantidad_pagos = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getCantidadPagos()
	{
		return $this->cantidad_pagos;
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
	
	//FUNCIONES PARA LAS TAREAS PROGRAMADAS
	public function getClientesProspectos()
	{
		$sql = 'SELECT PK_id_cliente_prospecto, FK_id_usuario, FK_id_tipo_seguro, hora_contactarle, cantidad_pagos, forma_pago, fecha_cita, hora_cita, fecha_aceptacion, asignacion 
		FROM clientes_prospectos 
		WHERE asignacion = 0';
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	//FIN DE FUNCIONES PARA LAS TAREAS PROGRAMADAS

	//FUNCIONES PARA EL SCRUD
	public function createClienteProspecto()
	{
		$sql = "INSERT INTO clientes_prospectos(FK_id_usuario, FK_id_tipo_seguro, hora_contactarle, cantidad_pagos, forma_pago, fecha_cita, hora_cita, fecha_aceptacion) 
		VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
		$params = array($this->FK_id_usuario, $this->FK_id_tipo_seguro, $this->hora_contactarle, $this->cantidad_pagos, $this->forma_pago, $this->fecha_cita, $this->hora_cita, $this->fecha_aceptacion);
		$cliente_prospecto = Database::executeRow($sql, $params);
		if($cliente_prospecto)
		{
			$this->PK_id_cliente_prospecto = Database::getLastRowId();
		}
	}
}
?>