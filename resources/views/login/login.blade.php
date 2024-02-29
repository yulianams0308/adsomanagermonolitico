<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADSO MANAGER</title>
    <link rel="stylesheet" href="../resources/css/app.css">
    <link href="../resources/img/logo2.png" rel="icon">
    <script src="https://kit.fontawesome.com/ca41ee75e2.js" crossorigin="anonymous"></script>
</head>

<body>

    <header>

        <div>

        </div>

        <div class="grid">

            <div>

                <a class="logo" href="{{route('login.index')}}">
                    <img src="../resources/img/logo2.png" alt="">
                </a>

            </div>

            <div>

                <h2 class="titulo_logo">ADSO Manager</h2>

            </div>

        </div>

    </header>

    <main>

        <section class="a">
            <h1 class="container1">Iniciar sesión</h1>
        </section>



        <div class="container">

            <div>

                <label>Nombre de usuario o correo electrónico</label>
                <input type=" email " name="email " id="email ">
                <label>Contraseña</label>
                <input type="password" name="password " id="password">

                <div class="checkbox-container">

                    <input type="checkbox" name="checkbox" id="checkbox">
                    <label for="checkbox">Mantenerme conectado</label>

                </div>

                <div class="boton">

                    <a class="sesion" href="{{route('home.index')}}">Iniciar Sesión</a>

                </div>

            </div>

        </div>




    </main>





    <footer>


        <div class="contenedor">

            <p>COPYRIGHT ® 2023 ADSO MANAGER</p>

            <p class="copy">MEJOR PLANEACIÓN ES MEJOR EDUCACIÓN</p>

        </div>

        <div class="politicasoporte">
            <a href="../ADSOMANAGER/html/politica.html">POLÍTICA DE PRIVACIDAD </a>
            <a class="division ">|</a>
            <a href="../ADSOMANAGER/html/soporte.html ">CONTACTA A SOPORTE </a>

        </div>
    </footer>

</body>

</html>
