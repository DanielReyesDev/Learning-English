<?
echo '<!--*************************************** LOGIN ***************************************-->
	<div id="login" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <div class="modal-content">
                <div class="modal-body">
                    <button data-dismiss="modal" class="close">&times;</button>
                    <br><br>
                    <form action="ControlLogin.php" align="center" method="POST">
                        <input id="loginMatricula" type="text" name="matricula" class="username form-control" placeholder="Matricula"/>
                        <input id="loginPassword" type="password" name="password" class="password form-control" placeholder="Contraseña"/><br>
                        <input id="loginButton" class="btn btn-danger" type="submit" value="Login" />
                    </form>
                </div>
            </div>
        </div>  
    </div>
    <!--*************************************** LOGIN ***************************************-->';
?>