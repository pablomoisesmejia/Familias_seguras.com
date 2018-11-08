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

	public function setEmpleado($value)
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
	public function getEmpleado()
	{
		return $this->FK_id_empleado;
	}

}
?>