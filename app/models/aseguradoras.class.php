<?php
class Aseguradoras extends Validator
{
    private $PK_id_aseguradora = null;
	private $nombre_aseguradora = null;

    public function setIdAseguradora($value)
	{
		if($this->validateId($value))
		{
			$this->PK_id_aseguradora = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getIdAseguradora()
	{
		return $this->PK_id_aseguradora;
    }

	public function setNombreAseguradora($value)
	{
		if($this->validateAlphanumeric($value, 1, 30))
		{
			$this->nombre_aseguradora = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getNombreAseguradora()
	{
		return $this->nombre_aseguradora;
	}

}
?>