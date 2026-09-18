<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Campo de pruebas</title>
    </head>

    <body>
        <h1>Hola</h1>

            <?php
                //Ejemplo de Array//
                //$registro = array('dni' => '24576425', 'nombre' => 'juan', 'direccion' => 'soler 4545');
                //echo $registro['dni'] . $registro['nombre'] . $registro['direccion'];
            ?>

            <!--Formulario-->
            <form action="recibeform.php" method="post">
                <div>
                    <label for="fusuario">Usuario:</label>
                    <input type="text" id="fusuario" name="fusuario" placeholder="Juan" required>
                </div>

                <br>

                <div>
                    <label for="fcontraseña">Contraseña:</label>
                    <input type="password" id="fcontraseña" name="fcontraseña" maxlength="20" required>
                </div>

                <br>

                <div>
                    <label for="fmail">Email:</label>
                    <input type="email" id="fmail" name="fmail" placeholder="Juan@gmail.com" required>
                </div>

                <br>

                <div>
                    <label for="fcomidafav">Comida favorita:</label>
                    <input type="text" id="fcomidafav" name="fcomidafav" placeholder="Pizza">
                </div>

                <br>

                <div>
                    <label for="fbandafav">Banda favorita:</label>
                    <input type="text" id="fbandafav" name="fbandafav" placeholder="Queen">
                </div>

                <br>

                <div>
                    <input type="submit">
                    <input type="reset">
                </div>
            </form>
    </body>
</html>