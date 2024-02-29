<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../resources/css/app.css">
    <link href="../resources/img/logo2.png" rel="icon">
    <script src="https://kit.fontawesome.com/ca41ee75e2.js" crossorigin="anonymous"></script>
    <title>@yield('title')</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
    <br><br><br><br><br><br><br>

    <header class="header2">

        <label for="btn-nav" class="btn-nav"><i class="fas fa-bars"></i></label>
        <input type="checkbox" id="btn-nav">


        <nav>
            <div class="height">
                <ul class="navigation">
                    <li><a href="{{route('home.index')}}"><i class="fa-solid fa-house fa-lg" style="color: #ffffff;"></i></a></li>
                    <li>
                        <a href="../html/fichas.html"><svg class="diferentes" fill="#ffffff"width="22.5px" height="auto" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512.001 512.001" xml:space="preserve" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M186.932,56.049c-4.435,0-8.03,3.595-8.03,8.03s3.595,8.03,8.03,8.03h66.178c1.415-5.811,3.833-11.233,7.076-16.06 H186.932z"></path> </g> </g> <g> <g> <path d="M487.727,0H143.362c-6.097,0-11.042,4.943-11.042,11.042v230.754c0,6.098,4.943,11.042,11.042,11.042h57.443l0.112-22.083 h-46.512V22.083h322.281v208.672H362.376v22.083h125.35c6.098,0,11.042-4.943,11.042-11.042V11.042 C498.768,4.943,493.824,0,487.727,0z"></path> </g> </g> <g> <g> <path d="M301.929,48.796c-19.437,0-35.194,15.757-35.194,35.194c0,9.452,3.792,18.662,10.897,25.447c6.093,0,42.623,0,48.593,0 c6.71-6.408,10.897-15.436,10.897-25.447C337.123,64.553,321.366,48.796,301.929,48.796z"></path> </g> </g> <g> <g> <path d="M457.638,77.835c-2.011-1.896-4.365-3.189-6.846-3.919l-3.764-17.923c-1.139-5.424-6.46-8.899-11.886-7.76 c-4.038,0.848-6.992,4.015-7.77,7.816h-83.699c3.243,4.829,5.661,10.25,7.076,16.061h79.151l1.784,8.495l-34.533,36.62 c-7.144,0.836-55.364,6.473-62.176,7.27c0,0-61.774,0-78.484,0c-21.954,0-40.073,17.858-40.184,39.983l-0.62,123.512 c-0.06,11.935,8.454,18.265,16.889,18.307c0.029,0,0.058,0,0.087,0c9.335-0.001,16.928-7.547,16.975-16.896l0.182-36.256 l0.445-88.497c0.052-1.945,1.658-3.486,3.602-3.459c1.944,0.027,3.505,1.611,3.505,3.556 c-0.009,158.547-0.369,37.714-0.369,257.017c6.25-2.743,13.078-4.392,20.245-4.699v-4.024c-3.415-6.917-5.342-14.694-5.342-22.916 c0-19.137,10.407-35.878,25.852-44.893v-58.002h8.799v53.913c5.417-1.919,11.239-2.975,17.306-2.975 c8.434,0,16.398,2.033,23.449,5.615l-0.065-186.529c10.592-1.239,53.025-6.2,59.988-7.013c3.966-0.464,7.642-2.31,10.382-5.216 l40.724-43.183C464.777,95.017,464.461,84.27,457.638,77.835z"></path> </g> </g> <g> <g> <path d="M406.579,473.584c-0.106-21.358-17.601-38.625-38.82-38.625c-10.958,0-77.107,0-88.069,0 c-21.299,0-38.714,17.328-38.821,38.626L240.676,512h14.487c0-22.289,18.217-40.124,40.124-40.124h58.302 c22.066,0,40.122,17.974,40.122,40.124h13.062L406.579,473.584z"></path> </g> </g> <g> <g> <path d="M323.862,356.124c-18.775,0-33.998,15.22-33.998,33.998c0,18.796,15.272,33.998,33.998,33.998 c18.662,0,33.998-15.117,33.998-33.998C357.861,371.345,342.639,356.124,323.862,356.124z"></path> </g> </g> <g> <g> <path d="M96.143,356.124c-18.734,0-33.998,15.175-33.998,33.998c-0.001,18.887,15.347,33.998,33.998,33.998 c18.732,0,33.998-15.208,33.998-33.998C130.142,371.345,114.92,356.124,96.143,356.124z"></path> </g> </g> <g> <g> <path d="M353.589,483.33h-58.302c-15.834,0-28.67,12.835-28.67,28.67h115.642C382.259,496.166,369.423,483.33,353.589,483.33z"></path> </g> </g> <g> <g> <path d="M123.231,483.33H64.929c-15.834,0-28.67,12.835-28.67,28.67c11.959,0,103.786,0,115.642,0 C151.901,496.166,139.065,483.33,123.231,483.33z"></path> </g> </g> <g> <g> <path d="M211.076,318.535c-7.815-1.775-15.585,3.126-17.356,10.938l-17.192,75.796c-3.911,2.861-36.182,26.468-40.586,29.69 c-8.925,0-78.563,0-83.695,0c-21.191,0-38.713,17.239-38.821,38.626l-0.193,38.416h11.573c0-22.151,18.052-40.124,40.124-40.124 h58.302c7.463,0,14.453,2.054,20.446,5.62l0.228-12.414l54.136-39.601c2.826-2.067,4.808-5.085,5.582-8.5l18.392-81.09 C223.788,328.078,218.89,320.307,211.076,318.535z"></path> </g> </g> </g></svg></a>
                    </li>
                    <li>
                        <a href="../html/aprendices.html"><i class="fa-solid fa-graduation-cap fa-lg" style="color: #ffffff;"></i></i>
                        </a>
                    </li>
                    <li><a href="../html/instructores.html"><i class="fa-solid fa-person-chalkboard fa-lg" style="color: #ffffff;"></i></a></li>
                    <li><a href="../html/horario.html"><i class="fa-solid fa-calendar-days fa-lg" style="color: #ffffff;"></i></a></li>
                    <li><a href="../html/asistencia.html"><i class="fa-solid fa-user-check fa-lg" style="color: #ffffff;"></i></a></li>
                    <li><a href="../html/competencias.html"><svg class="diferentes" fill="#ffffff" width="22.5px" height="auto" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>books</title> <path d="M30.156 26.492l-6.211-23.184c-0.327-1.183-1.393-2.037-2.659-2.037-0.252 0-0.495 0.034-0.727 0.097l0.019-0.004-2.897 0.776c-0.325 0.094-0.609 0.236-0.86 0.42l0.008-0.005c-0.49-0.787-1.349-1.303-2.33-1.306h-2.998c-0.789 0.001-1.5 0.337-1.998 0.873l-0.002 0.002c-0.5-0.537-1.211-0.873-2-0.874h-3c-1.518 0.002-2.748 1.232-2.75 2.75v24c0.002 1.518 1.232 2.748 2.75 2.75h3c0.789-0.002 1.5-0.337 1.998-0.873l0.002-0.002c0.5 0.538 1.211 0.873 2 0.875h2.998c1.518-0.002 2.748-1.232 2.75-2.75v-16.848l4.699 17.54c0.327 1.182 1.392 2.035 2.656 2.037h0c0.001 0 0.003 0 0.005 0 0.251 0 0.494-0.034 0.725-0.098l-0.019 0.005 2.898-0.775c1.182-0.326 2.036-1.392 2.036-2.657 0-0.252-0.034-0.497-0.098-0.729l0.005 0.019zM18.415 9.708l5.31-1.423 3.753 14.007-5.311 1.422zM18.068 3.59l2.896-0.776c0.097-0.027 0.209-0.043 0.325-0.043 0.575 0 1.059 0.389 1.204 0.918l0.002 0.009 0.841 3.139-5.311 1.423-0.778-2.905v-1.055c0.153-0.347 0.449-0.607 0.812-0.708l0.009-0.002zM11.5 2.75h2.998c0.69 0.001 1.249 0.56 1.25 1.25v3.249l-5.498 0.001v-3.25c0.001-0.69 0.56-1.249 1.25-1.25h0zM8.75 23.25h-5.5v-14.5l5.5-0.001zM10.25 8.75l5.498-0.001v14.501h-5.498zM4.5 2.75h3c0.69 0.001 1.249 0.56 1.25 1.25v3.249l-5.5 0.001v-3.25c0.001-0.69 0.56-1.249 1.25-1.25h0zM7.5 29.25h-3c-0.69-0.001-1.249-0.56-1.25-1.25v-3.25h5.5v3.25c-0.001 0.69-0.56 1.249-1.25 1.25h-0zM14.498 29.25h-2.998c-0.69-0.001-1.249-0.56-1.25-1.25v-3.25h5.498v3.25c-0.001 0.69-0.56 1.249-1.25 1.25h-0zM28.58 27.826c-0.164 0.285-0.43 0.495-0.747 0.582l-0.009 0.002-2.898 0.775c-0.096 0.026-0.206 0.041-0.319 0.041-0.575 0-1.060-0.387-1.208-0.915l-0.002-0.009-0.841-3.14 5.311-1.422 0.841 3.14c0.027 0.096 0.042 0.207 0.042 0.321 0 0.23-0.063 0.446-0.173 0.63l0.003-0.006z"></path> </g></svg></a></li>
                    <li> <a href="../html/resultados.html"><svg class="diferentes" width="22.5px" height="auto" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" fill="#ffffff" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M0 0h48v48H0z" fill="none"></path> <g id="Shopicon"> <polygon points="8,10 26,10 26,6 4,6 4,42 30,42 30,38 8,38 "></polygon> <polygon points="35,14 41,14 44,14 44,6 32,6 32,14 "></polygon> <polygon points="41,18 35,18 32,18 32,34.701 38,42.201 44,34.701 44,18 "></polygon> <polygon points="21,13.856 17.229,17.627 15.343,15.742 12.516,18.571 17.229,23.283 23.828,16.685 "></polygon> <polygon points="15.343,25.742 12.516,28.571 17.229,33.283 23.828,26.685 21,23.856 17.229,27.627 "></polygon> </g> </g></svg></a></li>
                    <li></li><a href="../html/seguimiento.html"><i class="fa-solid fa-list-check fa-lg" style="color: #ffffff;"></i></a></li>

                </ul>
            </div>
        </nav>


        <div class="navbar1">
            <a class="logo" href="{{route('home.index')}}"><img src="../resources/img/logo.png" alt=""></a>
            <a class="logo" href="{{route('home.index')}}"><h1 class="titulo_logo">ADSO Manager</h1></a>
        </div>

        <div class="navbar2">
            <a href="../html/panel.html" class="panell1">Panel</a>
            <a href="../html/perfil.html" class="panell2">Cuenta</a>

            <a href="../index.html" class="panell3">Salir</a>
            <a href="../html/perfil.html" class="panell4">Administrador</a>
            <a href=""><i class="fa-solid fa-user fa-lg" style="color: #b9babb;"></i></a>
        </div>





    </header>

<main>
    @yield('content')
</main>


<footer>
    <div class="contenedor ">
        <p>COPYRIGHT ® 2023 ADSO MANAGER </p>
        <p class="copy ">MEJOR PLANEACIÓN ES MEJOR EDUCACIÓN</p>
    </div>
    <div class="politicasoporte ">
        <a href="../html/politica.html">POLÍTICA DE PRIVACIDAD </a>
        <a class="division ">|</a>
        <a href="../html/soporte.html ">CONTACTA A SOPORTE </a>

    </div>
</footer>
</body>
</html>


