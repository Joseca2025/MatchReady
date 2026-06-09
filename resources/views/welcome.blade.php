<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Match-Ready</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --marino: #2F3A53;
            --teal-electrico: #14B8A6;
            --naranja-sport: #F97316;
        }

        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* Estilos personalizados sobre Bootstrap */
        .bg-marino {
            background-color: var(--marino) !important;
        }

        .text-teal {
            color: var(--teal-electrico) !important;
        }

        .btn-teal {
            background-color: var(--teal-electrico);
            color: var(--marino);
            font-weight: 700;
            border-radius: 12px;
            border: none;
        }

        .btn-teal:hover {
            background-color: #119f8f;
            color: white;
        }

        .btn-outline-white {
            color: white;
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 12px;
            font-weight: 600;
        }

        .btn-outline-white:hover {
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
        }

        .card-deportiva {
            border: none;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card-deportiva:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .badge-deporte {
            background-color: rgba(20, 184, 166, 0.1);
            color: var(--teal-electrico);
            font-weight: bold;
            padding: 6px 12px;
            border-radius: 30px;
            font-size: 0.75rem;
            text-transform: uppercase;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand fw-black fs-3 text-dark tracking-tight" href="#" style="font-weight: 800;">
                Match<span class="text-teal">Ready</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto fw-semibold text-secondary">
                    <li class="nav-item"><a class="nav-link px-3" href="#canchas">Canchas</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#equipos">Equipos</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#contacto">Contacto</a></li>
                </ul>
                <a href="#" class="btn btn-dark px-4 py-2"
                    style="background-color: var(--marino); border-radius: 10px;">
                    Ingresar al Sistema
                </a>
            </div>
        </div>
    </nav>
    <header class="bg-marino text-white text-center py-5 position-relative overflow-hidden">
        <div class="container my-5 position-relative" style="z-index: 2;">
            <span
                class="badge bg-secondary bg-opacity-25 text-teal mb-3 px-3 py-2 border border-secondary border-opacity-20 rounded-pill text-uppercase font-monospace"
                style="font-size: 0.75rem;">
                ⚽ Todo tipo de deportes en un solo lugar
            </span>
            <h1 class="display-4 fw-bold tracking-tight mb-3" style="font-weight: 800;">
                Gestiona y reserva tus canchas <br>
                <span class="text-teal">al instante.</span>
            </h1>
            <p class="lead text-white-50 max-w-2xl mx-auto mb-4" style="max-w: 600px; margin: 0 auto;">
                Fútbol, Tenis, Pádel, Ráquetbol y más. Reserva el terreno de juego y alquila tu equipamiento desde
                cualquier dispositivo de forma rápida.
            </p>
            <div class="d-flex justify-content-center gap-3 pt-2">
                <a href="#canchas" class="btn btn-teal px-4 py-3 shadow">Ver Canchas</a>
                <a href="#equipos" class="btn btn-outline-white px-4 py-3">Alquilar Equipos</a>
            </div>
        </div>
    </header>
</body>

</html>
