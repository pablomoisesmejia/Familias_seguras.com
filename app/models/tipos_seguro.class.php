<?php
class Tipos_seguro extends Validator
{
    private $PK_id_tipo_seguro = null;
	private $tipo_seguro = null;

    public function setIdTipo($value)
	{
		if($this->validateId($value))
		{
			$this->PK_id_tipo_seguro = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getIdTipo()
	{
		return $this->PK_id_tipo_seguro;
    }

	public function setTipoSeguro($value)
	{
		if($this->validateAlphanumeric($value, 1, 40))
		{
			$this->tipo_seguro = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getTipoSeguro()
	{
		return $this->tipo_seguro;
	}

	public function getTiposSeguros()
	{
		$sql = 'SELECT PK_id_tipo_seguro, tipo_seguro FROM tipos_seguro';
		$params = array(null);
		return Database::getRows($sql, $params);
	}
}
?>