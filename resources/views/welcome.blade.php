<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Despacho Jurídico AM - Soluciones Legales Profesionales</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <nav id="navbar">
        <div class="nav-container">
            <a href="#inicio" class="logo-link">
                <img src="{{ asset('images/Gemini_Generated_Image_s1fagxs1fagxs1fa.png') }}" alt="Despacho Jurídico AM" class="logo">
            </a>
            <button class="mobile-menu-btn" id="mobileMenuBtn">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <ul class="nav-menu" id="navMenu">
                <li><a href="#inicio" class="nav-link">Inicio</a></li>
                <li><a href="#servicios" class="nav-link">Servicios</a></li>
                <li><a href="#mision-vision" class="nav-link">Misión y Visión</a></li>
                <li><a href="#quienes-somos" class="nav-link">Quiénes Somos</a></li>
                <li><a href="#contacto" class="nav-link nav-link-cta">Contacto</a></li>
            </ul>
        </div>
    </nav>

    <section id="inicio" class="hero">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <img src="{{ asset('images/Gemini_Generated_Image_s1fagxs1fagxs1fa.png') }}" alt="Despacho Jurídico AM" class="hero-logo">
            <h1 class="hero-title">Despacho Jurídico AM</h1>
            <p class="hero-subtitle">Soluciones Legales Estratégicas y Efectivas</p>
            <div class="hero-values">
                <span>Empatía</span>
                <span>Equidad</span>
                <span>Honestidad</span>
                <span>Solidaridad</span>
                <span>Justicia</span>
            </div>
            <a href="#servicios" class="hero-btn">Conoce Nuestros Servicios</a>
        </div>
    </section>

    <section id="servicios" class="services">
        <div class="container">
            <h2 class="section-title">Nuestros Servicios</h2>
            <p class="section-subtitle">Ofrecemos asesoría especializada en diversas áreas del derecho</p>

            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">⚖️</div>
                    <h3>Derecho Penal</h3>
                    <p>Defensa y asesoría jurídica integral. Representación en audiencias, redacción de denuncias y acompañamiento en todas las etapas del proceso penal.</p>
                </div>

                <div class="service-card">
                    <div class="service-icon">👨‍👩‍👧‍👦</div>
                    <h3>Derecho Familiar</h3>
                    <p>Divorcios incausados y de mutuo consentimiento, demandas de alimentos, guarda y custodia, pensiones alimenticias e incidentes familiares.</p>
                </div>

                <div class="service-card">
                    <div class="service-icon">📋</div>
                    <h3>Derecho Civil</h3>
                    <p>Juicios testamentarios, contratos, arrendamientos, compraventa, prescripciones adquisitivas y todo tipo de asuntos civiles.</p>
                </div>

                <div class="service-card">
                    <div class="service-icon">💼</div>
                    <h3>Derecho Laboral</h3>
                    <p>Defensa de derechos laborales, despidos injustificados, indemnizaciones, conflictos entre trabajadores y empleadores.</p>
                </div>

                <div class="service-card">
                    <div class="service-icon">🏛️</div>
                    <h3>Derecho Administrativo</h3>
                    <p>Tramitación ante autoridades administrativas, recursos de revisión, amparos y defensa ante actos de autoridad.</p>
                </div>

                <div class="service-card">
                    <div class="service-icon">🤝</div>
                    <h3>Asesoría Integral</h3>
                    <p>Consultoría legal personalizada, análisis de casos, estrategias jurídicas y acompañamiento profesional continuo.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="mision-vision" class="mission-vision">
        <div class="container">
            <div class="mv-grid">
                <div class="mv-card">
                    <h2>Nuestra Misión</h2>
                    <p>Brindar soluciones legales efectivas y estratégicas, orientadas a proteger los intereses de nuestros clientes y garantizar resultados favorables. Nos comprometemos a ofrecer una atención cercana, profesional y transparente, acompañando a cada cliente en todas las etapas de su proceso legal con responsabilidad y ética.</p>
                </div>

                <div class="mv-card">
                    <h2>Nuestra Visión</h2>
                    <p>Ser reconocidos como el despacho jurídico de referencia por nuestra excelencia profesional, compromiso con la justicia y dedicación al servicio de nuestros clientes. Aspiramos a consolidarnos como líderes en la prestación de servicios legales integrales, fundamentados en nuestros valores de empatía, equidad, honestidad, solidaridad y justicia.</p>
                </div>
            </div>

            <div class="values-section">
                <h3>Nuestros Valores</h3>
                <p>Trabajamos bajo un firme compromiso con nuestros valores institucionales, los cuales guían cada una de nuestras acciones y decisiones:</p>
                <div class="values-grid">
                    <div class="value-item">
                        <div class="value-icon">💙</div>
                        <h4>Empatía</h4>
                        <p>Comprendemos la situación única de cada cliente</p>
                    </div>
                    <div class="value-item">
                        <div class="value-icon">⚖️</div>
                        <h4>Equidad</h4>
                        <p>Tratamos a todos con igualdad y justicia</p>
                    </div>
                    <div class="value-item">
                        <div class="value-icon">✨</div>
                        <h4>Honestidad</h4>
                        <p>Transparencia en cada acción y decisión</p>
                    </div>
                    <div class="value-item">
                        <div class="value-icon">🤝</div>
                        <h4>Solidaridad</h4>
                        <p>Apoyo constante en momentos difíciles</p>
                    </div>
                    <div class="value-item">
                        <div class="value-icon">⚖️</div>
                        <h4>Justicia</h4>
                        <p>Compromiso inquebrantable con lo correcto</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="quienes-somos" class="about">
        <div class="container">
            <h2 class="section-title">Quiénes Somos</h2>
            <p class="about-intro">Somos un despacho jurídico integrado por profesionistas especializados en diversas áreas del derecho, tales como penal, civil, familiar, laboral, entre otras. Nuestro objetivo es brindar soluciones legales efectivas y estratégicas, orientadas a proteger los intereses de nuestros clientes y garantizar resultados favorables.</p>

            <div class="about-content">
                <div class="lawyer-profile">
                    <div class="lawyer-image-container">
                        <img src="{{ asset('images/Gemini_Generated_Image_1kqqaw1kqqaw1kqq.png') }}" alt="Lic. Alondra Meléndez Jasso" class="lawyer-image">
                    </div>
                    <div class="lawyer-info">
                        <h3>Lic. Alondra Meléndez Jasso</h3>
                        <p class="lawyer-title">Directora y Fundadora</p>
                        <p class="lawyer-cedula">Cédula Profesional: 14519126</p>
                        <p class="lawyer-description">Abogada especializada con amplia experiencia en diversas áreas del derecho. Su compromiso profesional y vocación de servicio la han posicionado como una referente en la atención legal personalizada y de calidad.</p>
                        <p class="lawyer-description">Con una formación sólida y en constante actualización, la Lic. Meléndez Jasso lidera nuestro equipo con la firme convicción de que cada caso merece atención dedicada y soluciones efectivas.</p>
                    </div>
                </div>

                <div class="about-features">
                    <div class="feature">
                        <div class="feature-icon">🎓</div>
                        <h4>Profesionalismo</h4>
                        <p>Equipo de abogados altamente capacitados</p>
                    </div>
                    <div class="feature">
                        <div class="feature-icon">💡</div>
                        <h4>Experiencia</h4>
                        <p>Años de trayectoria en diversas áreas del derecho</p>
                    </div>
                    <div class="feature">
                        <div class="feature-icon">🔒</div>
                        <h4>Confidencialidad</h4>
                        <p>Protección absoluta de tu información</p>
                    </div>
                    <div class="feature">
                        <div class="feature-icon">⏱️</div>
                        <h4>Dedicación</h4>
                        <p>Atención personalizada en cada caso</p>
                    </div>
                </div>
            </div>

            <div class="distinction">
                <h3>Lo que nos Distingue</h3>
                <p>Nos distinguimos por ofrecer una atención cercana, profesional y transparente, acompañando a nuestros clientes en cada etapa de su proceso legal, con responsabilidad y ética. Entendemos que detrás de cada caso hay personas con necesidades reales, por lo que nuestro compromiso va más allá del ámbito legal.</p>
            </div>
        </div>
    </section>

    <section id="contacto" class="contact">
        <div class="container">
            <h2 class="section-title light">Contáctanos</h2>
            <p class="section-subtitle light">Agenda una consulta y permítenos ayudarte a resolver tu situación legal</p>

            <div class="contact-content">
                <div class="contact-info">
                    <div class="contact-item">
                        <div class="contact-icon">📞</div>
                        <div>
                            <h4>Teléfono</h4>
                            <p>444 341 8972</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">✉️</div>
                        <div>
                            <h4>Email</h4>
                            <p>melendezjasso35@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <img src="{{ asset('images/Gemini_Generated_Image_s1fagxs1fagxs1fa.png') }}" alt="Despacho Jurídico AM" class="footer-logo">
                <p>&copy; {{ date('Y') }} Despacho Jurídico AM. Todos los derechos reservados.</p>
                <p class="footer-subtitle">Empatía • Equidad • Honestidad • Solidaridad • Justicia</p>
            </div>
        </div>
    </footer>

    <script>
        const navbar = document.getElementById('navbar');
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const navMenu = document.getElementById('navMenu');
        const navLinks = document.querySelectorAll('.nav-link');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 100) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        mobileMenuBtn.addEventListener('click', () => {
            navMenu.classList.toggle('active');
            mobileMenuBtn.classList.toggle('active');
        });

        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                navMenu.classList.remove('active');
                mobileMenuBtn.classList.remove('active');
            });
        });

        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const offset = 80;
                    const targetPosition = target.offsetTop - offset;
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
</body>
</html>
