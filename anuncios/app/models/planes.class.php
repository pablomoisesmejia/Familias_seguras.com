<?php

class Planes extends Validator
{
    private $id_plan = null;
    private $nombre_plan = null;

    public function setIdPlan($value)
    {
        if($this->validateId($value))
        {
			$this->id_plan = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getIdPlan()
    {
		return $this->id_plan;
    }

    public function setNombrePlan($value)
    {
        if($this->validateAlphanumeric($value, 1, 60))
        {
			$this->nombre_plan = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getNombrePlan()
    {
		return $this->nombre_plan;
    }
}

?>