<?php
class Cargos_gerencias extends Validator
{
    private $PK_id_cargo_gerencia = null;
    private $FK_id_gerencia = null;
	private $nombre_cargo = null;

    public function setIdCargo($value)
	{
		if($this->validateId($value))
		{
			$this->PK_id_cargo_gerencia = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getIdCargo()
	{
		return $this->PK_id_cargo_gerencia;
    }

    public function setIdGerencia($value)
	{
		if($this->validateId($value))
		{
			$this->FK_id_gerencia = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getIdGerencia()
	{
		return $this->FK_id_gerencia;
    }

	public function setNombreCargo($value)
	{
		if($this->validateAlphanumeric($value, 1, 35))
		{
			$this->nombre_cargo = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getNombreCargo()
	{
		return $this->nombre_cargo;
	}

}
?>