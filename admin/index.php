<?php
    
    //Importar la conexion
    require '../includes/config/database.php';
    $db = conectarDB();
    //Escribir el query
    $query = "SELECT * FROM propiedades";

    
    //Consulta Base de datos
    $resultado_consulta= mysqli_query($db,$query);

    //muestra mensaje condicional
    $resultado= $_GET['resultado']??null;

    //template
    require '../includes/funciones.php';
    incluirTemplate('header');
?>
<main class="contenedor">
    <h1>Administrador de Bienes Raices</h1>
    <?php if(intval($resultado) === 1):?>
    <p class="alerta exito">Anuncio creado correctamente</p>
    <?php endif;?>
    <a href="/admin/propiedades/crear.php" class="boton btn-verde">Nueva Propiedad</a>

    <table class="propiedades">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titulo</th>
                <th>Imagen</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <!--Mostra los resultados-->
            <?php while($propiedad = mysqli_fetch_assoc($resultado_consulta)):?>

            <tr>
                <td class="text"><?php echo $propiedad['id'];?></td>
                <td class="text"><?php echo $propiedad['titulo'];?></td>
                <td><img src="/imagenes/<?php echo $propiedad['imagen'];?>" class="imagen-tabla"></td>
                <td class="text">$<?php echo $propiedad['precio'];?></td>
                <td class="">
                    <a href="#" class="boton-rojo-block">Eliminar</a>
                    <a href="admin/propiedades/actualizar.php?id=<?php echo $propiedad['id'];?>"
                        class="boton-amarillo-block">Actualizar</a>
                </td>
            </tr>
            <?php endwhile;?>
        </tbody>
    </table>
</main>

<?php
//cerrar Base
    mysqli_close($db);

    incluirTemplate('footer');
?>