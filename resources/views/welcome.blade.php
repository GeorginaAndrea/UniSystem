<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema Universitario</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            /* Estilos alternativos si Vite no está disponible */
        </style>
    @endif
</head>
<body class="bg-light">
    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-university me-2"></i>Sistema Universitario
            </a>
            <div class="ms-auto">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="btn btn-outline-light me-2">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-outline-light me-2">
                            Iniciar Sesión
                        </a>

                        {{-- @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-light">
                            Registrarse
                            </a>
                        @endif --}}
                    @endauth
                @endif
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="py-5 bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4">Bienvenido a nuestra Plataforma Universitaria</h1>
                    <p class="lead mb-4">Gestiona tus estudios, materias y actividades académicas de manera eficiente con nuestro sistema integral.</p>
                    <div class="d-flex gap-3">
                        <a href="#features" class="btn btn-primary btn-lg px-4">Conoce más</a>
                        {{-- @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-outline-primary btn-lg px-4">Regístrate</a>
                        @endif --}}
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                         alt="Estudiantes universitarios" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </section>

    <!-- Carrusel de Notas del Mes -->
    <section class="py-5 bg-light" id="noticias">
        <div class="container">
            <h2 class="text-center mb-5">Noticias y Anuncios del Mes</h2>
            
            <div id="newsCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="bg-primary text-white rounded-circle p-3 me-3">
                                        <i class="fas fa-bullhorn fa-2x"></i>
                                    </div>
                                    <div>
                                        <h5 class="mb-0">Convocatoria a becas 2023</h5>
                                        <small class="text-muted">Publicado: 15 de Junio</small>
                                    </div>
                                </div>
                                <p class="card-text">Se abre la convocatoria para solicitar becas de excelencia académica para el próximo semestre. Fecha límite: 30 de junio.</p>
                                <a href="#" class="btn btn-sm btn-outline-primary">Leer más</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="bg-success text-white rounded-circle p-3 me-3">
                                        <i class="fas fa-calendar-alt fa-2x"></i>
                                    </div>
                                    <div>
                                        <h5 class="mb-0">Cambios en calendario académico</h5>
                                        <small class="text-muted">Publicado: 10 de Junio</small>
                                    </div>
                                </div>
                                <p class="card-text">Se han realizado ajustes en el calendario académico para el segundo semestre. Consulta las nuevas fechas importantes.</p>
                                <a href="#" class="btn btn-sm btn-outline-success">Ver calendario</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="bg-info text-white rounded-circle p-3 me-3">
                                        <i class="fas fa-chalkboard-teacher fa-2x"></i>
                                    </div>
                                    <div>
                                        <h5 class="mb-0">Nuevos cursos disponibles</h5>
                                        <small class="text-muted">Publicado: 5 de Junio</small>
                                    </div>
                                </div>
                                <p class="card-text">Hemos agregado nuevos cursos electivos para el próximo semestre. Explora las opciones y planifica tu horario.</p>
                                <a href="#" class="btn btn-sm btn-outline-info">Explorar cursos</a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#newsCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#newsCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                </button>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5" id="features">
        <div class="container">
            <h2 class="text-center mb-5">Nuestras Funcionalidades</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 mb-3 mx-auto" style="width: 70px; height: 70px;">
                                <i class="fas fa-book fa-2x"></i>
                            </div>
                            <h5 class="card-title">Gestión de Materias</h5>
                            <p class="card-text">Consulta tus materias, y profesores de manera sencilla e intuitiva.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="bg-success bg-opacity-10 text-success rounded-circle p-3 mb-3 mx-auto" style="width: 70px; height: 70px;">
                                <i class="fas fa-tasks fa-2x"></i>
                            </div>
                            <h5 class="card-title">Historial de calificaciones</h5>
                            <p class="card-text">Mantente al día, accede a tu historial de calificaciones.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="bg-info bg-opacity-10 text-info rounded-circle p-3 mb-3 mx-auto" style="width: 70px; height: 70px;">
                                <i class="fas fa-comments fa-2x"></i>
                            </div>
                            <h5 class="card-title">Actulizaciones constantes</h5>
                            <p class="card-text">Revisa nuestras actualizaciones en el tablero principal.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5><i class="fas fa-university me-2"></i>Sistema Universitario</h5>
                    <p class="text-muted">Plataforma integral para la gestión académica universitaria.</p>
                </div>
                <div class="col-md-3">
                    <h5>Enlaces</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-decoration-none text-muted">Inicio</a></li>
                        <li><a href="#features" class="text-decoration-none text-muted">Funcionalidades</a></li>
                        <li><a href="#noticias" class="text-decoration-none text-muted">Noticias</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Contacto</h5>
                    <ul class="list-unstyled text-muted">
                        <li><i class="fas fa-envelope me-2"></i> contacto@universidad.edu</li>
                        <li><i class="fas fa-phone me-2"></i> +1 234 567 890</li>
                    </ul>
                </div>
            </div>
            <hr class="my-4 bg-secondary">
            <div class="text-center text-muted">
                <small>&copy; 2023 Sistema Universitario. Todos los derechos reservados.</small>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
