<!DOCTYPE html>
<html>
<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title></title>
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="style/bloque.css" rel="stylesheet">
    <link href="style/myNavbar.css" rel="stylesheet">
    <link href="style/registro.css" rel="stylesheet" type="text/css">
    <link href="style/button.css" rel="stylesheet">


</head>
<body>

    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>
        <a id="titleBar" class="navbar-brand" href="#">Learning English</a>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-1">

            <ul class="nav navbar-nav navbar-left">
                <li><a href="#">Menu</a></li>
                <li><a href="#">Menu</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
    

    <div class="registro">
        <br><br><br><br><br><br><br><br><br><br><br>
        <div>
            <h2 id="tableTitle" align="center">Registro</h2>
        </div>
        
        <form action="ControlRegistro.php" method="POST" enctype="multipart/form-data" onsubmit="return validarCampos();">
            <h2 class="datos">Datos Personales</h2>
            
            <div class="datosPersonales">
                <div class="row" >
                    <div class="col-xs-4 nombreCampo" align="right">
                        Nombre
                    </div>
                    <div class="col-xs-8">
                        <input type="text" name="nombre" class="text" required>
                    </div>
                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col-xs-4 nombreCampo" align="right">
                        Apellido Paterno
                    </div>
                    <div class="col-xs-8">
                        <input type="text" name="apaterno" class="text" required>
                    </div>
                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col-xs-4 nombreCampo" align="right">
                        Apellido Materno
                    </div>
                    <div class="col-xs-8">
                        <input type="text" name="amaterno" class="text" required>
                    </div>
                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col-xs-4 nombreCampo" align="right">
                        Matrícula
                    </div>
                    <div class="col-xs-8">
                        <input type="text" name="matricula" class="text" required>
                    </div>
                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col-xs-4 nombreCampo" align="right">
                        Contraseña
                    </div>
                    <div class="col-xs-8">
                        <input type="password" name="password" class="text" required>
                    </div>
                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col-xs-4 nombreCampo" align="right">
                        Grupo
                    </div>
                    <div class="col-xs-8">
                        <!--<input type="text" name="grupo" class="text" required>-->
                        <?include_once "ControlRegistroGrupo.php";?>
                    </div>
                </div>
            </div>
            <br><br><br>
                
            
            <div align="center">
                <!--<input type="submit" class="btnRegistrarse" >Registrarse</input>-->
                <button class="btnRegistrarse">Registrarse</button>
            </div>
        </form>
    </div>

    <script src="js/bootstrap.min.js"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script>
        $("form").submit(function(e) {

            var ref = $(this).find("[required]");

            $(ref).each(function(){
                if ( $(this).val() == '' )
                {
                    alert("Todos los campos son obligatorios");

                    $(this).focus();

                    e.preventDefault();
                    return false;
                }
            });  return true;
        });

    </script>
</body>
</html>