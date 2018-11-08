<?php
class Estados_correo extends Validator
{
    private $PK_id_estado_correo = null;
	private $estado_correo = null;

    public function setIdEstado($value)
	{
		if($this->validateId($value))
		{
			$this->PK_id_estado_correo = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getIdEstado()
	{
		return $this->PK_id_estado_correo;
    }

	public function setEstadoCorreo($value)
	{
		if($this->validateAlphanumeric($value, 1, 40))
		{
			$this->estado_correo = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getEstadoCorreo()
	{
		return $this->estado_correo;
	}

}
?>