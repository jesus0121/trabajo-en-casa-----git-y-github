<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Aspiraciones - Visión de Futuro y Metas</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #0a0a0a 0%, #1e1b4b 20%, #312e81 40%, #5b21b6 60%, #7c3aed 80%, #a855f7 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow-x: hidden;
            color: #eee;
        }

        /* Partículas de aspiración */
        .particles {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 1;
        }

        .particle {
            position: absolute;
            background: radial-gradient(circle, rgba(168, 85, 247, 0.8) 0%, rgba(168, 85, 247, 0.2) 70%, transparent 100%);
            border-radius: 50%;
            animation: dreamFloat 20s infinite linear;
        }

        .particle:nth-child(odd) {
            background: radial-gradient(circle, rgba(236, 72, 153, 0.6) 0%, rgba(236, 72, 153, 0.1) 70%, transparent 100%);
            animation-duration: 25s;
        }

        .particle:nth-child(1) {
            width: 8px;
            height: 8px;
            left: 5%;
            animation-delay: 0s;
        }

        .particle:nth-child(2) {
            width: 12px;
            height: 12px;
            left: 15%;
            animation-delay: 2s;
        }

        .particle:nth-child(3) {
            width: 6px;
            height: 6px;
            left: 25%;
            animation-delay: 4s;
        }

        .particle:nth-child(4) {
            width: 14px;
            height: 14px;
            left: 35%;
            animation-delay: 6s;
        }

        .particle:nth-child(5) {
            width: 10px;
            height: 10px;
            left: 45%;
            animation-delay: 8s;
        }

        .particle:nth-child(6) {
            width: 16px;
            height: 16px;
            left: 55%;
            animation-delay: 10s;
        }

        .particle:nth-child(7) {
            width: 7px;
            height: 7px;
            left: 65%;
            animation-delay: 12s;
        }

        .particle:nth-child(8) {
            width: 11px;
            height: 11px;
            left: 75%;
            animation-delay: 14s;
        }

        .particle:nth-child(9) {
            width: 9px;
            height: 9px;
            left: 85%;
            animation-delay: 16s;
        }

        .particle:nth-child(10) {
            width: 13px;
            height: 13px;
            left: 95%;
            animation-delay: 18s;
        }

        @keyframes dreamFloat {
            0% {
                transform: translateY(100vh) translateX(0) scale(0) rotate(0deg);
                opacity: 0;
            }

            10% {
                opacity: 1;
                transform: translateY(90vh) translateX(10px) scale(1) rotate(36deg);
            }

            30% {
                transform: translateY(70vh) translateX(-15px) scale(1.1) rotate(108deg);
            }

            50% {
                transform: translateY(50vh) translateX(20px) scale(1.2) rotate(180deg);
            }

            70% {
                transform: translateY(30vh) translateX(-10px) scale(1.1) rotate(252deg);
            }

            90% {
                opacity: 1;
                transform: translateY(10vh) translateX(5px) scale(1) rotate(324deg);
            }

            100% {
                transform: translateY(-10vh) translateX(0) scale(0) rotate(360deg);
                opacity: 0;
            }
        }

        /* Contenedor principal */
        .container {
            z-index: 10;
            position: relative;
            padding: 50px;
            background: rgba(15, 23, 42, 0.96);
            border-radius: 30px;
            border: 3px solid rgba(168, 85, 247, 0.4);
            box-shadow: 
                0 30px 60px rgba(0, 0, 0, 0.9), 
                0 0 80px rgba(168, 85, 247, 0.2),
                inset 0 2px 0 rgba(255, 255, 255, 0.1);
            max-width: 1000px;
            margin: 20px;
            backdrop-filter: blur(25px);
            position: relative;
        }

        .container::before {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(135deg, rgba(168, 85, 247, 0.3), rgba(236, 72, 153, 0.2), rgba(168, 85, 247, 0.3));
            border-radius: 32px;
            z-index: -1;
            animation: borderGlow 4s ease-in-out infinite alternate;
        }

        @keyframes borderGlow {
            from {
                opacity: 0.3;
                filter: blur(5px);
            }
            to {
                opacity: 0.6;
                filter: blur(10px);
            }
        }

        /* Título principal */
        .main-title {
            font-size: clamp(3rem, 8vw, 4.5rem);
            font-weight: 900;
            margin-bottom: 25px;
            background: linear-gradient(135deg, #a855f7, #ec4899, #f59e0b, #10b981);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            text-align: center;
            animation: titleShine 4s ease-in-out infinite alternate;
            position: relative;
        }

        .main-title::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 150px;
            height: 4px;
            background: linear-gradient(90deg, transparent, #a855f7, #ec4899, #a855f7, transparent);
            border-radius: 2px;
            animation: lineGlow 3s ease-in-out infinite;
        }

        @keyframes titleShine {
            from {
                filter: drop-shadow(0 0 30px rgba(168, 85, 247, 0.7));
                transform: scale(1);
            }
            to {
                filter: drop-shadow(0 0 50px rgba(236, 72, 153, 0.9));
                transform: scale(1.03);
            }
        }

        @keyframes lineGlow {
            0%, 100% {
                opacity: 0.6;
                transform: translateX(-50%) scaleX(1);
            }
            50% {
                opacity: 1;
                transform: translateX(-50%) scaleX(1.2);
            }
        }

        .subtitle {
            font-size: 1.4rem;
            color: #cbd5e1;
            margin-bottom: 40px;
            text-align: center;
            text-transform: uppercase;
            letter-spacing: 4px;
            font-weight: 300;
            opacity: 0.9;
        }

        .story-section {
            margin-bottom: 40px;
        }

        .section-content {
            background: rgba(30, 41, 59, 0.95);
            border-radius: 25px;
            padding: 35px;
            border: 2px solid rgba(168, 85, 247, 0.3);
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .section-content::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(168, 85, 247, 0.15), transparent);
            transition: left 0.8s ease;
        }

        .section-content:hover::before {
            left: 100%;
        }

        .section-content::after {
            content: '';
            position: absolute;
            inset: -2px;
            background: linear-gradient(135deg, rgba(168, 85, 247, 0.4), rgba(236, 72, 153, 0.3), rgba(168, 85, 247, 0.4));
            border-radius: 27px;
            z-index: -1;
            opacity: 0;
            transition: opacity 0.5s ease;
        }

        .section-content:hover::after {
            opacity: 1;
        }

        .section-content:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 
                0 30px 60px rgba(0, 0, 0, 0.8), 
                0 0 50px rgba(168, 85, 247, 0.4);
            border-color: rgba(168, 85, 247, 0.6);
        }

        .section-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #a855f7, #ec4899);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 30px;
            font-size: 36px;
            color: #fff;
            box-shadow: 
                0 20px 40px rgba(168, 85, 247, 0.4),
                inset 0 2px 0 rgba(255, 255, 255, 0.2);
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
        }

        .section-icon::before {
            content: '';
            position: absolute;
            inset: -3px;
            background: linear-gradient(135deg, #a855f7, #ec4899, #f59e0b);
            border-radius: 23px;
            z-index: -1;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .section-content:hover .section-icon {
            transform: scale(1.15) rotateY(360deg);
            box-shadow: 0 25px 50px rgba(168, 85, 247, 0.6);
        }

        .section-content:hover .section-icon::before {
            opacity: 1;
        }

        .photos-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
            gap: 25px;
            margin: 30px 0;
            justify-items: center;
        }

        .photo-placeholder {
            width: 160px;
            height: 160px;
            background: rgba(51, 65, 85, 0.9);
            border-radius: 20px;
            border: 3px solid rgba(168, 85, 247, 0.4);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            color: #e2e8f0;
            position: relative;
            overflow: hidden;
            backdrop-filter: blur(15px);
        }

        .photo-placeholder::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(168, 85, 247, 0.2), rgba(236, 72, 153, 0.1));
            opacity: 0;
            transition: opacity 0.4s ease;
        }

        .photo-placeholder:hover::before {
            opacity: 1;
        }

        .photo-placeholder:hover {
            transform: scale(1.1) rotateZ(2deg);
            border-color: rgba(168, 85, 247, 0.8);
            box-shadow: 0 20px 40px rgba(168, 85, 247, 0.4);
        }

        .photo-icon {
            font-size: 40px;
            margin-bottom: 12px;
            z-index: 1;
        }

        .photo-label {
            font-size: 1rem;
            text-align: center;
            font-weight: 600;
            z-index: 1;
        }

        .profile-img {
            width: 160px;
            height: 160px;
            object-fit: cover;
            border-radius: 20px;
            border: 3px solid rgba(168, 85, 247, 0.4);
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .profile-img:hover {
            transform: scale(1.1) rotateZ(-2deg);
            border-color: rgba(168, 85, 247, 0.8);
            box-shadow: 0 20px 40px rgba(168, 85, 247, 0.5);
        }

        .story-text {
            font-size: 1.2rem;
            line-height: 1.9;
            color: #e2e8f0;
            text-align: justify;
            margin-top: 25px;
            text-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
        }

        .highlight {
            background: linear-gradient(135deg, #a855f7, #ec4899, #f59e0b);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: 700;
            text-shadow: none;
            position: relative;
        }

        .highlight::after {
            content: '';
            position: absolute;
            bottom: -3px;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, transparent, #a855f7, #ec4899, transparent);
            opacity: 0.7;
            border-radius: 2px;
        }

        .decoration {
            display: flex;
            justify-content: center;
            gap: 25px;
            margin-top: 60px;
        }

        .dream-element {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #a855f7, #ec4899);
            border-radius: 12px;
            position: relative;
            animation: dreamPulse 3s ease-in-out infinite;
            box-shadow: 0 15px 30px rgba(168, 85, 247, 0.4);
        }

        .dream-element:nth-child(1) {
            animation-delay: 0s;
            clip-path: polygon(50% 0%, 61% 35%, 98% 35%, 68% 57%, 79% 91%, 50% 70%, 21% 91%, 32% 57%, 2% 35%, 39% 35%);
        }

        .dream-element:nth-child(2) {
            animation-delay: 0.75s;
            border-radius: 50%;
        }

        .dream-element:nth-child(3) {
            animation-delay: 1.5s;
            clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
        }

        .dream-element:nth-child(4) {
            animation-delay: 2.25s;
            clip-path: polygon(25% 0%, 75% 0%, 100% 50%, 75% 100%, 25% 100%, 0% 50%);
        }

        @keyframes dreamPulse {
            0%, 100% {
                transform: scale(1) rotate(0deg);
                opacity: 0.8;
                box-shadow: 0 15px 30px rgba(168, 85, 247, 0.4);
            }
            50% {
                transform: scale(1.3) rotate(180deg);
                opacity: 1;
                box-shadow: 0 25px 50px rgba(168, 85, 247, 0.7);
            }
        }

        /* Estilos especiales para cada sección */
        .career-section .section-icon {
            background: linear-gradient(135deg, #3b82f6, #1d4ed8);
        }

        .career-section .section-content:hover {
            border-color: rgba(59, 130, 246, 0.6);
        }

        .lifestyle-section .section-icon {
            background: linear-gradient(135deg, #f59e0b, #d97706);
        }

        .lifestyle-section .section-content:hover {
            border-color: rgba(245, 158, 11, 0.6);
        }

        .business-section .section-icon {
            background: linear-gradient(135deg, #10b981, #047857);
        }

        .business-section .section-content:hover {
            border-color: rgba(16, 185, 129, 0.6);
        }
    </style>
</head>

<body>
    <div class="particles">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
    </div>

    <div class="container">
        <h1 class="main-title">Mis Aspiraciones</h1>
        <p class="subtitle">Visión de Futuro y Metas por Alcanzar</p>

        <div class="story-section career-section">
            <div class="section-content">
                <div class="section-icon">🚀</div>
                <div class="photos-container">
                    <div class="photo-placeholder">
                        <img src="https://virtual.cuc.edu.co/hubfs/Imported_Blog_Media/campo-laboral-ingenieria-de-sistemas.webp" 
                             alt="Ingeniería de Sistemas" class="profile-img">
                    </div>
                    <div class="photo-placeholder">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRqb6MknFRB5ZT-tTeRn4kHiYib3RHCOAZg9Q&s" 
                             alt="Inteligencia Artificial" class="profile-img">
                    </div>
                    <div class="photo-placeholder">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRwlfKAfEHSTafv-Wma4wkp5jtd-mmIuCOxpw&s" 
                             alt="Ciberseguridad" class="profile-img">
                    </div>
                </div>
                <p class="story-text">
                    Sueño con convertirme en un <span class="highlight">profesional exitoso en el campo de la 
                    Ingeniería de Sistemas 💻</span>, capaz de aportar soluciones innovadoras que generen un impacto 
                    positivo en la sociedad. Mi meta es terminar la carrera en la UNAB con un excelente desempeño 
                    académico y continuar fortaleciendo mis conocimientos en áreas como el <span class="highlight">
                    desarrollo de software, la inteligencia artificial y la ciberseguridad 🤖🔒</span>.
                </p>
            </div>
        </div>

        <div class="story-section lifestyle-section">
            <div class="section-content">
                <div class="section-icon">💪</div>
                <div class="photos-container">
                    <div class="photo-placeholder">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSOzL3q7_qxjqSRYpw6zXcbJ6xv-BMPaQMFaQ&s" 
                             alt="Estilo de Vida Saludable" class="profile-img">
                    </div>
                    <div class="photo-placeholder">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQim8YR5O4ceSHoTvn_jeS_WPASr7_CaIdPWg&s" 
                             alt="Nutrición y Suplementos" class="profile-img">
                    </div>
                </div>
                <p class="story-text">
                    A nivel personal, aspiro a seguir construyendo un <span class="highlight">estilo de vida 
                    saludable 🏋️‍♂️</span>, manteniendo la disciplina en el gimnasio y combinando este hábito con 
                    mis conocimientos sobre nutrición y suplementos. Quiero ser un ejemplo de que se puede balancear 
                    perfectamente el crecimiento intelectual con el bienestar físico, creando una base sólida para 
                    todos mis proyectos futuros.
                </p>
            </div>
        </div>

        <div class="story-section business-section">
            <div class="section-content">
                <div class="section-icon">🌟</div>
                <div class="photos-container">
                    <div class="photo-placeholder">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT79OhEY7mL-m-2m5fElP6PuKFHnVwJD8Fjnw&s" 
                             alt="Emprendimiento" class="profile-img">
                    </div>
                    <div class="photo-placeholder">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQbXtcE3z2YKLcSp0BHcamFcRFKuIhuYPoNUg&s" 
                             alt="Tecnología y Bienestar" class="profile-img">
                    </div>
                </div>
                <p class="story-text">
                    También me proyecto como un <span class="highlight">emprendedor 🚀</span>, creando en el futuro 
                    mi propio negocio relacionado con la tecnología o el bienestar, donde pueda unir mis pasiones 
                    y mi formación profesional. Visualizo una empresa que combine innovación tecnológica con 
                    soluciones para mejorar la calidad de vida de las personas, creando productos o servicios 
                    que realmente marquen la diferencia.
                </p>
            </div>
        </div>

        <div class="story-section">
            <div class="section-content">
                <div class="section-icon">🏆</div>
                <div class="photos-container">
                    <div class="photo-placeholder">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRkj8E2wsVKQNEcnHQ3JJt0s9xQ8ZRV34ZuUQ&s" 
                             alt="Graduación" class="profile-img">
                    </div>
                    <div class="photo-placeholder">
                        <img src="https://img.freepik.com/vector-premium/metas-exito-logros-desafio-gente-negocios_83111-50.jpg" 
                             alt="Éxito y Logros" class="profile-img">
                    </div>
                    <div class="photo-placeholder">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_N8_eIwA9Fcnlr2fh-eOeOOTXBVTQoyIcDg&s" 
                             alt="Liderazgo" class="profile-img">
                    </div>
                </div>
                <p class="story-text">
                    Mis metas están claras: <span class="highlight">graduarme, especializarme, crecer como persona 
                    y como profesional 🎓</span>, y dejar huella con lo que haga, demostrando que la constancia y 
                    el esfuerzo siempre abren camino hacia el éxito. Aspiro a ser reconocido no solo por mis logros 
                    técnicos, sino por mi integridad, mi capacidad de liderazgo y mi contribución al desarrollo de 
                    otros profesionales que sigan el mismo camino.
                </p>
            </div>
        </div>

        <div class="decoration">
            <div class="dream-element"></div>
            <div class="dream-element"></div>
            <div class="dream-element"></div>
            <div class="dream-element"></div>
        </div>
    </div>
</body>

</html>