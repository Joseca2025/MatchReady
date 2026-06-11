<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Match - Ready</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    @vite(['resources/css/app.css'])
</head>

<body>
    <nav id="mainNav" class="navbar navbar-expand-md navbar-light bg-white shadow-sm sticky-top"
        style="transition: box-shadow 0.3s ease;">
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
                <a href="#registro" class="btn btn-dark px-4 py-2 me-2 mb-2 mb-md-0"
                    style="background-color: var(--marino); border-radius: 10px;">
                    Registrarse
                </a>
                <a href="#login" class="btn btn-dark px-4 py-2"
                    style="background-color: var(--marino); border-radius: 10px;">
                    Ingresar al Sistema
                </a>
            </div>
        </div>
    </nav>

    <header class="text-white py-5 position-relative overflow-hidden fade-in-section"
        style="
    background-image:
        linear-gradient(105deg, rgba(47,58,83,0.97) 40%, rgba(47,58,83,0.55) 100%),
        url('{{ asset('images/cancha.png') }}');
    background-size: cover;
    background-position: center;
    min-height: 560px;
">
        <div class="container my-5 position-relative" style="z-index: 2;">

            <div class="row align-items-center">

                <div class="col-md-6 text-start">
                    <span
                        class="badge bg-secondary bg-opacity-25 text-teal mb-3 px-3 py-2 border border-secondary border-opacity-20 rounded-pill text-uppercase font-monospace"
                        style="font-size: 0.75rem;">
                        ⚽ Todo tipo de deportes en un solo lugar
                    </span>

                    <h1 class="display-4 fw-bold tracking-tight mb-3" style="font-weight: 800;">
                        Gestiona y reserva tus canchas <br>
                        <span class="text-teal">al instante.</span>
                    </h1>

                    <p class="lead text-white-50 mb-4">
                        Fútbol, Tenis, Pádel, Ráquetbol y más. Reserva el terreno de juego y alquila tu equipamiento
                        desde cualquier dispositivo de forma rápida.
                    </p>

                    <div class="d-flex gap-3 pt-2">
                        <a href="#canchas" class="btn btn-teal px-4 py-3 shadow">Ver Canchas</a>
                        <a href="#equipos" class="btn btn-outline-white px-4 py-3">Alquilar Equipos</a>
                    </div>
                </div>

                <div class="col-md-6 text-center mt-4 mt-md-0">
                    <div id="canchaCarousel" class="carousel slide hero-image-card" data-bs-ride="carousel"
                        data-bs-interval="3000">
                        <div class="carousel-inner h-100">

                            <div class="carousel-item active h-100">
                                <img src="{{ asset('images/cancha.png') }}" class="d-block w-100 h-100"
                                    style="object-fit: cover;" alt="Cancha 1">
                            </div>

                            <div class="carousel-item h-100">
                                <img src="{{ asset('images/cancha2.jpg') }}" class="d-block w-100 h-100"
                                    style="object-fit: cover;" alt="Cancha 2">
                            </div>

                            <div class="carousel-item h-100">
                                <img src="{{ asset('images/cancha3.jpg') }}" class="d-block w-100 h-100"
                                    style="object-fit: cover;" alt="Cancha 3">
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </header>
    <section class="py-5 fade-in-section" style="background-color: #f8f9fa;">
        <div class="container py-4">

            {{-- Título --}}
            <div class="text-center mb-5">
                <span class="badge rounded-pill mb-3 px-3 py-2 text-uppercase"
                    style="background-color: rgba(20,184,166,0.1); color: #14B8A6; font-size: 0.72rem; font-weight: 700; letter-spacing: 1px;">
                    ¿Cómo funciona?
                </span>
                <h2 class="fw-bold" style="color: #2F3A53; font-size: 2rem; letter-spacing: -0.5px;">
                    Reservá en 3 simples pasos
                </h2>
                <p class="text-muted mx-auto" style="max-width: 480px;">
                    Sin llamadas, sin filas. Todo desde tu celular o computadora en menos de 2 minutos.
                </p>
            </div>

            {{-- Pasos --}}
            <div class="row g-4 justify-content-center">

                {{-- Paso 1 --}}
                <div class="col-md-4">
                    <div class="card-deportiva p-4 text-center bg-white h-100">
                        <div class="mb-4 mx-auto d-flex align-items-center justify-content-center rounded-circle"
                            style="width: 72px; height: 72px; background-color: rgba(20,184,166,0.1);">
                            <i class="bi bi-search" style="font-size: 1.8rem; color: #14B8A6;"></i>
                        </div>
                        <div class="badge rounded-pill mb-3 px-3 py-1"
                            style="background-color: #2F3A53; color: white; font-size: 0.7rem;">
                            Paso 1
                        </div>
                        <h5 class="fw-bold mb-2" style="color: #2F3A53;">Elegí tu deporte</h5>
                        <p class="text-muted" style="font-size: 0.9rem; line-height: 1.7;">
                            Explorá las canchas disponibles filtrando por deporte, fecha y horario que más te convenga.
                        </p>
                    </div>
                </div>

                {{-- Paso 2 --}}
                <div class="col-md-4">
                    <div class="card-deportiva p-4 text-center h-100" style="background-color: #2F3A53;">
                        <div class="mb-4 mx-auto d-flex align-items-center justify-content-center rounded-circle"
                            style="width: 72px; height: 72px; background-color: rgba(20,184,166,0.15);">
                            <i class="bi bi-calendar2-check" style="font-size: 1.8rem; color: #14B8A6;"></i>
                        </div>
                        <div class="badge rounded-pill mb-3 px-3 py-1"
                            style="background-color: #14B8A6; color: #2F3A53; font-size: 0.7rem; font-weight: 700;">
                            Paso 2
                        </div>
                        <h5 class="fw-bold mb-2 text-white">Reservá tu cancha</h5>
                        <p style="color: rgba(255,255,255,0.6); font-size: 0.9rem; line-height: 1.7;">
                            Seleccioná el turno y confirmá tu reserva al instante. Recibís una confirmación inmediata.
                        </p>
                    </div>
                </div>

                {{-- Paso 3 --}}
                <div class="col-md-4">
                    <div class="card-deportiva p-4 text-center bg-white h-100">
                        <div class="mb-4 mx-auto d-flex align-items-center justify-content-center rounded-circle"
                            style="width: 72px; height: 72px; background-color: rgba(20,184,166,0.1);">
                            <i class="bi bi-trophy" style="font-size: 1.8rem; color: #14B8A6;"></i>
                        </div>
                        <div class="badge rounded-pill mb-3 px-3 py-1"
                            style="background-color: #2F3A53; color: white; font-size: 0.7rem;">
                            Paso 3
                        </div>
                        <h5 class="fw-bold mb-2" style="color: #2F3A53;">¡A jugar!</h5>
                        <p class="text-muted" style="font-size: 0.9rem; line-height: 1.7;">
                            Presentate en la cancha a tu hora. También podés alquilar equipamiento desde la misma app.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    {{-- ============================================
     2. DEPORTES DISPONIBLES
     ============================================ --}}
    <section class="py-5 fade-in-section" style="background-color: #ffffff;">
        <div class="container py-4">

            <div class="text-center mb-5">
                <span class="badge rounded-pill mb-3 px-3 py-2 text-uppercase"
                    style="background-color: rgba(20,184,166,0.1); color: #14B8A6; font-size: 0.72rem; font-weight: 700; letter-spacing: 1px;">
                    Deportes
                </span>
                <h2 class="fw-bold" style="color: #2F3A53; font-size: 2rem; letter-spacing: -0.5px;">
                    Canchas para cada deporte
                </h2>
                <p class="text-muted mx-auto" style="max-width: 480px;">
                    Encontrá la cancha perfecta para tu deporte favorito y reservá en segundos.
                </p>
            </div>

            <div class="row g-4 justify-content-center">

                {{-- Fútbol --}}
                <div class="col-md-6 col-lg-4">
                    <div class="deporte-card position-relative overflow-hidden rounded-4">
                        <img src="{{ asset('images/futbol2.jpg') }}" alt="Fútbol" class="w-100"
                            style="height: 280px; object-fit: cover; display: block;">
                        <div
                            class="deporte-overlay position-absolute inset-0 d-flex flex-column justify-content-end p-4">
                            <div class="d-flex align-items-center gap-2 mb-1">
                                <i class="bi bi-dribbble text-white" style="font-size: 1.2rem;"></i>
                                <h5 class="text-white fw-bold mb-0">Fútbol</h5>
                            </div>
                            <p class="text-white-50 mb-3" style="font-size: 0.85rem;">Canchas de 5, 7 y 11 jugadores
                            </p>
                            <a href="#canchas" class="btn btn-teal btn-sm px-3 py-2 align-self-start">
                                Ver canchas <i class="bi bi-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Pádel --}}
                <div class="col-md-6 col-lg-4">
                    <div class="deporte-card position-relative overflow-hidden rounded-4">
                        <img src="{{ asset('images/padel1.jpg') }}" alt="Pádel" class="w-100"
                            style="height: 280px; object-fit: cover; display: block;">
                        <div
                            class="deporte-overlay position-absolute inset-0 d-flex flex-column justify-content-end p-4">
                            <div class="d-flex align-items-center gap-2 mb-1">
                                <i class="bi bi-lightning-charge text-white" style="font-size: 1.2rem;"></i>
                                <h5 class="text-white fw-bold mb-0">Pádel</h5>
                            </div>
                            <p class="text-white-50 mb-3" style="font-size: 0.85rem;">Canchas techadas y al aire libre
                            </p>
                            <a href="#canchas" class="btn btn-teal btn-sm px-3 py-2 align-self-start">
                                Ver canchas <i class="bi bi-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ============================================
     3. ESTADÍSTICAS ANIMADAS
     ============================================ --}}
    <section class="py-5 fade-in-section" style="background-color: #2F3A53;">
        <div class="container py-4">
            <div class="row g-4 text-center justify-content-center" id="statsSection">

                <div class="col-6 col-md-3">
                    <div class="stat-num text-white fw-black" style="font-size: 2.8rem; letter-spacing: -1px;"
                        data-target="200" data-prefix="+" data-suffix="">0</div>
                    <div class="text-uppercase mt-1"
                        style="color: rgba(255,255,255,0.45); font-size: 0.72rem; font-weight: 600; letter-spacing: 1px;">
                        Canchas activas</div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="stat-num text-white fw-black" style="font-size: 2.8rem; letter-spacing: -1px;"
                        data-target="5000" data-prefix="" data-suffix="+">0</div>
                    <div class="text-uppercase mt-1"
                        style="color: rgba(255,255,255,0.45); font-size: 0.72rem; font-weight: 600; letter-spacing: 1px;">
                        Reservas al mes</div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="stat-num text-white fw-black" style="font-size: 2.8rem; letter-spacing: -1px;"
                        data-target="6" data-prefix="" data-suffix="">0</div>
                    <div class="text-uppercase mt-1"
                        style="color: rgba(255,255,255,0.45); font-size: 0.72rem; font-weight: 600; letter-spacing: 1px;">
                        Deportes</div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="stat-num text-white fw-black" style="font-size: 2.8rem; letter-spacing: -1px;"
                        data-target="98" data-prefix="" data-suffix="%">0</div>
                    <div class="text-uppercase mt-1"
                        style="color: rgba(255,255,255,0.45); font-size: 0.72rem; font-weight: 600; letter-spacing: 1px;">
                        Satisfacción</div>
                </div>

            </div>
        </div>
    </section>

    {{-- ============================================
     4. TESTIMONIOS
     ============================================ --}}
    <section class="fade-in-section py-5" style="background-color: #f8f9fa;">
        <div class="container py-4">

            <div class="text-center mb-5">
                <span class="badge rounded-pill mb-3 px-3 py-2 text-uppercase"
                    style="background-color: rgba(20,184,166,0.1); color: #14B8A6; font-size: 0.72rem; font-weight: 700; letter-spacing: 1px;">
                    Testimonios
                </span>
                <h2 class="fw-bold" style="color: #2F3A53; font-size: 2rem; letter-spacing: -0.5px;">
                    Lo que dicen nuestros usuarios
                </h2>
            </div>

            <div class="row g-4">

                <div class="col-md-4">
                    <div class="card-deportiva bg-white p-4 h-100">
                        <div class="d-flex gap-1 mb-3">
                            <i class="bi bi-star-fill" style="color: #F97316;"></i>
                            <i class="bi bi-star-fill" style="color: #F97316;"></i>
                            <i class="bi bi-star-fill" style="color: #F97316;"></i>
                            <i class="bi bi-star-fill" style="color: #F97316;"></i>
                            <i class="bi bi-star-fill" style="color: #F97316;"></i>
                        </div>
                        <p class="text-muted mb-4" style="font-size: 0.95rem; line-height: 1.7;">
                            "Reservar la cancha nunca fue tan fácil. En menos de 2 minutos tengo mi turno confirmado. Lo
                            uso cada semana con mi equipo."
                        </p>
                        <div class="d-flex align-items-center gap-3">
                            <div class="rounded-circle d-flex align-items-center justify-content-center fw-bold text-white"
                                style="width: 44px; height: 44px; background-color: #2F3A53; font-size: 1rem; flex-shrink: 0;">
                                CA
                            </div>
                            <div>
                                <div class="fw-bold" style="color: #2F3A53; font-size: 0.9rem;">Carlos A.</div>
                                <div class="text-muted" style="font-size: 0.78rem;">Jugador de fútbol 5</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card-deportiva p-4 h-100" style="background-color: #2F3A53;">
                        <div class="d-flex gap-1 mb-3">
                            <i class="bi bi-star-fill" style="color: #F97316;"></i>
                            <i class="bi bi-star-fill" style="color: #F97316;"></i>
                            <i class="bi bi-star-fill" style="color: #F97316;"></i>
                            <i class="bi bi-star-fill" style="color: #F97316;"></i>
                            <i class="bi bi-star-fill" style="color: #F97316;"></i>
                        </div>
                        <p style="color: rgba(255,255,255,0.65); font-size: 0.95rem; line-height: 1.7;"
                            class="mb-4">
                            "Administro 3 canchas de pádel y MatchReady me ahorró horas de llamadas. Mis clientes
                            reservan solos y yo gestiono todo desde un panel."
                        </p>
                        <div class="d-flex align-items-center gap-3">
                            <div class="rounded-circle d-flex align-items-center justify-content-center fw-bold text-white"
                                style="width: 44px; height: 44px; background-color: #14B8A6; color: #2F3A53 !important; font-size: 1rem; flex-shrink: 0;">
                                MR
                            </div>
                            <div>
                                <div class="fw-bold text-white" style="font-size: 0.9rem;">Martina R.</div>
                                <div style="color: rgba(255,255,255,0.45); font-size: 0.78rem;">Dueña de complejo
                                    deportivo</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card-deportiva bg-white p-4 h-100">
                        <div class="d-flex gap-1 mb-3">
                            <i class="bi bi-star-fill" style="color: #F97316;"></i>
                            <i class="bi bi-star-fill" style="color: #F97316;"></i>
                            <i class="bi bi-star-fill" style="color: #F97316;"></i>
                            <i class="bi bi-star-fill" style="color: #F97316;"></i>
                            <i class="bi bi-star-half" style="color: #F97316;"></i>
                        </div>
                        <p class="text-muted mb-4" style="font-size: 0.95rem; line-height: 1.7;">
                            "Me encanta que puedo ver la disponibilidad en tiempo real y también alquilar la raqueta
                            desde la misma app. Todo en un solo lugar."
                        </p>
                        <div class="d-flex align-items-center gap-3">
                            <div class="rounded-circle d-flex align-items-center justify-content-center fw-bold text-white"
                                style="width: 44px; height: 44px; background-color: #2F3A53; font-size: 1rem; flex-shrink: 0;">
                                LG
                            </div>
                            <div>
                                <div class="fw-bold" style="color: #2F3A53; font-size: 0.9rem;">Lucas G.</div>
                                <div class="text-muted" style="font-size: 0.78rem;">Jugador de tenis y pádel</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ============================================
     EVENTOS Y CELEBRACIONES
     ============================================ --}}
    <section class="fade-in-section py-5" style="background-color: #ffffff;">
        <div class="container py-4">

            {{-- Título --}}
            <div class="text-center mb-5">
                <span class="badge rounded-pill mb-3 px-3 py-2 text-uppercase"
                    style="background-color: rgba(249,115,22,0.1); color: #F97316; font-size: 0.72rem; font-weight: 700; letter-spacing: 1px;">
                    🎉 Eventos especiales
                </span>
                <h2 class="fw-bold" style="color: #2F3A53; font-size: 2rem; letter-spacing: -0.5px;">
                    Más que una cancha, <span style="color: #14B8A6;">una experiencia.</span>
                </h2>
                <p class="text-muted mx-auto" style="max-width: 520px;">
                    Organizamos torneos, cumpleaños, agasajos y todo tipo de celebraciones deportivas. Vos elegís el
                    evento, nosotros nos encargamos del resto.
                </p>
            </div>

            {{-- Cards de tipos de evento --}}
            <div class="row g-4 mb-5">
                <div class="col-md-4">
                    <div class="card-deportiva bg-white p-4 h-100 text-center">
                        <div class="mb-3 mx-auto d-flex align-items-center justify-content-center rounded-circle"
                            style="width: 64px; height: 64px; background-color: rgba(249,115,22,0.1);">
                            <i class="bi bi-trophy" style="font-size: 1.6rem; color: #F97316;"></i>
                        </div>
                        <h5 class="fw-bold mb-2" style="color: #2F3A53;">Torneos</h5>
                        <p class="text-muted" style="font-size: 0.88rem; line-height: 1.7;">
                            Organizamos torneos relámpago, ligas y campeonatos para grupos de amigos, empresas o clubes.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-deportiva p-4 h-100 text-center" style="background-color: #2F3A53;">
                        <div class="mb-3 mx-auto d-flex align-items-center justify-content-center rounded-circle"
                            style="width: 64px; height: 64px; background-color: rgba(20,184,166,0.15);">
                            <i class="bi bi-balloon-heart" style="font-size: 1.6rem; color: #14B8A6;"></i>
                        </div>
                        <h5 class="fw-bold mb-2 text-white">Cumpleaños y Agasajos</h5>
                        <p style="color: rgba(255,255,255,0.6); font-size: 0.88rem; line-height: 1.7;">
                            Festejá tu cumpleaños o agasajá a alguien especial con una tarde deportiva inolvidable.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-deportiva bg-white p-4 h-100 text-center">
                        <div class="mb-3 mx-auto d-flex align-items-center justify-content-center rounded-circle"
                            style="width: 64px; height: 64px; background-color: rgba(20,184,166,0.1);">
                            <i class="bi bi-people" style="font-size: 1.6rem; color: #14B8A6;"></i>
                        </div>
                        <h5 class="fw-bold mb-2" style="color: #2F3A53;">Eventos Corporativos</h5>
                        <p class="text-muted" style="font-size: 0.88rem; line-height: 1.7;">
                            Team buildings, olimpiadas empresariales y actividades de integración para tu empresa.
                        </p>
                    </div>
                </div>
            </div>

            {{-- Título galería --}}
            <div class="text-center mb-4">
                <h4 class="fw-bold" style="color: #2F3A53; letter-spacing: -0.5px;">
                    Eventos realizados
                </h4>
                <p class="text-muted" style="font-size: 0.9rem;">Mirá lo que vivieron quienes ya confiaron en
                    nosotros.</p>
            </div>

            {{-- Galería de eventos --}}
            <div class="row g-3 mb-5">

                {{-- Imagen grande izquierda --}}
                <div class="col-md-6">
                    <div class="evento-img-card rounded-4 overflow-hidden" style="height: 320px;">
                        <img src="{{ asset('images/evento1.jpg') }}" alt="Evento 1" class="w-100 h-100"
                            style="object-fit: cover;">
                    </div>
                </div>

                {{-- Dos imágenes apiladas derecha --}}
                <div class="col-md-6 d-flex flex-column gap-3">
                    <div class="evento-img-card rounded-4 overflow-hidden" style="height: 152px;">
                        <img src="{{ asset('images/evento2.jpg') }}" alt="Evento 2" class="w-100 h-100"
                            style="object-fit: cover;">
                    </div>
                    <div class="evento-img-card rounded-4 overflow-hidden" style="height: 152px;">
                        <img src="{{ asset('images/evento3.jpg') }}" alt="Evento 3" class="w-100 h-100"
                            style="object-fit: cover;">
                    </div>
                </div>

                {{-- Tres imágenes abajo --}}
                <div class="col-md-4">
                    <div class="evento-img-card rounded-4 overflow-hidden" style="height: 200px;">
                        <img src="{{ asset('images/evento4.jpg') }}" alt="Evento 4" class="w-100 h-100"
                            style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="evento-img-card rounded-4 overflow-hidden" style="height: 200px;">
                        <img src="{{ asset('images/evento5.jpg') }}" alt="Evento 5" class="w-100 h-100"
                            style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="evento-img-card rounded-4 overflow-hidden d-flex align-items-center justify-content-center"
                        style="height: 200px; background-color: #2F3A53; cursor: pointer;">
                        <div class="text-center">
                            <i class="bi bi-images" style="font-size: 2rem; color: #14B8A6;"></i>
                            <p class="text-white fw-bold mt-2 mb-0" style="font-size: 0.9rem;">Ver más eventos</p>
                        </div>
                    </div>
                </div>

            </div>

            {{-- Banner CTA --}}
            <div class="rounded-4 p-5 d-flex flex-column flex-md-row align-items-center justify-content-between gap-4"
                style="background: linear-gradient(105deg, #2F3A53 60%, #1a2335 100%); border: 1px solid rgba(255,255,255,0.06);">
                <div>
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <i class="bi bi-calendar-event" style="color: #14B8A6; font-size: 1.1rem;"></i>
                        <span class="text-uppercase fw-bold"
                            style="color: #14B8A6; font-size: 0.72rem; letter-spacing: 1px;">¿Tenés algo que
                            celebrar?</span>
                    </div>
                    <h4 class="text-white fw-bold mb-1" style="letter-spacing: -0.5px;">
                        Contanos tu evento y lo organizamos juntos.
                    </h4>
                    <p style="color: rgba(255,255,255,0.45); font-size: 0.9rem;" class="mb-0">
                        Torneos · Cumpleaños · Agasajos · Eventos corporativos
                    </p>
                </div>
                <div class="d-flex gap-3 flex-shrink-0 flex-wrap">
                    <a href="https://wa.me/591700000000" target="_blank"
                        class="btn px-4 py-3 fw-bold d-flex align-items-center gap-2"
                        style="background-color: #25D366; color: white; border-radius: 12px; font-size: 0.9rem; white-space: nowrap;">
                        <i class="bi bi-whatsapp"></i> Consultar por WhatsApp
                    </a>
                    <a href="#contacto" class="btn btn-outline-white px-4 py-3"
                        style="font-size: 0.9rem; white-space: nowrap;">
                        Ver más info
                    </a>
                </div>
            </div>

        </div>
    </section>
    {{-- ============================================
     5. CTA FINAL
     ============================================ --}}
    <section class="py-5 position-relative overflow-hidden fade-in-section" style="background-color: #1a2335;">
        <div class="position-absolute"
            style="inset:0; background: radial-gradient(ellipse at 70% 50%, rgba(20,184,166,0.08) 0%, transparent 70%);">
        </div>
        <div class="container py-5 text-center position-relative" style="z-index: 2;">
            <span class="badge rounded-pill mb-4 px-3 py-2 text-uppercase"
                style="background-color: rgba(20,184,166,0.15); color: #14B8A6; font-size: 0.72rem; font-weight: 700; letter-spacing: 1px;">
                ¿Listo para jugar?
            </span>
            <h2 class="fw-black text-white mb-3" style="font-size: clamp(1.8rem, 4vw, 2.8rem); letter-spacing: -1px;">
                Reservá tu cancha <span style="color: #14B8A6;">ahora mismo.</span>
            </h2>
            <p
                style="color: rgba(255,255,255,0.5); max-width: 480px; margin: 0 auto 2.5rem; font-size: 1rem; line-height: 1.7;">
                Sin registros complicados. Elegí tu deporte, tu horario y confirmá en segundos.
            </p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="#canchas" class="btn btn-teal px-5 py-3 shadow" style="font-size: 1rem;">
                    <i class="bi bi-calendar2-check me-2"></i>Reservar ahora
                </a>
                <a href="#canchas" class="btn btn-outline-white px-5 py-3" style="font-size: 1rem;">
                    Ver canchas disponibles
                </a>
            </div>
        </div>
    </section>
    {{-- ============================================
     FOOTER
     ============================================ --}}
    <footer style="background-color: #1a2335; border-top: 1px solid rgba(255,255,255,0.06);" class="fade-in-section">
        <div class="container py-5">
            <div class="row g-4">

                {{-- Logo y descripción --}}
                <div class="col-md-4">
                    <a href="#" class="text-decoration-none d-inline-block mb-3"
                        style="font-size: 1.4rem; font-weight: 900; color: white; letter-spacing: -0.5px;">
                        Match<span style="color: #14B8A6;">Ready</span>
                    </a>
                    <p style="color: rgba(255,255,255,0.4); font-size: 0.9rem; line-height: 1.75; max-width: 280px;">
                        La plataforma más fácil para reservar canchas y alquilar equipamiento deportivo.
                    </p>
                    <div class="d-flex gap-3 mt-4">
                        <a href="#" class="social-icon" aria-label="Instagram">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="#" class="social-icon" aria-label="Facebook">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="#" class="social-icon" aria-label="WhatsApp">
                            <i class="bi bi-whatsapp"></i>
                        </a>
                    </div>
                </div>

                {{-- Links plataforma --}}
                <div class="col-6 col-md-2 offset-md-1">
                    <h6 class="text-uppercase fw-bold mb-3"
                        style="color: rgba(255,255,255,0.3); font-size: 0.7rem; letter-spacing: 1.5px;">Plataforma</h6>
                    <ul class="list-unstyled d-flex flex-column gap-2">
                        <li><a href="#canchas" class="footer-link">Ver Canchas</a></li>
                        <li><a href="#equipos" class="footer-link">Alquilar Equipos</a></li>
                        <li><a href="#" class="footer-link">Cómo funciona</a></li>
                        <li><a href="#" class="footer-link">Deportes</a></li>
                    </ul>
                </div>

                {{-- Links empresa --}}
                <div class="col-6 col-md-2">
                    <h6 class="text-uppercase fw-bold mb-3"
                        style="color: rgba(255,255,255,0.3); font-size: 0.7rem; letter-spacing: 1.5px;">Empresa</h6>
                    <ul class="list-unstyled d-flex flex-column gap-2">
                        <li><a href="#" class="footer-link">Sobre nosotros</a></li>
                        <li><a href="#contacto" class="footer-link">Contacto</a></li>
                        <li><a href="#" class="footer-link">Términos de uso</a></li>
                        <li><a href="#" class="footer-link">Privacidad</a></li>
                    </ul>
                </div>

                {{-- Contacto --}}
                <div class="col-md-3">
                    <h6 class="text-uppercase fw-bold mb-3"
                        style="color: rgba(255,255,255,0.3); font-size: 0.7rem; letter-spacing: 1.5px;">Contacto</h6>
                    <ul class="list-unstyled d-flex flex-column gap-3">
                        <li class="d-flex align-items-center gap-2"
                            style="color: rgba(255,255,255,0.45); font-size: 0.88rem;">
                            <i class="bi bi-whatsapp" style="color: #14B8A6;"></i>
                            +591 700 00000
                        </li>
                        <li class="d-flex align-items-center gap-2"
                            style="color: rgba(255,255,255,0.45); font-size: 0.88rem;">
                            <i class="bi bi-envelope" style="color: #14B8A6;"></i>
                            hola@matchready.com
                        </li>
                        <li class="d-flex align-items-center gap-2"
                            style="color: rgba(255,255,255,0.45); font-size: 0.88rem;">
                            <i class="bi bi-geo-alt" style="color: #14B8A6;"></i>
                            Santa Cruz, Bolivia
                        </li>
                    </ul>
                </div>

            </div>

            {{-- Línea inferior --}}
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mt-5 pt-4"
                style="border-top: 1px solid rgba(255,255,255,0.06);">
                <p style="color: rgba(255,255,255,0.25); font-size: 0.8rem;" class="mb-2 mb-md-0">
                    © {{ date('Y') }} MatchReady. Todos los derechos reservados.
                </p>
                <p style="color: rgba(255,255,255,0.2); font-size: 0.8rem;" class="mb-0">
                    Hecho con <span style="color: #14B8A6;">♥</span> en Bolivia
                </p>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // ── Navbar sombra al scroll ──
        const nav = document.getElementById('mainNav');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 20) {
                nav.style.boxShadow = '0 4px 24px rgba(0,0,0,0.12)';
            } else {
                nav.style.boxShadow = '0 1px 4px rgba(0,0,0,0.06)';
            }
        });

        // ── Fade-in al scrollear ──
        const fadeEls = document.querySelectorAll('.fade-in-section');
        const fadeObserver = new IntersectionObserver((entries) => {
            entries.forEach(el => {
                if (el.isIntersecting) {
                    el.target.classList.add('visible');
                    fadeObserver.unobserve(el.target);
                }
            });
        }, {
            threshold: 0.15
        });
        fadeEls.forEach(el => fadeObserver.observe(el));

        // ── Estadísticas animadas ──
        const stats = document.querySelectorAll('.stat-num');
        const statsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && !entry.target.dataset.animated) {
                    entry.target.dataset.animated = true;
                    const target = +entry.target.dataset.target;
                    const prefix = entry.target.dataset.prefix || '';
                    const suffix = entry.target.dataset.suffix || '';
                    let current = 0;
                    const step = Math.ceil(target / 60);
                    const timer = setInterval(() => {
                        current = Math.min(current + step, target);
                        entry.target.textContent = prefix + current.toLocaleString('es-AR') +
                            suffix;
                        if (current >= target) clearInterval(timer);
                    }, 30);
                }
            });
        }, {
            threshold: 0.5
        });
        stats.forEach(s => statsObserver.observe(s));
    </script>
</body>

</html>
