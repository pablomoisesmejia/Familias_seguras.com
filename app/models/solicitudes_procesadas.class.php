<?php
class Solicitudes_procesadas extends Validator
{
    private $PK_id_solicitud_procesada = null;
    private $FK_id_cantidad_solicitud_dia = null;
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
		WHERE e.PK_id_empleado = ? AND csd.'.$dia.' > 0';
		$params = array($this->FK_id_empleado);
		return Database::getRow($sql, $params);
	}
	//FIN DE LAS FUNCIONES PARA LAS TAREAS PROGRAMADAS

}
?>