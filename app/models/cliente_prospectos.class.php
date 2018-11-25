<?php
class Cliente_Prospecto extends Validator
{
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
	private $asignacion = 0;

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

	public function setAsignacion($value)
	{
		if($this->validateId($value))
		{
			$this->asignacion = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getAsignacion()
	{
		return $this->asignacion;
	}
	
	//FUNCIONES PARA LAS TAREAS PROGRAMADAS
	public function getClientesProspectos()
	{
		$sql = 'SELECT PK_id_cliente_prospecto, FK_id_usuario, FK_id_tipo_seguro, hora_contactarle, cantidad_pagos, forma_pago, fecha_cita, hora_cita, fecha_aceptacion, asignacion 
		FROM clientes_prospectos 
		WHERE asignacion = 0 AND FK_id_tipo_seguro = ?';
		$params = array($this->FK_id_tipo_seguro);
		return Database::getRows($sql, $params);
	}

	public function updateAsignacion()
	{
		$sql = 'UPDATE clientes_prospectos SET asignacion = ? WHERE PK_id_cliente_prospecto = ?';
		$params = array($this->asignacion, $this->PK_id_cliente_prospecto);
		return Database::executeRow($sql, $params);
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

	public function getClientes()
	{
		$sql = 'SELECT cp.hora_contactarle, cp.cantidad_pagos, ts.tipo_seguro, u.nombres, u.apellidos, u.correo, u.fecha_nacimiento, u.telefono, u.whatsapp, u.celular 
		FROM clientes_prospectos cp INNER JOIN usuarios u ON cp.FK_id_usuario = u.PK_id_usuario 
		INNER JOIN tipos_seguro ts ON cp.FK_id_tipo_seguro = ts.PK_id_tipo_seguro 
		WHERE cp.PK_id_cliente_prospecto = ?';
		$params = array($this->PK_id_cliente_prospecto);
		return Database::getRow($sql, $params);
	}

	public function getCompaniasInteres()
	{
		$sql = 'SELECT ci.compania_interes, ci.numero_seleccion 
		FROM clientes_prospectos cp INNER JOIN companias_interes ci ON cp.PK_id_cliente_prospecto = ci.FK_id_cliente_prospecto 
		WHERE cp.PK_id_cliente_prospecto = ?';
		$params = array($this->PK_id_cliente_prospecto);
		return Database::getRows($sql, $params);
	}

	public function getSeguroVidaCliente()
	{
		$sql = 'SELECT c.* 
		FROM clientes_prospectos cp INNER JOIN cotizaciones_vida c ON cp.PK_id_cliente_prospecto = c.FK_id_cliente_prospecto
		WHERE cp.PK_id_cliente_prospecto = ?';
		$params = array($this->PK_id_cliente_prospecto);
		return Database::getRow($sql, $params);
	}
	
	public function getSeguroMedicoCliente()
	{
		$sql = 'SELECT c.* 
		FROM clientes_prospectos cp INNER JOIN cotizaciones_medico_hosp c ON cp.PK_id_cliente_prospecto = c.FK_id_cliente_prospecto 
		WHERE cp.PK_id_cliente_prospecto = ?';
		$params = array($this->PK_id_cliente_prospecto);
		return Database::getRow($sql, $params);
	}

	public function getSeguroIncendioCliente()
	{
		$sql = 'SELECT c.* 
		FROM clientes_prospectos cp INNER JOIN cotizaciones_incendios c ON cp.PK_id_cliente_prospecto = c.FK_id_cliente_prospecto
		WHERE cp.PK_id_cliente_prospecto = ?';
		$params = array($this->PK_id_cliente_prospecto);
		return Database::getRow($sql, $params);
	}

	public function getSeguroVehiculosCliente()
	{
		$sql = 'SELECT mar.marca_vehiculo, mv.modelos_vehiculo, c.anio, ov.origen_vehiculo, c.valor, c.placa
		FROM clientes_prospectos cp INNER JOIN cotizaciones_vehiculos c ON cp.PK_id_cliente_prospecto = c.FK_id_cliente_prospecto 
		INNER JOIN modelos_vehiculos mv ON c.FK_id_modelo_vehiculo = mv.PK_id_modelo_vehiculo 
		INNER JOIN marcas_vehiculos mar ON mv.FK_id_marca_vehiculo = mar.PK_id_marca_vehiculo 
		INNER JOIN origenes_vehiculo ov ON c.FK_id_origen_vehiculo = ov.PK_id_origen_vehiculo
		WHERE cp.PK_id_cliente_prospecto = ?';
		$params = array($this->PK_id_cliente_prospecto);
		return Database::getRows($sql, $params);
	}

	public function getClientesProspectos2()
	{
		$sql = 'SELECT * FROM solicitudes, clientes_prospectos, usuarios, tipos_seguro, estado_solicitud WHERE (solicitudes.FK_id_cliente_prospecto = clientes_prospectos.PK_id_cliente_prospecto AND clientes_prospectos.FK_id_usuario = usuarios.PK_id_usuario AND clientes_prospectos.FK_id_tipo_seguro = tipos_seguro.PK_id_tipo_seguro AND estado_solicitud.PK_id_estado_solicitud = solicitudes.FK_id_estado_solicitud) AND FK_id_estado_solicitud = 1';
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	
	public function searchProspecto($value){
		$sql = 'SELECT * FROM solicitudes, clientes_prospectos, usuarios, tipos_seguro WHERE (solicitudes.FK_id_cliente_prospecto = clientes_prospectos.PK_id_cliente_prospecto AND clientes_prospectos.FK_id_usuario = usuarios.PK_id_usuario AND clientes_prospectos.FK_id_tipo_seguro = tipos_seguro.PK_id_tipo_seguro) AND (FK_id_estado_solicitud = 1) AND (nombres = ? OR apellidos = ?)';
		$params = array("%$value%", "%$value%");
		return Database::getRows($sql, $params);
	}

	public function getClientesProspectosTodo()
	{
		$sql = 'SELECT * FROM solicitudes, clientes_prospectos, usuarios, tipos_seguro, estado_solicitud WHERE (solicitudes.FK_id_cliente_prospecto = clientes_prospectos.PK_id_cliente_prospecto AND clientes_prospectos.FK_id_usuario = usuarios.PK_id_usuario AND clientes_prospectos.FK_id_tipo_seguro = tipos_seguro.PK_id_tipo_seguro AND estado_solicitud.PK_id_estado_solicitud = solicitudes.FK_id_estado_solicitud)';
		$params = array(null);
		return Database::getRows($sql, $params);
	}

	public function getClientesProspectos3()
	{
		$sql = 'SELECT * FROM solicitudes, clientes_prospectos, usuarios, tipos_seguro, estado_solicitud WHERE (solicitudes.FK_id_cliente_prospecto = clientes_prospectos.PK_id_cliente_prospecto AND clientes_prospectos.FK_id_usuario = usuarios.PK_id_usuario AND clientes_prospectos.FK_id_tipo_seguro = tipos_seguro.PK_id_tipo_seguro AND estado_solicitud.PK_id_estado_solicitud = solicitudes.FK_id_estado_solicitud) AND FK_id_estado_solicitud = 2';
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	
	public function searchProspecto2($value){
		$sql = 'SELECT * FROM solicitudes, clientes_prospectos, usuarios, tipos_seguro WHERE (solicitudes.FK_id_cliente_prospecto = clientes_prospectos.PK_id_cliente_prospecto AND clientes_prospectos.FK_id_usuario = usuarios.PK_id_usuario AND clientes_prospectos.FK_id_tipo_seguro = tipos_seguro.PK_id_tipo_seguro) AND (FK_id_estado_solicitud = 2) AND (nombres = ? OR apellidos = ?)';
		$params = array("%$value%", "%$value%");
		return Database::getRows($sql, $params);
	}
}
?>