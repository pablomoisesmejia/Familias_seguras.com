
<?php

require_once("../../app/models/tipo_usuario.class.php");
try{
    //se toma el id seleccionado
    if(isset($_GET['id'])){
        //se manda a llamar al modelo y se inicializa
        $tipousuario = new Tipo_usuario;
        if($tipousuario->setId($_GET['id'])){
            if($tipousuario->select_tipousuarios_e()){
                $hola=$tipousuario->getId();
               
                
                if(isset($_POST['ponerpermisos'])){

                    if(isset($_POST['Administradores'])){ 
                        $tipousuario->set_pAdministradores(1);
                    } else{
                        $tipousuario->set_pAdministradores(0);
                    }

                    if(isset($_POST['Categorias'])){ 
                        $tipousuario->set_pCategorias(1);
                    } else{
                        $tipousuario->set_pCategorias(0);
                    }

                    if(isset($_POST['Productos'])){ //(isset($_POST['usuarios']))? $tipousuario->set_usuarios(1) : $tipousuario->set_usuarios(0);
                        $tipousuario->set_pProductos(1);
                    } else{
                        $tipousuario->set_pProductos(0);
                    }

                    if(isset($_POST['Comercios'])){ 
                        $tipousuario->set_pComercios(1);
                    } else{
                        $tipousuario->set_pComercios(0);
                    }
                    if(isset($_POST['Materias'])){ 
                        $tipousuario->set_pMaterias(1);
                    } else{
                        $tipousuario->set_pMaterias(0);
                    }

                    if(isset($_POST['Proveedores'])){ 
                        $tipousuario->set_pProveedores(1);
                    } else{
                        $tipousuario->set_pProveedores(0);
                    }

                    if(isset($_POST['Marcas'])){ 
                        $tipousuario->set_pMarcas(1);
                    } else{
                        $tipousuario->set_pMarcas(0);
                    }

                    if(isset($_POST['TipoUsuarios'])){ 
                        $tipousuario->set_pTipo_Usuarios(1);
                    } else{
                        $tipousuario->set_pTipo_Usuarios(0);
                    }

                     if(isset($_POST['Permisos'])){ 
                        $tipousuario->set_pPermisos(1);
                    } else{
                        $tipousuario->set_pPermisos(0);
                    }

                    if(isset($_POST['Clientes'])){ 
                        $tipousuario->set_pClientes(1);
                    } else{
                        $tipousuario->set_pClientes(0);
                    }

                    if(isset($_POST['Estadisticas'])){ 
                        $tipousuario->set_pEstadisticas(1);
                    } else{
                        $tipousuario->set_pEstadisticas(0);
                    }

                    if(isset($_POST['Reportes'])){ 
                        $tipousuario->set_pReportes(1);
                    } else{
                        $tipousuario->set_pReportes(0);
                    }

                    if($tipousuario->modificar_permiso()){
                        Page::showMessage(1, "Permisos asignados", "index.php");
                        //mensajes de error
                    }else{
                        Page::showMessage(2, "Permisos NO asignados", "index.php");
                    }
                }
                
            }else{
                Page::showMessage(1, "No existen permisos disponibles", null);
            }
        }
    }

}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
//referencia a la vista
require_once("../../app/views/dashboard/permisos/update_view.php");
?>