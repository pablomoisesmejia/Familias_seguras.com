<!DOCTYPE html>
    <html lang="en">
    <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <meta charset='UTF-8'>
                <title> Registrarse en el Directorio de Familias Seguras</title>
                <link rel='stylesheet' href='../../web/fonts/roboto/letras.css'>
                <link rel='stylesheet' href='../../web/css/material_icons.css'>
                <link rel='stylesheet' href='../../web/css/materialize.css'>
                <link rel='stylesheet' href='../../web/css/public_style2.css'>
                <script type='text/javascript' src='../../web/script/sweetalert.min.js'></script>
    </head>
    <body>
        
            <nav>
                <script> $(".button-collapse").sideNav();</script>
            <div class="nav-wrapper">
            <a href="#!" > Registrarse en el Directorio de Familias Seguras</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                    <li><a href="index.php">Cancelar</a></li>
                    <li><a href="login.php">Iniciar session</a></li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
                    <li><a href="index.php">Cancelar</a></li>
                    <li><a href="login.php">Iniciar session</a></li>
            </ul>
            </div>
            </nav>
            <div class="container">
                <div class="row">
                    <h3>Registrate</h3>
                    <div class="col s6">Rellena los campos con informacion correcta
                    <div class="row">
                        <form class="col s12">
                        <div class="row">
                            <div class="input-field col s6">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="nombre" type="text" name="nombre" class="validate">
                            <label for="icon_prefix">Nombres</label>
                            </div>
                            <div class="input-field col s6">
                           
                            <input id="apellido" type="tel" name="apellido"class="validate">
                            <label for="icon_telephone">Apellidos</label>
                            </div>
                        </div>
                        </form>
                        <form class="col s12">
                        <div class="row">
                            <div class="input-field col s6">
                            <i class="material-icons prefix">assignment_ind</i>
                            <input id="alias" type="text" name="alias" class="validate">
                            <label for="icon_prefix">Alias</label>
                            </div>
                            <div class="input-field col s6">
                            <i class="material-icons prefix">lock_outline</i>
                            <input id="password" type="password" name="password" class="validate">
                            <label for="icon_telephone">Contraseña</label>
                            </div>
                        </div>
                        </form>
                    </div>
                    <div class="row">
                        <form class="col s12">
                        <div class="row">
                            <div class="input-field col s12">
                            <input id="email" type="email" name="email" class="validate">
                            <label for="email" data-error="wrong" data-success="right">Email</label>
                            </div>
                        </div>
                        </form>
                    </div>
                    
                    <button class="btn waves-effect waves-light" style="background-color:purple;" type="submit" name="action" onclick="addRecord()">Registrarse
                        <i class="material-icons right">send</i>
                    </button>
                    </div>
                    <div class="col s6">
                        
                    </div>
                </div>
            </div>
    </body>
    <footer>
    <script type='text/javascript' src='script.js'></script>

    </footer>
</html>