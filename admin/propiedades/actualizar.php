<?php

    // echo "<pre>";
    // var_dump($_GET);
    // echo "<pre>";

    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);
    if(!$id){
        header('Location: /admin');
    }
    //Base de datos
    require '../../includes/config/database.php';
    $db = conectarDB();

    //obtener los datos de la propiedad
    $consulta_propiedad = "SELECT * FROM propiedades WHERE id = {$id}";
    $resultado_propiedad = mysqli_query($db,$consulta_propiedad);
    $propiedad = mysqli_fetch_assoc($resultado_propiedad);
    
    
    //connsulta para obtener los vendedores de la base de datos
    $consulta = "SELECT * FROM vendedores";
    $resultado_consulta = mysqli_query($db,$consulta);

    
    //Arreglo con mensajes de errores
    $errores = [];
        $titulo=$propiedad['titulo'];
        $precio=$propiedad['precio'];
        $descripcion=$propiedad['descripcion'];
        $habitaciones=$propiedad['habitaciones'];
        $wc=$propiedad['wc'];
        $estacionamiento=$propiedad['estacionamiento'];
        $vendedorId=$propiedad['vendedorid'];
        $imagenPropiedad = $propiedad['imagen'];
    
    //ejecutar el codigo despues de que el usuario envia el formulario
    if ($_SERVER['REQUEST_METHOD'] ==='POST') {
        
        
        echo "<pre>";
        var_dump($_POST);
        echo "<pre>";
        exit;
        // echo "<pre>";
        // var_dump($_FILES);
        // echo "<pre>";
        
        // exit;
        
        $precio=mysqli_real_escape_string($db,$_POST['precio']);
        $titulo=mysqli_real_escape_string($db,$_POST['titulo']);
        $descripcion=mysqli_real_escape_string($db,$_POST['descripcion']);
        $habitaciones=mysqli_real_escape_string($db,$_POST['habitaciones']);
        $wc=mysqli_real_escape_string($db,$_POST['wc']);
        $estacionamiento=mysqli_real_escape_string($db,$_POST['estacionamiento']);
        $vendedorId=mysqli_real_escape_string($db,$_POST['vendedor']);
        $creado = date('Y/m/d');

        //ASiganar files hacia una variable
        $imagen= $_FILES['imagen'];
        


        if (!$titulo) {
            $errores[] = "Añade un titulo para poder continuar";
        }
        if (!$precio) {
            $errores[] = "Añade un precio para poder continuar";
        }
        if (strlen($descripcion)<30) {
            $errores[] = "La descripcion debe tener como minimo 30 caracteres";
        }
        if (!$habitaciones) {
            $errores[] = "Añade el numero de habitaciones para poder continuar";
        }
        if (!$wc) {
            $errores[] = "Añade el numero de baños para poder continuar";
        }
        if (!$estacionamiento) {
            $errores[] = "Añade el numero de cajones de estacionamiento para poder continuar";
        }
        if (!$vendedorId) {
            $errores[] = "Selecciona un vendedor para poder continuar";
        }
        // if (!$imagen['name'] || $imagen['error']) {
        //     $errores[] = "La imagenes obligatoria";
        // }
        $medida = 1000 * 1000;
        
        if ($imagen['size']>$medida) {
            $errores[]= "La imagen es muy pesada";
        }
        
     
        // echo "<pre>";
        // var_dump($_FILES);
        // echo "<pre>";
        //Revisar que el array de errores este vacio

        if (empty($errores)) {

            /** Subida de archivos*/

            /**Crear carpeta */
            $carpetaImagenes = '../../imagenes/';
            if (!is_dir($carpetaImagenes)) {
                mkdir($carpetaImagenes);
            }
            
            $nombreImagen = md5(uniqid(rand(),true)) .".jpg";

            //subir la imagen
            move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen );

             //insertar en la base de datos
            $query = " INSERT INTO propiedades (titulo, precio, imagen, descripcion, habitaciones, wc, estacionamiento, creado, vendedorId)
            VALUES ( '$titulo', '$precio', '$nombreImagen', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$creado', '$vendedorId')";
            
            //  echo $query;
            $resultado = mysqli_query($db, $query);
            // echo $resultado;
            if ($resultado) {
                //redireccionamiento
                header('Location:/admin?resultado=1');
            }
        }
        
       
    }
    require '../../includes/funciones.php';
    incluirTemplate('header');
?>
<main class="contenedor seccion">
    <h1>Actualizar Propiedad</h1>
    <a href="/admin" class="boton btn-verde">Volver</a>

    <?php foreach ($errores as $error):?>
    <div class="alerta error">
        <?php echo $error;?>
    </div>

    <?php endforeach;?>

    <!-- action="/admin/propiedades/actualizar.php" -->
    <form class="formulario" method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend>Informacion General</legend>
            <label for="titulo">Titulo:</label>
            <input type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad" value="<?php echo $titulo;?>">

            <label for=" precio">Precio:</label>
            <input type="number" id="precio" name="precio" placeholder="Precio Propiedad" value="<?php echo $precio;?>">

            <label for="imagen">Imagen:</label>
            <input type="file" id="imagen" accept="image/jpeg, image/png" name="imagen">

            <img src="/imagenes/<?php echo $imagenPropiedad;?>" class="imagen-small">

            <label for="descripcion">Descripcion:</label>
            <textarea id="descripcion" name="descripcion"><?php echo $descripcion;?></textarea>
        </fieldset>
        <fieldset>
            <legend>Informacion Propiedad</legend>
            <label for="habitaciones">Habitaciones:</label>
            <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej: 3" min="1" max="9"
                value="<?php echo $habitaciones;?>">

            <label for="wc">Baños:</label>
            <input type="number" id="wc" name="wc" placeholder="Ej: 3" min="1" max="9" value="<?php echo $wc;?>">

            <label for="estacionamiento">Estacionamiento:</label>
            <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej: 3" min="1" max="9"
                value="<?php echo $estacionamiento;?>">
        </fieldset>

        <fieldset>
            <legend>Vendedor</legend>
            <select name="vendedor">
                <option value="">-- Seleccione --</option>
                <?php while($vendedor = mysqli_fetch_assoc($resultado_consulta)):?>
                <option <?php echo $vendedorId === $vendedor['id'] ? 'selected' : '';?>
                    value="<?php echo $vendedor['id'];?>">
                    <?php echo $vendedor['nombre'] . " " . $vendedor['apellido']; ?></option>
                <?php endwhile;?>
            </select>
        </fieldset>
        <input type="submit" value="Actualizar Propiedad" class="boton btn-verde">
    </form>
</main>
<?php incluirTemplate('footer');?>