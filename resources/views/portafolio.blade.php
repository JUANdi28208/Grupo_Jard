<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio - Grupo Jard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- Estilos personalizados -->
    <style>
        :root {
            --verde: #0c443a;
            --limon: #25d1b2;
            --degradado: linear-gradient(90deg, var(--limon), var(--verde));
            --verde-claro: rgba(12, 68, 58, 0.1);
        }

        body {
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
        }

        .bg-custom-gradient {
            background: var(--degradado);
        }

        .text-custom-green {
            color: var(--verde);
        }

        .text-custom-limon {
            color: var(--limon);
        }

        .btn-custom {
            background: var(--degradado);
            color: white;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            border: none;
            font-weight: 500;
        }

        .btn-custom:hover {
            transform: scale(1.05);
            color: white;
            box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.15);
        }

        .heading {
            background: var(--degradado);
            color: transparent;
            -webkit-background-clip: text;
            background-clip: text;
            text-transform: uppercase;
            font-weight: 700;
            letter-spacing: 1px;
        }

        .navbar {
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
            background: rgba(255, 255, 255, 0.95) !important;
            backdrop-filter: blur(10px);
        }

        .float-animation {
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0rem);
            }
            50% {
                transform: translateY(-1.5rem);
            }
        }

        .contact-form label {
            transition: all 0.2s linear;
        }

        .contact-form input:focus~label,
        .contact-form input:valid~label,
        .contact-form textarea:focus~label,
        .contact-form textarea:valid~label {
            top: -0.5rem !important;
            font-size: 1rem !important;
            color: var(--limon) !important;
        }

        section {
            padding: 5rem 0;
        }

        .project-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: none;
            overflow: hidden;
        }

        .project-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.15) !important;
        }

        .skill-bar {
            height: 10px;
            background-color: #e9ecef;
            border-radius: 5px;
            margin-bottom: 20px;
            overflow: hidden;
        }

        .skill-progress {
            height: 100%;
            border-radius: 5px;
            background: var(--degradado);
            width: 0;
            transition: width 1.5s ease-in-out;
        }

        .mission-vision-card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
        }

        .mission-vision-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.1) !important;
        }

        .mission-vision-card .card-header {
            background: var(--degradado);
            color: white;
            font-weight: 600;
            border: none;
        }

        .values-list {
            list-style: none;
            padding: 0;
        }

        .values-list li {
            padding: 0.5rem 0;
            position: relative;
            padding-left: 2rem;
            margin-bottom: 0.75rem;
        }

        .values-list li:before {
            content: "•";
            color: var(--limon);
            font-weight: bold;
            font-size: 1.5rem;
            position: absolute;
            left: 0;
            top: 0;
            line-height: 1;
        }

        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .icon-box {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            background: var(--verde-claro);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            transition: all 0.3s ease;
        }

        .icon-box i {
            font-size: 1.8rem;
            color: var(--limon);
        }

        .value-item:hover .icon-box {
            transform: scale(1.1);
            background: var(--degradado);
        }

        .value-item:hover .icon-box i {
            color: white;
        }

        .stats-number {
            font-size: 2.5rem;
            font-weight: 700;
            background: var(--degradado);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .stats-text {
            font-size: 1rem;
            color: #6c757d;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top py-3 shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                <span class="text-custom-green">Somos</span>
                <span class="text-custom-limon">Grupo Jard</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link text-custom-green" href="#inicio">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-custom-green" href="#sobre-nosotros">Sobre Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-custom-green" href="#mision-vision">Misión & Visión</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-custom-green" href="#habilidades">Habilidades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-custom-green" href="#proyectos">Proyectos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-custom-green" href="#contacto">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Sección Inicio -->
    <section id="inicio" class="py-5" style="background-color: #f8f9fa; padding-top: 100px !important;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4 animate__animated animate__fadeInDown">
                        Hola, nosotros somos <span class="text-custom-limon">Grupo Jard</span>
                    </h1>
                    <p class="lead mb-4 animate__animated animate__fadeIn animate__delay-1s">
                        Creamos soluciones digitales innovadoras que impulsan negocios y mejoran experiencias.
                    </p>
                    <a href="#proyectos" class="btn btn-custom btn-lg px-4 animate__animated animate__fadeInUp animate__delay-1s">Ver nuestros proyectos</a>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('assets/imginicio/copa-ganadora-concepto-medalla-oro.png') }}" 
                         alt="Foto de perfil" class="img-fluid rounded-circle float-animation">
                </div>
            </div>
        </div>
    </section>

    <!-- Sección Sobre Nosotros -->
    <section id="sobre-nosotros" class="py-5 bg-light">
        <div class="container">
            <h2 class="heading text-center display-4 fw-bold mb-5">Sobre Nosotros</h2>

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img src="{{ asset('assets/imginicio/grupo_jard.png') }}" 
                         alt="Sobre nosotros" class="img-fluid rounded animate__animated animate__fadeInLeft">
                </div>
                <div class="col-lg-6 animate__animated animate__fadeInRight">
                    <h3 class="mb-4">Nuestra trayectoria</h3>
                    <p class="mb-4">
                        Somos un equipo apasionado por el desarrollo de software con amplia experiencia en la creación de 
                        soluciones web y móviles. Nuestro enfoque combina creatividad y funcionalidad para 
                        entregar productos que superan las expectativas.
                    </p>
                    <p class="mb-4">
                        Nos especializamos en tecnologías modernas y disfrutamos enfrentando nuevos 
                        desafíos que nos permitan crecer profesionalmente.
                    </p>
                    <div class="d-flex">
                        <a href="#contacto" class="btn btn-custom me-3">Contáctanos</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección Misión y Visión -->
    <section id="mision-vision" class="py-5">
        <div class="container">
            <h2 class="heading text-center display-4 fw-bold mb-5">Nuestra Identidad</h2>
            
            <div class="row mb-5">
                <div class="col-md-6 mb-4 fade-in">
                    <div class="mission-vision-card card h-100 shadow-sm">
                        <div class="card-header text-center py-3">
                            <i class="fas fa-bullseye me-2"></i>Misión
                        </div>
                        <div class="card-body">
                            <p class="card-text fs-5">
                                Desarrollar soluciones tecnológicas innovadoras que impulsen la transformación digital
                                de empresas y emprendedores, ofreciendo productos de alta calidad, escalables y adaptados a las
                                necesidades del cliente.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4 fade-in">
                    <div class="mission-vision-card card h-100 shadow-sm">
                        <div class="card-header text-center py-3">
                            <i class="fas fa-eye me-2"></i>Visión
                        </div>
                        <div class="card-body">
                            <p class="card-text fs-5">
                                Ser reconocidos como líderes en desarrollo de software en Latinoamérica, destacándonos
                                por nuestra creatividad, compromiso y excelencia técnica.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <h3 class="text-center mb-4 fw-bold">Valores Corporativos</h3>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 value-item fade-in">
                                    <div class="text-center p-4">
                                        <div class="icon-box">
                                            <i class="fas fa-lightbulb"></i>
                                        </div>
                                        <h5 class="fw-bold">Innovación</h5>
                                        <p>Buscamos constantemente nuevas formas de resolver problemas.</p>
                                    </div>
                                </div>
                                <div class="col-md-4 value-item fade-in">
                                    <div class="text-center p-4">
                                        <div class="icon-box">
                                            <i class="fas fa-handshake"></i>
                                        </div>
                                        <h5 class="fw-bold">Compromiso</h5>
                                        <p>Cumplimos con nuestros clientes y proyectos con responsabilidad.</p>
                                    </div>
                                </div>
                                <div class="col-md-4 value-item fade-in">
                                    <div class="text-center p-4">
                                        <div class="icon-box">
                                            <i class="fas fa-comment-dots"></i>
                                        </div>
                                        <h5 class="fw-bold">Transparencia</h5>
                                        <p>Mantenemos una comunicación clara y honesta.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 value-item fade-in">
                                    <div class="text-center p-4">
                                        <div class="icon-box">
                                            <i class="fas fa-users"></i>
                                        </div>
                                        <h5 class="fw-bold">Colaboración</h5>
                                        <p>Fomentamos el trabajo en equipo y el crecimiento conjunto.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 value-item fade-in">
                                    <div class="text-center p-4">
                                        <div class="icon-box">
                                            <i class="fas fa-award"></i>
                                        </div>
                                        <h5 class="fw-bold">Calidad</h5>
                                        <p>Nos esforzamos por entregar productos robustos y eficientes.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección Habilidades -->
    <section id="habilidades" class="py-5 bg-light">
        <div class="container">
            <h2 class="heading text-center display-4 fw-bold mb-5">Habilidades</h2>

            <div class="row">
                <div class="col-md-6">
                    <h4 class="mb-4">Tecnologías</h4>
                    
                    <div class="skill-item mb-4">
                        <div class="d-flex justify-content-between">
                            <span>HTML/CSS</span>
                            <span>90%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 90%"></div>
                        </div>
                    </div>
                    
                    <div class="skill-item mb-4">
                        <div class="d-flex justify-content-between">
                            <span>JavaScript</span>
                            <span>85%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 85%"></div>
                        </div>
                    </div>
                    
                    <div class="skill-item mb-4">
                        <div class="d-flex justify-content-between">
                            <span>PHP/Laravel</span>
                            <span>80%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 80%"></div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <h4 class="mb-4">Otras habilidades</h4>
                    
                    <div class="skill-item mb-4">
                        <div class="d-flex justify-content-between">
                            <span>Diseño UI/UX</span>
                            <span>75%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 75%"></div>
                        </div>
                    </div>
                    
                    <div class="skill-item mb-4">
                        <div class="d-flex justify-content-between">
                            <span>Base de datos</span>
                            <span>70%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 70%"></div>
                        </div>
                    </div>
                    
                    <div class="skill-item mb-4">
                        <div class="d-flex justify-content-between">
                            <span>DevOps</span>
                            <span>60%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 60%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección Proyectos -->
    <section id="proyectos" class="py-5">
        <div class="container">
            <h2 class="heading text-center display-4 fw-bold mb-5">Nuestros Proyectos</h2>

            <div class="row g-4">
                <!-- Proyecto 1 -->
                <div class="col-md-4">
                    <div class="card project-card h-100 border-0 shadow-sm">
                        <img src="{{ asset('assets/imginicio/logo_software.png') }}" class="card-img-top" alt="Proyecto 1">
                        <div class="card-body">
                            <h5 class="card-title">Administración de escuelas deportivas</h5>
                            <p class="card-text">Plataforma de administración de escuelas deportivas desarrollada con Laravel y JavaScript.</p>
                            <div class="mb-3">
                                <span class="badge bg-custom-gradient me-1">Laravel</span>
                                <span class="badge bg-custom-gradient me-1">JavaScript</span>
                                <span class="badge bg-custom-gradient">MySQL</span>
                            </div>
                            <a href="https://www.sportzone.click" class="btn btn-sm btn-custom">Ver detalles</a>
                        </div>
                    </div>
                </div>
                
                
                
               
            </div>
        </div>
    </section>

    <!-- Sección Contacto -->
    <section id="contacto" class="py-5 bg-light">
        <div class="container">
            <h2 class="heading text-center display-4 fw-bold mb-5">Contacto</h2>

            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="bg-white p-4 rounded shadow-sm h-100">
                        <h3 class="mb-4">Información de contacto</h3>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-envelope text-custom-limon me-3 fa-lg"></i>
                            <span>grupojard@sportzone.click</span>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-phone text-custom-limon me-3 fa-lg"></i>
                            <span>+57 317 480 0399</span>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-phone text-custom-limon me-3 fa-lg"></i>
                            <span>+57 302 547 1236</span>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-phone text-custom-limon me-3 fa-lg"></i>
                            <span>+57 324 774 9658</span>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-phone text-custom-limon me-3 fa-lg"></i>
                            <span>+57 324 6238862</span>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-map-marker-alt text-custom-limon me-3 fa-lg"></i>
                            <span>Bogotá, Colombia</span>
                        </div>
                        <div class="mt-4">
                            <h4 class="mb-3">Síguenos</h4>
                            <div class="d-flex gap-3">
                                <a href="#" class="text-custom-green fs-4"><i class="fab fa-linkedin"></i></a>
                                <a href="#" class="text-custom-green fs-4"><i class="fab fa-github"></i></a>
                                <a href="#" class="text-custom-green fs-4"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="text-custom-green fs-4"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show mb-3" role="alert"
                            id="success-alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Cerrar"></button>
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('contacto.store') }}" method="POST" class="bg-white p-4 rounded shadow-sm contact-form">
                        @csrf
                        <h3 class="heading mb-4">Envíanos un mensaje</h3>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
                            <label for="nombre">Nombre</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                            <label for="email">Email</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Teléfono">
                            <label for="telefono">Teléfono</label>
                        </div>

                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="mensaje" name="mensaje" placeholder="Mensaje" style="height: 150px" required></textarea>
                            <label for="mensaje">Mensaje</label>
                        </div>

                        <button type="submit" class="btn btn-custom w-100 py-3">ENVIAR MENSAJE</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4">
        <div class="container">
            <p class="mb-2">&copy; {{ date('Y') }} Grupo Jard. Todos los derechos reservados.</p>
            <div class="d-flex justify-content-center gap-3 mb-2">
                <a href="#" class="text-white"><i class="fab fa-linkedin fa-lg"></i></a>
                <a href="#" class="text-white"><i class="fab fa-github fa-lg"></i></a>
                <a href="#" class="text-white"><i class="fab fa-twitter fa-lg"></i></a>
                <a href="#" class="text-white"><i class="fab fa-instagram fa-lg"></i></a>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            let alert = document.getElementById('success-alert');
            if (alert) {
                setTimeout(() => {
                    let bsAlert = new bootstrap.Alert(alert);
                    bsAlert.close();
                }, 4000);
            }
            
            // Animación para las barras de habilidades
            const skillBars = document.querySelectorAll('.skill-progress');
            skillBars.forEach(bar => {
                const width = bar.style.width;
                bar.style.width = '0';
                setTimeout(() => {
                    bar.style.width = width;
                }, 500);
            });
            
            // Animación de aparición al hacer scroll
            const fadeElements = document.querySelectorAll('.fade-in');
            
            function checkFade() {
                fadeElements.forEach(element => {
                    const elementTop = element.getBoundingClientRect().top;
                    const elementBottom = element.getBoundingClientRect().bottom;
                    const isVisible = (elementTop < window.innerHeight - 100) && (elementBottom > 0);
                    
                    if (isVisible) {
                        element.classList.add('visible');
                    }
                });
            }
            
            // Verificar al cargar y al hacer scroll
            checkFade();
            window.addEventListener('scroll', checkFade);
        });
    </script>
</body>
</html>