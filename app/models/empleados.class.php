<?php
class Empleados extends Validator
{
    private $PK_id_empleado = null;
    private $FK_id_usuario = null;
    private $FK_id_cargo_gerencia = null;
	private $activo_reparticion = null;

	private $tipo = null;

    public function setIdEmpleado($value)
	{
		if($this->validateId($value))
		{
			$this->PK_id_empleado = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getIdEmpleado()
	{
		return $this->PK_id_empleado;
    }

    public function setIdUsuario($value)
	{
		if($this->validateId($value))
		{
			$this->FK_id_usuario = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getIdUsuario()
	{
		return $this->FK_id_usuario;
    }

    public function setIdCargo($value)
	{
		if($this->validateId($value))
		{
			$this->FK_id_cargo_gerencia = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getIdCargo()
	{
		return $this->FK_id_cargo_gerencia;
    }

	public function setActivo($value)
	{
		if($this->validateId($value))
		{
			$this->activo_reparticion = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getActivo()
	{
		return $this->activo_reparticion;
	}

	public function setTipo($value)
	{
		if($this->validateAlphanumeric($value, 1, 100))
		{
			$this->tipo = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getTipo()
	{
		return $this->tipo;
	}

	//FUNCIONES PARA LAS TAREAS PROGRAMADAS
	public function getEmpleadosVentas()
	{
		$sql = 'SELECT e.PK_id_empleado, e.FK_id_usuario, e.FK_id_cargo_gerencia, e.activo_reparticion 
		FROM empleados e 
		INNER JOIN cargos_gerencias cg ON e.FK_id_cargo_gerencia = cg.PK_id_cargo_gerencia
		WHERE cg.nombre_cargo = "ejecutivo de ventas" ';
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	//FIN DE FUNCIONES PARA LAS TAREAS PROGRAMADAS


	//Funciones para inicio de sesion
	public function checkUsuarios($usuario){
		$sql = "SELECT PK_id_empleado, correo FROM empleados, usuarios WHERE (usuarios.PK_id_usuario = empleados.FK_id_usuario) AND usuarios.correo = ?";
		$params = array($usuario);
		$data = Database::getRow($sql, $params);
		if($data){
			$this->PK_id_empleado = $data['PK_id_empleado'];
			return true;
		}else{
			return false;
		}
	}

	public function checkContrasena($clave){
		$sql = "SELECT clave, tipo_team FROM usuarios, empleados, tipos_team WHERE PK_id_empleado = ?";
		$params = array($this->PK_id_empleado);
		$data = Database::getRow($sql, $params);
		if($clave == $data['clave']){
			$this->tipo = $data['tipo_team'];
			return true;
		}else{
			return false;
		}
	}

	//Funciones
	public function getEmpleados(){
		$sql = "SELECT * FROM empleados";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
}
?>