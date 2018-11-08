<?php
class Tipos_team extends Validator
{
    private $PK_id_tipo_team = null;
	private $tipo_team = null;

    public function setIdTipo($value)
	{
		if($this->validateId($value))
		{
			$this->PK_id_tipo_team = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getIdTipo()
	{
		return $this->PK_id_tipo_team;
    }

	public function setTipoTeam($value)
	{
		if($this->validateAlphanumeric($value, 1, 50))
		{
			$this->tipo_team = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getTipoTeam()
	{
		return $this->tipo_team;
	}

}
?>