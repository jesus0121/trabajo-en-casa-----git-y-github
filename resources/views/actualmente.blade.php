<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Presente - Ingeniería, Gimnasio y Emprendimiento</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #0f0f23 0%, #1a1a3a 25%, #2d1b69 50%, #3730a3 75%, #4338ca 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow-x: hidden;
            color: #eee;
        }

        /* Partículas de energía */
        .particles {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 1;
        }

        .particle {
            position: absolute;
            background: rgba(99, 102, 241, 0.6);
            border-radius: 50%;
            animation: energyFlow 15s infinite linear;
            box-shadow: 0 0 15px rgba(99, 102, 241, 0.8);
        }

        .particle:nth-child(odd) {
            background: rgba(168, 85, 247, 0.4);
            box-shadow: 0 0 15px rgba(168, 85, 247, 0.6);
        }

        .particle:nth-child(1) {
            width: 4px;
            height: 4px;
            left: 10%;
            animation-delay: 0s;
        }

        .particle:nth-child(2) {
            width: 6px;
            height: 6px;
            left: 20%;
            animation-delay: 1s;
        }

        .particle:nth-child(3) {
            width: 5px;
            height: 5px;
            left: 30%;
            animation-delay: 2s;
        }

        .particle:nth-child(4) {
            width: 7px;
            height: 7px;
            left: 40%;
            animation-delay: 3s;
        }

        .particle:nth-child(5) {
            width: 4px;
            height: 4px;
            left: 50%;
            animation-delay: 4s;
        }

        .particle:nth-child(6) {
            width: 8px;
            height: 8px;
            left: 60%;
            animation-delay: 5s;
        }

        .particle:nth-child(7) {
            width: 3px;
            height: 3px;
            left: 70%;
            animation-delay: 6s;
        }

        .particle:nth-child(8) {
            width: 6px;
            height: 6px;
            left: 80%;
            animation-delay: 7s;
        }

        .particle:nth-child(9) {
            width: 5px;
            height: 5px;
            left: 90%;
            animation-delay: 8s;
        }

        .particle:nth-child(10) {
            width: 7px;
            height: 7px;
            left: 95%;
            animation-delay: 9s;
        }

        @keyframes energyFlow {
            0% {
                transform: translateY(100vh) scale(0);
                opacity: 0;
            }

            10% {
                opacity: 1;
                transform: translateY(90vh) scale(1);
            }

            50% {
                opacity: 1;
                transform: translateY(50vh) scale(1.2);
            }

            90% {
                opacity: 1;
                transform: translateY(10vh) scale(1);
            }

            100% {
                transform: translateY(-10vh) scale(0);
                opacity: 0;
            }
        }

        /* Contenedor principal */
        .container {
            z-index: 10;
            position: relative;
            padding: 45px;
            background: rgba(15, 23, 42, 0.95);
            border-radius: 25px;
            border: 2px solid rgba(99, 102, 241, 0.3);
            box-shadow: 
                0 25px 50px rgba(0, 0, 0, 0.9), 
                0 0 50px rgba(99, 102, 241, 0.15),
                inset 0 1px 0 rgba(255, 255, 255, 0.1);
            max-width: 950px;
            margin: 20px;
            backdrop-filter: blur(20px);
        }

        /* Título principal */
        .main-title {
            font-size: clamp(2.8rem, 8vw, 4rem);
            font-weight: 900;
            margin-bottom: 20px;
            background: linear-gradient(135deg, #6366f1, #a855f7, #ec4899);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            text-align: center;
            text-shadow: 0 0 40px rgba(99, 102, 241, 0.7);
            animation: titlePulse 3s ease-in-out infinite alternate;
            position: relative;
        }

        .main-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 3px;
            background: linear-gradient(90deg, transparent, #6366f1, transparent);
            border-radius: 2px;
        }

        @keyframes titlePulse {
            from {
                filter: drop-shadow(0 0 20px rgba(99, 102, 241, 0.6));
                transform: scale(1);
            }
            to {
                filter: drop-shadow(0 0 30px rgba(168, 85, 247, 0.8));
                transform: scale(1.02);
            }
        }

        .subtitle {
            font-size: 1.3rem;
            color: #cbd5e1;
            margin-bottom: 35px;
            text-align: center;
            text-transform: uppercase;
            letter-spacing: 3px;
            font-weight: 300;
        }

        .story-section {
            margin-bottom: 35px;
        }

        .section-content {
            background: rgba(30, 41, 59, 0.9);
            border-radius: 20px;
            padding: 30px;
            border: 1px solid rgba(99, 102, 241, 0.2);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
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
            background: linear-gradient(90deg, transparent, rgba(99, 102, 241, 0.1), transparent);
            transition: left 0.6s ease;
        }

        .section-content:hover::before {
            left: 100%;
        }

        .section-content:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 
                0 25px 50px rgba(0, 0, 0, 0.8), 
                0 0 30px rgba(99, 102, 241, 0.3),
                inset 0 1px 0 rgba(255, 255, 255, 0.1);
            border-color: rgba(99, 102, 241, 0.5);
        }

        .section-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, #6366f1, #a855f7);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            font-size: 32px;
            color: #fff;
            box-shadow: 
                0 15px 30px rgba(99, 102, 241, 0.4),
                inset 0 1px 0 rgba(255, 255, 255, 0.2);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
        }

        .section-icon::after {
            content: '';
            position: absolute;
            inset: -2px;
            background: linear-gradient(135deg, #6366f1, #a855f7, #ec4899);
            border-radius: 18px;
            z-index: -1;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .section-content:hover .section-icon {
            transform: scale(1.1) rotateY(180deg);
            box-shadow: 0 20px 40px rgba(99, 102, 241, 0.6);
        }

        .section-content:hover .section-icon::after {
            opacity: 1;
        }

        .photos-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 20px;
            margin: 25px 0;
            justify-items: center;
        }

        .photo-placeholder {
            width: 150px;
            height: 150px;
            background: rgba(51, 65, 85, 0.8);
            border-radius: 16px;
            border: 2px solid rgba(99, 102, 241, 0.3);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            color: #e2e8f0;
            position: relative;
            overflow: hidden;
            backdrop-filter: blur(10px);
        }

        .photo-placeholder::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(99, 102, 241, 0.1), rgba(168, 85, 247, 0.1));
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .photo-placeholder:hover::before {
            opacity: 1;
        }

        .photo-placeholder:hover {
            transform: scale(1.08) rotateZ(1deg);
            border-color: rgba(99, 102, 241, 0.8);
            box-shadow: 0 15px 30px rgba(99, 102, 241, 0.3);
        }

        .photo-icon {
            font-size: 36px;
            margin-bottom: 10px;
            z-index: 1;
        }

        .photo-label {
            font-size: 0.9rem;
            text-align: center;
            font-weight: 600;
            z-index: 1;
        }

        .profile-img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 16px;
            border: 2px solid rgba(99, 102, 241, 0.3);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .profile-img:hover {
            transform: scale(1.08) rotateZ(-1deg);
            border-color: rgba(99, 102, 241, 0.8);
            box-shadow: 0 15px 30px rgba(99, 102, 241, 0.4);
        }

        .story-text {
            font-size: 1.15rem;
            line-height: 1.8;
            color: #e2e8f0;
            text-align: justify;
            margin-top: 20px;
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
        }

        .highlight {
            background: linear-gradient(135deg, #6366f1, #a855f7);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: 700;
            text-shadow: none;
            position: relative;
        }

        .highlight::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            right: 0;
            height: 2px;
            background: linear-gradient(90deg, transparent, #6366f1, transparent);
            opacity: 0.6;
        }

        .decoration {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 50px;
        }

        .progress-element {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, #6366f1, #a855f7);
            border-radius: 8px;
            position: relative;
            animation: progressPulse 2.5s ease-in-out infinite;
            box-shadow: 0 10px 20px rgba(99, 102, 241, 0.3);
        }

        .progress-element:nth-child(1) {
            animation-delay: 0s;
        }

        .progress-element:nth-child(2) {
            animation-delay: 0.5s;
            border-radius: 50%;
        }

        .progress-element:nth-child(3) {
            animation-delay: 1s;
            clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
        }

        .progress-element:nth-child(4) {
            animation-delay: 1.5s;
            clip-path: polygon(25% 0%, 75% 0%, 100% 50%, 75% 100%, 25% 100%, 0% 50%);
        }

        @keyframes progressPulse {
            0%, 100% {
                transform: scale(1) rotate(0deg);
                opacity: 0.8;
            }
            50% {
                transform: scale(1.2) rotate(180deg);
                opacity: 1;
                box-shadow: 0 15px 30px rgba(99, 102, 241, 0.5);
            }
        }

        /* Estilos especiales para sección gimnasio */
        .gym-section .section-icon {
            background: linear-gradient(135deg, #f59e0b, #ef4444);
        }

        .gym-section .section-content:hover {
            border-color: rgba(245, 158, 11, 0.5);
        }

        /* Estilos especiales para sección trabajo */
        .work-section .section-icon {
            background: linear-gradient(135deg, #10b981, #059669);
        }

        .work-section .section-content:hover {
            border-color: rgba(16, 185, 129, 0.5);
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
        <h1 class="main-title">Mi Presente</h1>
        <p class="subtitle">Ingeniería, Disciplina y Crecimiento</p>

        <div class="story-section">
            <div class="section-content">
                <div class="section-icon">🎓</div>
                <div class="photos-container">
                    <div class="photo-placeholder">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR3gIsWY2tOqUsgI4TlDdJiP7mPt2aADIo0JA&s" 
                             alt="UNAB" class="profile-img">
                    </div>
                    <div class="photo-placeholder">
                        <img src="https://buscacarrera.com.co/public/content/profesiones/ingenieria-de-sistemas.jpg" 
                             alt="Estudios Universitarios" class="profile-img">
                    </div>
                </div>
                <p class="story-text">
                    Actualmente curso <span class="highlight">sexto semestre de Ingeniería de Sistemas en la UNAB 💻</span>, 
                    una etapa en la que cada día aprendo y me esfuerzo por crecer tanto en lo académico como en lo personal. 
                    Esta carrera me ha permitido profundizar en mi pasión por la tecnología que descubrí desde la adolescencia, 
                    y cada materia es un paso más hacia mis metas profesionales.
                </p>
            </div>
        </div>

        <div class="story-section gym-section">
            <div class="section-content">
                <div class="section-icon">💪</div>
                <div class="photos-container">
                    <div class="photo-placeholder">
                        <img src="https://www.primalstrength.com/cdn/shop/files/gymdesign_render_Two_collumn_grid_cb1b5850-fa8e-4a7b-a2b3-190c2e45facd.jpg?v=1680719688&width=1500" 
                             alt="Entrenamiento" class="profile-img">
                    </div>
                    <div class="photo-placeholder">
                        <img src="https://media.licdn.com/dms/image/v2/C5612AQGVZ-pne_Qbig/article-cover_image-shrink_600_2000/article-cover_image-shrink_600_2000/0/1537458679624?e=2147483647&v=beta&t=7fU6vVzB0RNPQvAWZZ1_tGL9mkMlIGU2M7bCeVwKEgE" 
                             alt="Disciplina" class="profile-img">
                    </div>
                </div>
                <p class="story-text">
                    Además de mis estudios, dedico tiempo al <span class="highlight">gimnasio 🏋️‍♂️</span>, un espacio 
                    donde entrenar me ayuda a mantenerme fuerte y disciplinado. El gym se ha convertido en mucho más 
                    que ejercicio físico; es mi momento de despejar la mente, construir resistencia mental y mantener 
                    un equilibrio saludable entre el estudio y el bienestar personal.
                </p>
            </div>
        </div>

        <div class="story-section work-section">
            <div class="section-content">
                <div class="section-icon">💼</div>
                <div class="photos-container">
                    <div class="photo-placeholder">
                        <img src="https://images.squarespace-cdn.com/content/v1/561718ebe4b062a227c4fcf2/1519153458651-QXLKQB0ZHQ947POKG7QD/Suplementos.jpg" 
                             alt="Suplementos" class="profile-img">
                    </div>
                    <div class="photo-placeholder">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhJmxs4RPeGFXCZMAXxZ5SvVOUd0YHA31mvA&s" 
                             alt="Ventas" class="profile-img">
                    </div>
                </div>
                <p class="story-text">
                    De vez en cuando también trabajo <span class="highlight">vendiendo suplementos 💊</span>, lo que 
                    me permite adquirir experiencia en el mundo comercial y, al mismo tiempo, complementar mi estilo 
                    de vida saludable. Esta actividad me ha enseñado sobre atención al cliente, productos relacionados 
                    con el fitness, y me ha dado las primeras nociones del mundo empresarial.
                </p>
            </div>
        </div>

        <div class="story-section">
            <div class="section-content">
                <div class="section-icon">🎯</div>
                <div class="photos-container">
                    <div class="photo-placeholder">
                        <img src="https://conecta.tec.mx/sites/default/files/inline-images/gestion-del-tiempo-tips-interior2.webp" 
                             alt="Organización del Tiempo" class="profile-img">
                    </div>
                    <div class="photo-placeholder">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTuAUgsC6kefsFhJkWSVf5y3FNvysMpyBN1WA&s" 
                             alt="Metas y Crecimiento" class="profile-img">
                    </div>
                </div>
                <p class="story-text">
                    Todo esto me ha enseñado a <span class="highlight">organizar mi tiempo entre la universidad, 
                    el entrenamiento y el trabajo ⏰</span>, construyendo paso a paso el camino hacia mis metas 
                    profesionales y personales. Esta etapa de mi vida me está formando no solo como ingeniero, 
                    sino como una persona disciplinada, emprendedora y consciente de la importancia del equilibrio 
                    en todas las áreas de la vida.
                </p>
            </div>
        </div>

        <div class="decoration">
            <div class="progress-element"></div>
            <div class="progress-element"></div>
            <div class="progress-element"></div>
            <div class="progress-element"></div>
        </div>
    </div>
</body>

</html>