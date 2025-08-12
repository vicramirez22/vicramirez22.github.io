<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preguntame lo que quieras</title>
    <link rel="stylesheet" href="button.css" />
    <link rel="stylesheet" href="estilos.css" />
</head>
<body>
    <h1>Contactame</h1>
    <main>

        <form method="post" action="enviar.php">
            <h2>Datos del mensaje</h2>
            <div>
                <span>Tu nombre</span>
                <input type="text" name="nombre" autocapitalize="words" autocomplete="off" />
            </div>
            <div>
                <span>Tu apellido</span>
                <input type="text" name="apellido" autocapitalize="words" autocomplete="off" />
            </div>

            <div>
                <span>Tu email</span>
                <input type="email" name="email" autocomplete="off" />
            </div>
            
            <div class='large'>
                <span>Mensaje</span>
                <textarea name="mensaje" rows="6" cols="80">
                </textarea>
            </div>
            <div class='large'>
                <button class='button' type="submit">Enviar mensaje</button>
            </div>
        </form>
    </main>
</body>
</html>