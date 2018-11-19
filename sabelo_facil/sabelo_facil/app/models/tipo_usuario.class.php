<?php
class Tipo_usuario extends Validator{
	//Declaración de propiedades
	private $id = null;
	private $nombre = null;

	
	// Establecemos variables de permisos asignables a los Administradores
	Private $Administradores = null;
	Private $Categorias = null;
	Private $Productos = null;
	Private $Comercios = null;
	Private $Materias = null;
	Private $Proveedores = null;
	Private $Marcas = null;
	Private $Tipos_Usuarios = null;
	Private $Permisos = null;
	Private $Clientes = null;
	Private $Estadisticas = null;
	Private $Reportes = null;
	Private $Anuncios = null;
	Private $Cupones = null;
	Private $Ventas = null;


	// establesco metodos de carga de las variables de permisos
	public function set_pAdministradores($value){
			$this->Administradores = $value;
	}
	public function get_pAdministradores(){
		return $this->Administradores;
	}

	public function set_pCategorias($value){
			$this->Categorias = $value;
	}
	public function get_pCategorias(){
		return $this->Categorias;
	}

	public function set_pProductos($value){
			$this->Productos = $value;
	}
	public function get_pProductos(){
		return $this->Productos;
	}

	public function set_pComercios($value){
			$this->Comercios = $value;
	}
	public function get_pComercios(){
		return $this->Comercios;
	}

	public function set_pMaterias($value){
			$this->Materias = $value;
	}
	public function get_pMaterias(){
		return $this->Materias;
	}

	public function set_pProveedores($value){
			$this->Proveedores = $value;
	}
	public function get_pProveedores(){
		return $this->Proveedores;
	}

	public function set_pMarcas($value){
			$this->Marcas = $value;
	}
	public function get_pMarcas(){
		return $this->Marcas;
	}

	public function set_pTipo_Usuarios($value){
			$this->Tipos_Usuarios = $value;
	}
	public function get_pTipos_Usuarios(){
		return $this->Tipos_Usuarios;
	}

	public function set_pPermisos($value){
			$this->Permisos = $value;
	}
	public function get_pPermisos(){
		return $this->Permisos;
	}

	public function set_pClientes($value){
			$this->Clientes = $value;
	}
	public function get_pClientes(){
		return $this->Clientes;
	}

	public function set_pEstadisticas($value){
			$this->Estadisticas = $value;
	}
	public function get_pEstadisticas(){
		return $this->Estadisticas;
	}

	public function set_pReportes($value){
			$this->Reportes = $value;
	}
	public function get_pReportes(){
		return $this->Reportes;
	}

	public function set_pAnuncios($value){
		$this->Anuncios = $value;
	}
	public function get_pAnuncios(){
		return $this->Anuncios;
	}
	public function set_pCupones($value){
		$this->Anuncios = $value;
	}
	public function get_pCupones(){
		return $this->Anuncios;
	}
	public function set_pVentas($value){
		$this->Ventas = $value;
	}
	public function get_pVentas(){
		return $this->Ventas;
	}

	

	//Métodos para sobrecarga de propiedades
	public function setId($value){
		if($this->validateId($value)){
			$this->id = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId(){
		return $this->id;
	}
	
	public function setNombre($value){
		if($this->validateAlphanumeric($value, 1, 50)){
			$this->nombre = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getNombre(){
		return $this->nombre;
	}

	



	//Metodos para el manejo del CRUD
	public function getTipo_usuarios(){
		$sql = "SELECT ID_tipo_usuario, nombre_tipo FROM tipo_usuario  WHERE nombre_tipo <> 'Superior' ORDER BY nombre_tipo ";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function searchTipo_usuarios($value){
		$sql = "SELECT ID_tipo_usuario, nombre_tipo
				FROM Tipo_usuario WHERE nombre_tipo LIKE ? ORDER BY nombre_tipo";
		$params = array("%$value%");
		return Database::getRows($sql, $params);
	}
	public function createTipo_usuarios(){
		$sql = "INSERT INTO Tipo_usuario(nombre_tipo ) VALUES(?)";
		$params = array($this->nombre);	
		return Database::executeRow($sql, $params);
	}
	public function readTipo_usuarios(){
		$sql = "SELECT nombre_tipo  FROM Tipo_usuario WHERE ID_tipo_usuario = ?";
		$params = array($this->id);
		$Tipo_usuario = Database::getRow($sql, $params);
		if($Tipo_usuario){
			$this->nombre = $Tipo_usuario['nombre_tipo'];
			
			return true;
		}else{
			return null;
		}
	}
	public function updateTipo_usuarios(){
		$sql = "UPDATE Tipo_usuario SET nombre_tipo = ? WHERE ID_tipo_usuario = ?";
		$params = array($this->nombre, $this->id);
		return Database::executeRow($sql, $params);
	}
	public function deleteTipo_usuarios(){
		$sql = "DELETE FROM Tipo_usuario WHERE ID_tipo_usuario = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}


	// ******************PERMISOS*****************

	public function select_tipousuarios_e()
	{
		$sql = "SELECT t.ID_tipo_usuario,t.nombre_tipo,t.Administradores,t.Categorias,t.Productos,t.Comercios,t.Materias,t.Proveedores,t.Marcas,t.TiposUsuarios,t.Permisos,t.Clientes,t.Estadisticas,t.Reportes,t.Anuncios,t.Cupones,t.Ventas From Tipo_usuario t WHERE t.ID_tipo_usuario = ?";
		$params = array($this->id);
		$resultado = Database::getRow($sql, $params);
		if($resultado)
		{
			$this->id = $resultado['ID_tipo_usuario'];
			$this->nombre = $resultado['nombre_tipo'];

			$this->Administradores = $resultado['Administradores'];
			$this->Categorias = $resultado['Categorias'];
			$this->Productos = $resultado['Productos'];
			$this->Comercios = $resultado['Comercios'];
			$this->Materias = $resultado['Materias'];
			$this->Proveedores = $resultado['Proveedores'];
			$this->Marcas = $resultado['Marcas'];
			$this->Tipos_Usuarios = $resultado['TiposUsuarios'];
			$this->Permisos = $resultado['Permisos'];
			$this->Clientes = $resultado['Clientes'];
			$this->Estadisticas = $resultado['Estadisticas'];
			$this->Reportes = $resultado['Reportes'];
			$this->Anuncios = $resultado['Anuncios'];
			$this->Cupones = $resultado['Cupones'];
			$this->Ventas = $resultado['Ventas'];
			return true;
		}
		else
		{
			return null;
		}
			}
				

	public function modificar_permiso()
	{
		$sql = "UPDATE Tipo_usuario SET Administradores=?,  Categorias = ?,Productos = ?,Comercios=?,Materias=?, Proveedores = ?, Marcas = ?,TiposUsuarios = ? ,Permisos = ?, Clientes = ?, Estadisticas = ? ,Reportes=? ,Anuncios=?,Cupones=?,Ventas=? WHERE ID_tipo_usuario = ?";
		$params = array($this->Administradores,$this->Categorias,$this->Productos,$this->Comercios, $this->Materias, $this->Proveedores, $this->Marcas,$this->Tipos_Usuarios,$this->Permisos, $this->Clientes,  $this->Estadisticas,$this->Reportes, $this->Anuncios,$this->Cupones,$this->Ventas,$this->id);
		return Database::executeRow($sql, $params);
	}
}
?>