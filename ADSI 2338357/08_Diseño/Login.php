<?php
require_once("Template/templateLogin.php");

?>

<div class="login">
    <form action="" method="">

        <div class="mb-3">
            <label>Usuario</label>
            <input type="text" name="usuario" placeholder="Usuario o E-mail.." class="form-control">
        </div>

        <div class="mb-3">
            <label>Contraseña</label>
            <input type="password" name="contraseña" placeholder="******" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Acceder</button>
    </form>
</div>