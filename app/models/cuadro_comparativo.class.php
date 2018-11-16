<?php

class Cuadro_Comparativo extends Validator
{
    private $PK_id_cuadro_comparativo = null;
    private $FK_id_aseguradora = null;
    private $plan = null;
    private $oferta = null;
    private $FK_id_cliente_prospecto = null;
    private $valor_recuperacion_50 = null;
    private $valor_recuperacion_60 = null;
    private $valor_recuperacion_70 = null;

    public function setIdCuadroComparativo($value)
    {
        if($this->validateId($value))
        {
            $this->PK_id_cuadro_comparativo = $value;
            return true;
        }
        else
        {
            return false;
        }
    }
    public function getIdCuadroComparativo()
    {
        return $this->PK_id_cuadro_comparativo;
    }

    public function setIdAseguradora($value)
    {
        if($this->validateId($value))
        {
            $this->FK_id_aseguradora = $value;
            return true;
        }
        else
        {
            return false;
        }
    }
    public function getIdAseguradora()
    {
        return $this->FK_id_aseguradora;
    }

    public function setPlan($value)
    {
        if($this->validateAlphanumeric($value, 1, 50))
        {
            $this->plan = $value;
            return true;
        }
        else
        {
            return false;
        }
    }
    public function getPlan()
    {
        return $this->plan;
    }

    public function setOferta($file){
		if($this->validateArchive($file, $this->oferta, "../../web/dashboard/ofertas/")){
			$this->oferta = $this->getArchiveName();
			return true;
		}else{
			return false;
		}
	}
	public function getOferta(){
		return $this->oferta;
	}
	public function unsetOderta(){
		if(unlink("../../web/dashboard/ofertas/".$this->oferta)){
			$this->oferta = null;
			return true;
		}else{
			return false;
		}
    }

    public function setIdClienteProspecto($value)
    {
        if($this->validateId($value))
        {
            $this->FK_id_cliente_prospecto = $value;
            return true;
        }
        else
        {
            return false;
        }
    }
    public function getIdClienteProspecto()
    {
        return $this->FK_id_cliente_prospecto;
    }

    public function setValorRecuperacion50($value)
    {
        if($this->validateAlphanumeric($value, 1, 20))
        {
            $this->valor_recuperacion_50 = $value;
            return true;
        }
        else
        {
            return false;
        }
    }
    public function getValorRecuperacion50()
    {
        return $this->valor_recuperacion_50;
    }

    public function setValorRecuperacion60($value)
    {
        if($this->validateAlphanumeric($value, 1, 20))
        {
            $this->valor_recuperacion_60 = $value;
            return true;
        }
        else
        {
            return false;
        }
    }
    public function getValorRecuperacion60()
    {
        return $this->valor_recuperacion_60;
    }

    public function setValorRecuperacion70($value)
    {
        if($this->validateAlphanumeric($value, 1, 20))
        {
            $this->valor_recuperacion_70 = $value;
            return true;
        }
        else
        {
            return false;
        }
    }
    public function getValorRecuperacion70()
    {
        return $this->valor_recuperacion_70;
    }

    //Funciones para el SCRUD
    public function getAseguradoras(){
		$sql = "SELECT * FROM aseguradoras";
		$params = array(null);
		return Database::getRows($sql, $params);
    }

    public function getCuadros(){
		$sql = "SELECT * FROM cuadro_comparativo";
		$params = array(null);
		return Database::getRows($sql, $params);
    }

    public function getNumCompanias($id){
		$sql = "SELECT COUNT(PK_id_compania_interes) AS n FROM companias_interes WHERE FK_id_cliente_prospecto = ?";
		$params = array($id);
		return Database::getRow($sql, $params);
    }
    public function getNumVehiculos($id){
		$sql = "SELECT COUNT(PK_id_cotizacion_vehiculo) AS n FROM cotizaciones_vehiculos WHERE FK_id_cliente_prospecto = ?";
		$params = array($id);
		return Database::getRow($sql, $params);
    }
    public function getCorreoCorreo($id){
		$sql = "SELECT correo FROM solicitudes, clientes_prospectos, usuarios WHERE (solicitudes.FK_id_cliente_prospecto = clientes_prospectos.PK_id_cliente_prospecto AND clientes_prospectos.FK_id_usuario = usuarios.PK_id_usuario) AND PK_id_solicitud = ?";
		$params = array($id);
		return Database::getRow($sql, $params);
    }
    public function getCompanias($id){
		$sql = "SELECT compania_interes FROM companias_interes WHERE FK_id_cliente_prospecto = ?";
		$params = array($id);
		return Database::getRows($sql, $params);
    }
    public function getRamo($id){
		$sql = "SELECT * FROM solicitudes, clientes_prospectos, usuarios, tipos_seguro, estado_solicitud WHERE (solicitudes.FK_id_cliente_prospecto = clientes_prospectos.PK_id_cliente_prospecto AND clientes_prospectos.FK_id_usuario = usuarios.PK_id_usuario AND clientes_prospectos.FK_id_tipo_seguro = tipos_seguro.PK_id_tipo_seguro AND estado_solicitud.PK_id_estado_solicitud = solicitudes.FK_id_estado_solicitud) AND PK_id_solicitud = ?";
		$params = array($id);
		return Database::getRow($sql, $params);
    }
    public function createCuadro(){
		$sql = "INSERT INTO cuadro_comparativo(FK_id_aseguradora, plan, oferta, FK_id_cliente_prospecto, valor_recuperacion_50, valor_recuperacion_60, valor_recuperacion_70) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $params = array($this->FK_id_aseguradora, $this->plan, $this->oferta, $this->FK_id_cliente_prospecto, $this->valor_recuperacion_50, $this->valor_recuperacion_60, $this->valor_recuperacion_70);
        return Database::executeRow($sql, $params);
        $this->PK_id_cuadro_comparativo = Database::getLasRowId();
	}
}
?>