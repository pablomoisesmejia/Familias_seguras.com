<?php
class Empleados extends Validator
{
    private $PK_id_empleado = null;
    private $FK_id_usuario = null;
    private $FK_id_cargo_gerencia = null;
	private $activo_reparticion = null;

    public function setIdEmpleado($value)
	{
		if($this->validateId($value))
		{
			$this->PK_id_empleado = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getIdEmpleado()
	{
		return $this->PK_id_empleado;
    }

    public function setIdUsuario($value)
	{
		if($this->validateId($value))
		{
			$this->FK_id_usuario = $value;
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

    public function setIdCargo($value)
	{
		if($this->validateId($value))
		{
			$this->FK_id_cargo_gerencia = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getIdCargo()
	{
		return $this->FK_id_cargo_gerencia;
    }

	public function setActivo($value)
	{
		if($this->validateId($value))
		{
			$this->activo_reparticion = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getActivo()
	{
		return $this->activo_reparticion;
	}

}
?>