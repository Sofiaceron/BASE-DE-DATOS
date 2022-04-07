<?php
require_once("Template/templateFormulario.php");

?>

<div class="formulario">
    <form action="" method="">

        <div class="mb-3">
            <label>Nombres Completos</label>
            <input type="text" name="nombre" placeholder="Sebastian Lopez..." class="form-control">
        </div>

        <div class="mb-3">
            <label>E-mail</label>
            <input type="email" name="email" placeholder="sclopez@correo.com..." class="form-control">
        </div>
        <div class="mb-3">
            <label>Teléfono</label>
            <input type="tel" name="telefono" placeholder="Teléfono..." class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Registrar</button>
    </form>
</div>