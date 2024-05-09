<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo validación de formulario</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        div {
            margin-top: 10px;
        }

        label {
            display: block;
        }

        input[type="radio"]+label,
        input[type="checkbox"]+label {
            display: inline;

        }

        button {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <?php

    function filter($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
        //var_dump($_POST);
        $nombre = filter($_POST['nombre']);
        $password = filter($_POST['password']);
        $estudios = filter($_POST['estudios']);
        $nacionalidad = filter($_POST['nacionalidad']);
        $idiomas = filter(implode(", ", $_POST["idiomas"])); //pasar el array a string
        $email = filter($_POST['email']);
        $web = filter($_POST['web']);
    }
    ?>
    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" maxlength="50">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" maxlength="50">
        </div>
        <div>
            <label for="estudios">Estudios</label>
            <select name="estudios" id="estudios">
                <option value="sin-estudios">Sin estudios</option>
                <option value="eso" selected>Educación obligatoria</option>
                <option value="fp">Formacion Profesional</option>
                <option value="universitarios">Universitarios</option>
            </select>
        </div>
        <div>
            <fieldset>
                <legend>Nacionalidad:</legend>
                <div>
                    <input type="radio" id="es" name="nacionalidad" value="española" checked />
                    <label for="es">Española</label>
                </div>
                <div>
                    <input type="radio" id="otra" name="nacionalidad" value="otra" />
                    <label for="otra">Otra</label>
                </div>
            </fieldset>
        </div>
        <fieldset>
            <legend>Idiomas:</legend>
            <div>
                <input type="checkbox" id="es" name="idiomas[]" value="español" checked />
                <label for="es">Español</label>
            </div>
            <div>
                <input type="checkbox" id="cat" name="idiomas[]" value="catalan" />
                <label for="cat">Catalán</label>
            </div>
            <div>
                <input type="checkbox" id="en" name="idiomas[]" value="ingles" />
                <label for="en">Inglés</label>
            </div>
            <div>
                <input type="checkbox" id="al" name="idiomas[]" value="aleman" />
                <label for="al">Aleman</label>
            </div>
        </fieldset>
        <div>
            <label for="email">Email</label>
            <input type="text" id="email" name="email">
        </div>
        <div>
            <label for="web">Sitio web</label>
            <input type="text" id="web" name="web">
        </div>
        <button type="submit" name="submit" value="enviar">Enviar</button>
    </form>
</body>

</html>