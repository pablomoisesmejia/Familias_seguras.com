
    <form method="post">
        <div class="row  ">
                <div class="col s4 m3 l3 center">
                    <p>
                    <?php
                        if($tipousuario->get_pAdministradores()==1){
                            print('<input type="checkbox" id="permiso1" name="Administradores" checked />
                            <label for="permiso1">Administradores</label>');
                            
                        }else{
                            print('<input type="checkbox" id="permiso1" name="Adminsitradores"  />
                            <label for="permiso1">Administradores</label>');
                            }
                    ?>
                        
                    </p>
                </div>
                <div class="col s4 m3 l3">
                    <p>
                    <?php
                        if($tipousuario->get_pCategorias()==1){
                            print('<input type="checkbox" id="permiso2" name="categorias" checked/>
                            <label for="permiso2">Categorias</label>');
                            
                        }else{
                            print('<input type="checkbox" id="permiso2" name="categorias"/>
                            <label for="permiso2">Categorias</label>');
                            }
                    ?>

                        
                    </p>
                </div>
                <div class="col s4 m3 l3 ">
                    <p>
                    <?php
                        if($tipousuario->get_pProductos()==1){
                            print('<input type="checkbox" id="permiso3" name="productos" checked />
                            <label for="permiso3">Productos</label>');
                            
                        }else{
                            print('<input type="checkbox" id="permiso3" name="productos"  />
                            <label for="permiso3">Productos</label>');
                            }
                    ?>
                        
                    </p>
                </div>
                <div class="col s4 m3 l3">
                    <p>
                        <?php
                        if($tipousuario->get_pMaterias() ==1){
                            print('<input type="checkbox" id="permiso4" name="Materias" checked/>
                            <label for="permiso4">Materias</label>');
                            
                        }else{
                            print('<input type="checkbox" id="permiso4" name="Materias"/>
                            <label for="permiso4">Materias</label>');
                            }
                        ?>

                        
                    </p>
                </div>
                
                <div class="col s4 m3 l3">
                    <p>

                        <?php
                        if($tipousuario->get_pProveedores()==1){
                            print('<input type="checkbox" id="permiso5"name="proveedores" checked/>
                            <label for="permiso5">Proveedores</label>');
                            
                        }else{
                            print('<input type="checkbox" id="permiso5"name="proveedores" />
                            <label for="permiso5">Proveedores</label>');
                            }
                        ?>
                    
                        
                    </p>
                </div>
                <div class="col s4 m3 l3">
                    <p>
                    <?php
                        if($tipousuario->get_pMarcas() == 1){
                            print('<input type="checkbox" id="permiso6" name="Marcas" checked/>
                            <label for="permiso6">Marcas</label>');
                            
                        }else{
                            print('<input type="checkbox" id="permiso6" name="Marcas"/>
                            <label for="permiso6">Marcas</label>');
                            }
                        ?>
                        
                        
                    </p>
                </div>
                <div class="col s4 m3 l3">
                    <p>
                    <?php
                        if($tipousuario->get_pTipos_Usuarios() == 1){
                            print('<input type="checkbox" id="permiso7" name="TipoUsuarios" checked/>
                            <label for="permiso7">Tipo Usuarios</label>');
                            
                        }else{
                            print('<input type="checkbox" id="permiso7" name="TipoUsuarios"/>
                            <label for="permiso7">Tipo Usuarios</label>');
                            }
                        ?>
                        
                        
                    </p>
                </div>
                <div class="col s4 m3 l3">
                    <p>
                    <?php
                        if($tipousuario->get_pPermisos() == 1){
                            print('<input type="checkbox" id="permiso8" name="Permisos" checked/>
                            <label for="permiso8">Permisos</label>');
                            
                        }else{
                            print('<input type="checkbox" id="permiso8" name="Permisos"/>
                            <label for="permiso8">Permisos</label>');
                            }
                        ?>
                        
                        
                    </p>
                </div>
                <div class="col s4 m3 l3">
                    <p>
                    <?php
                        if($tipousuario->get_pClientes() == 1){
                            print('<input type="checkbox" id="permiso9" name="Clientes" checked/>
                            <label for="permiso9">Clientes</label>');
                            
                        }else{
                            print('<input type="checkbox" id="permiso9" name="Clientes"/>
                            <label for="permiso9">Clientes</label>');
                            }
                        ?>
                    </p>
                </div>
                
                
                <div class="col s4 m3 l3">
                    <p>
                    <?php
                        if($tipousuario->get_pEstadisticas() ==1){
                            print('<input type="checkbox" id="permiso13" name="Estadisticas" checked/>
                    
                            <label for="permiso10">Estadisticas</label>');
                            
                        }else{
                            print('<input type="checkbox" id="permiso13" name="Estadisticas"/>
                    
                            <label for="permiso10">Estadisticas</label>');
                            }
                        ?>

                        
                    </p>
                </div>
            
        </div>

    <div class=" col s12 m4 l3 center">
                    <a href="index.php" data-tooltip="Cancelar" class="waves-effect waves-light btn  # ef5350 red aligera-2">Cancelar</a>
                    <button type="submit"  name="ponerpermisos" data-tooltip="Asignar permisos" class=" waves-effect waves-light btn green aligera-2 tooltipped">Aceptar</button>
                </div>
        
    
    </form>
