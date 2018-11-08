<?php
class Estados extends Validator
{
    private $PK_id_estado = null;
	private $estado = null;

    public function setIdEstado($value)
	{
		if($this->validateId($value))
		{
			$this->PK_id_estado = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getIdEstado()
	{
		return $this->PK_id_estado;
    }

	public function setEstado($value)
	{
		if($this->validateAlphanumeric($value, 1, 50))
		{
			$this->estado = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getEstado()
	{
		return $this->estado;
	}

}
?>