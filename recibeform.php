<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <?php
            //Información del formulario de "index.php"//
            $fusuario = $_POST['fusuario'];
            $fcontraseña = $_POST['fcontraseña'];
            $fmail = $_POST['fmail'];
            $fcomidafav = $_POST['fcomidafav'];
            $fbandafav = $_POST['fbandafav'];

            //Conexión a la base de datos "prueba" y la tabla "clase6formulario"//
            $conexión = mysqli_connect("localhost", "root", "", "prueba");
            if (!$conexión){
                die("Falló la conexión" . mysqli_connect_error());
            }

            //Insertar los datos en la tabla//
            $sql = "INSERT INTO clase6formulario (fusuario, fcontraseña, fmail, fcomidafav, fbandafav) VALUES ('$fusuario', '$fcontraseña', '$fmail', '$fcomidafav', '$fbandafav')";
            if (mysqli_query($conexión, $sql)) {
                echo "Datos enviados con éxito.";
            }else {
                echo "Error al enviar datos." . $sql . "<br>" . mysqli_error($conexión);
            }

            //Cerrar la conexión//
            mysqli_close($conexión);
        ?>
    </body>
</html>