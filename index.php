<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv= "X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yoga para tu bienestar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <!-- 🌿 CONTENIDO DE YOGA -->
        <div class="content">
            <h1>Bienvenido al Mundo del Yoga</h1>
            <p>El yoga es una disciplina milenaria que une mente, cuerpo y espíritu. 
               Sus beneficios incluyen mejor salud, menos estrés, y mayor flexibilidad 
               emocional y física.</p>
               
            <p>Completa el siguiente formulario para que un asesor te oriente 
               en tu práctica de yoga personalizada.</p>
        </div>

        <!-- 📝 FORMULARIO -->
        <form method="post">
            <h2>Regístrate y comienza tu camino</h2>

            <div class="input-wrapper">
                <input type="text" name="name" placeholder="Nombre" required>
                <img class="input-icon" src="images/name.png" alt="">
            </div>

            <div class="input-wrapper">
                <input type="email" name="email" placeholder="Email" required>
                <img class="input-icon" src="images/email.png" alt="">
            </div>

            <div class="input-wrapper">
                <input type="text" name="direction" placeholder="Dirección" required>
                <img class="input-icon" src="images/direction.png" alt="">
            </div>

            <div class="input-wrapper">
                <input type="tel" name="phone" placeholder="Teléfono" required>
                <img class="input-icon" src="images/phone.png" alt="">
            </div>

            <div class="input-wrapper">
                <input type="password" name="password" placeholder="Contraseña" required>
                <img class="input-icon" src="images/password.png" alt="">
            </div>

            <input class="btn" type="submit" name="register" value="Enviar">
        </form>

        <?php include("registrar.php"); ?>
    </div>

</body>
</html>
