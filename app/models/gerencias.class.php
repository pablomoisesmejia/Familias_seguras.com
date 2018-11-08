<?php
class Gerencias extends Validator
{
    private $PK_id_gerencia = null;
	private $nombre_gerencia = null;

    public function setIdGerencia($value)
	{
		if($this->validateId($value))
		{
			$this->PK_id_gerencia = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getIdGerencia()
	{
		return $this->PK_id_gerencia;
    }

	public function setNombreGerencia($value)
	{
		if($this->validateAlphanumeric($value, 1, 35))
		{
			$this->nombre_gerencia = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getNombreGerencia()
	{
		return $this->nombre_gerencia;
	}

}
?>