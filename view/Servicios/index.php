<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de inicio</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- Enlace JS crearCita -->
    <script defer src="views/js/crearCita.js"></script>

</head>

<body>
    <div class="container">

        <!-- Menú de navegación -->
        <header class="d-flex flex-row-reverse py-3 mb-4 border-bottom">
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="#" class="nav-link">Inicio</a></li>
                <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Agendar Servicio</a></li>
            </ul>
        </header>

        <!-- Formulario -->
        <div class="container text-center">

            <!-- Seccion Google O Facebook   -->
            <form class="row d-flex justify-content-center" id="form">

                <!-- Primera tarjeta -->
                <div class="col-5 card m-1">

                    <!-- Imagen de la tarjeta -->
                    <img src="..." class="card-img-top" alt="...">

                    <div class="card-body">

                        <!-- Titulo de la tarjeta -->
                        <h5 class="card-title">Google Ads</h5>

                        <!-- Descripción de la tarjeta -->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                        <!-- Check Radio 1 -->
                        <div class="form-check d-flex justify-content-center">
                            <input class="form-check-input p-3" type="radio" name="servicio" id="google" checked>
                        </div>

                    </div>

                </div>

                <!-- Segunda tarjeta -->
                <div class="col-5 card m-1">

                    <!-- Imagen de la tarjeta -->
                    <img src="..." class="card-img-top" alt="...">

                    <div class="card-body">

                        <!-- Titulo de la tarjeta -->
                        <h5 class="card-title">Facebook Ads</h5>

                        <!-- Descripción de la tarjeta -->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                        <!-- Check Radio 2 -->
                        <div class="form-check d-flex justify-content-center">
                            <input class="form-check-input p-3" type="radio" name="servicio" id="facebook">
                        </div>

                    </div>

                </div>

                <!-- Campos a llenar -->
                <div class="row d-flex justify-content-center">

                    <!-- Nombre Email Número -->
                    <div class="col-5">

                        <!-- Nombre -->
                        <label class="row d-flex justify-content-start m-1 ">Nombre:</label>
                        <input type="text" class="form-control mt-1" id="nombre" placeholder="Maria" required>

                        <!-- Email -->
                        <label class="row d-flex justify-content-start m-1 ">Email:</label>
                        <input type="email" class="form-control mt-1" id="email" placeholder="name@example.com" required>

                        <!-- Teléfono -->
                        <label class="row d-flex justify-content-start m-1 ">Número:</label>
                        <input type="number" class="form-control mt-1" id="numero" placeholder="+34 600 00 00 00" required>

                    </div>

                    <!-- Fecha Hora y Botón -->
                    <div class="col-5">

                        <!-- Fecha Formulario -->
                        <label class="row d-flex justify-content-start m-1 ">Fecha:</label>
                        <input type="date" class="form-control" id="fecha" placeholder="name@example.com" required>

                        <!-- Selector -->
                        <label class="row d-flex justify-content-start m-1 ">Hora:</label>
                        <select class="form-select" aria-label="Default select example" id="hora" name="hora" required>
                            <option value=""selected>Selecciona la hora</option>
                            <option value="1">9:00 AM - 10:00 AM</option>
                            <option value="2">10:00 AM - 11:00 AM</option>
                            <option value="4">11:00 AM - 12:00 PM</option>
                            <option value="5">12:00 PM - 01:00 PM</option>
                            <option value="6">01:00 PM - 02:00 PM</option>
                            <option value="7">02:00 PM - 03:00 PM</option>
                            <option value="8">04:00 PM - 05:00 PM</option>
                        </select>

                        <!-- Botón de envíar -->
                        <button type="submit" class="btn btn-primary mt-4" id="btnCrearCita" onclick="validarYEnviar()">Programar cita</button>
                        <!-- Parrafo Mensaje Errores -->
                        <p id="parrafoMensaje"></p>

                    </div>

                </div>

            </form>

        </div>

    </div>


    
</body>

</html>