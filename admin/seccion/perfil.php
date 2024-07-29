<?php
    $perfil = (new Autenticacion())->getPerfil();
    if(isset($perfil)){
        $nombre      = !empty($perfil["nombre"]) ? $perfil["nombre"] : 'Sin nombre'; 
        $apellido    = !empty($perfil["apellido"]) ? $perfil["apellido"] : 'Sin apellido';
        $email       = $perfil["email"];
        $usuario     = $perfil["usuario"];
        $tipousuario = $perfil["tipousuario"];
    }
    $tipousuarioText = ($tipousuario == 1) ? 'Administrador' : 'Usuario común';
?>
<section>
    <div class="container">
        <h1 class="mt-4 mb-4">Mi Perfil</h1>
        <?php if ($tipousuario == 1): ?>
            <div class="perfil-imagen">
                <img src="../img/image.png" alt="Imagen de perfil del administrador" class="img-fluid rounded-circle mb-3" style="width: 150px; height: 150px;">
            </div>
        <?php endif; ?>
        <p><strong>Nombre: </strong><?=ucfirst($nombre)?></p>
        <p><strong>Apellido: </strong><?=ucfirst($apellido)?></p>
        <p><strong>Email: </strong><?=$email?></p>
        <p><strong>Contraseña: </strong>*****</p>
        <p><strong>Nombre de usuario: </strong><?=$usuario?></p>
        <p><strong>Rol: </strong><?=$tipousuarioText?></p>
        <a href="index.php?seccion=editar_perfil" class="btn btn-primary btnaccion mt-2 mb-4">Editar perfil</a>
    </div>
</section>
