<?php
class Primas extends Validator
{
    private $PK_id_prima = null;
    private $FK_id_cuadro_comparativo = null;
	private $prima = null;

    public function setIdPrima($value)
	{
		if($this->validateId($value))
		{
			$this->PK_id_prima = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getIdPrima()
	{
		return $this->PK_id_prima;
    }

    public function setIdCuadro($value)
	{
		if($this->validateId($value))
		{
			$this->FK_id_cuadro_comparativo = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getIdCuadro()
	{
		return $this->FK_id_cuadro_comparativo;
    }

	public function setPrima($value)
	{
		if($this->validateAlphanumeric($value, 1, 40))
		{
			$this->prima = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getPrima()
	{
		return $this->prima;
	}

}
?>