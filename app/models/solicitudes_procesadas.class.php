<?php
class Solicitudes_procesadas extends Validator
{
    private $PK_id_solicitud_procesada = null;
	private $FK_id_cantidad_solicitud_dia = null;
	private $FK_id_tipo_seguro = null;
    private $FK_id_empleado = null;

    public function setIdSolicitud($value)
	{
		if($this->validateId($value))
		{
			$this->PK_id_solicitud_procesada = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getIdSolicitud()
	{
		return $this->PK_id_solicitud_procesada;
    }

    public function setIdCantidad($value)
	{
		if($this->validateId($value))
		{
			$this->FK_id_cantidad_solicitud_dia = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getIdCantidad()
	{
		return $this->FK_id_cantidad_solicitud_dia;
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

	public function setIdEmpleado($value)
	{
		if($this->validateId($value))
		{
			$this->FK_id_empleado = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getIdEmpleado()
	{
		return $this->FK_id_empleado;
	}

	//FUNCIONES PARA LAS TAREAS PROGRAMADAS
	public function getEmpleadosVentas()
	{
		$sql = 'SELECT e.PK_id_empleado, e.FK_id_usuario, e.FK_id_cargo_gerencia, e.activo_reparticion, es.estado
		FROM empleados e 
        INNER JOIN usuarios u ON e.FK_id_usuario = u.PK_id_usuario
        INNER JOIN estados es ON u.FK_id_estado = es.PK_id_estado
		INNER JOIN solicitudes_procesadas sp ON e.PK_id_empleado = sp.FK_id_empleado
		INNER JOIN tipos_seguro ts ON sp.FK_id_tipo_seguro = ts.PK_id_tipo_seguro
		INNER JOIN cargos_gerencias cg ON e.FK_id_cargo_gerencia = cg.PK_id_cargo_gerencia
		WHERE cg.nombre_cargo = "ejecutivo de ventas" AND ts.PK_id_tipo_seguro = ? ';
		$params = array($this->FK_id_tipo_seguro);
		return Database::getRows($sql, $params);
	}

	public function getDiasxEmpleado($dia)
	{
		$sql = 'SELECT csd.PK_id_cantidad_solicitud_dias, csd.lunes, csd.martes, csd.miercoles, csd.jueves, csd.viernes, csd.sabado, csd.domingo, 
		csd.cant_lunes, csd.cant_martes, csd.cant_miercoles, csd.cant_jueves, csd.cant_viernes, csd.cant_sabado, csd.cant_domingo, 
		csd.cant_castigo_lunes, csd.cant_castigo_martes, csd.cant_castigo_miercoles, csd.cant_castigo_jueves, csd.cant_castigo_viernes, csd.cant_castigo_sabado, csd.cant_castigo_domingo, 
		csd.fecha_castigo_lunes, csd.fecha_castigo_martes, csd.fecha_castigo_miercoles, csd.fecha_castigo_jueves, csd.fecha_castigo_viernes, csd.fecha_castigo_sabado, csd.fecha_castigo_domingo, 
		es.estado, sp.FK_id_tipo_seguro
		FROM cantidad_solicitud_dias csd 
		INNER JOIN solicitudes_procesadas sp ON csd.PK_id_cantidad_solicitud_dias = sp.FK_id_cantidad_solicitud_dia 
		INNER JOIN empleados e ON sp.FK_id_empleado = e.PK_id_empleado 
		INNER JOIN usuarios u ON e.FK_id_usuario = u.PK_id_usuario 
		INNER JOIN estados es ON u.FK_id_estado = es.PK_id_estado
		WHERE e.PK_id_empleado = ? AND csd.'.$dia.' > 0 AND sp.FK_id_tipo_seguro = ?';
		$params = array($this->FK_id_empleado, $this->FK_id_tipo_seguro);
		return Database::getRows($sql, $params);
	}

	//FIN DE LAS FUNCIONES PARA LAS TAREAS PROGRAMADAS

}
?>