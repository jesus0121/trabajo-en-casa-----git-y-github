<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Primera Experiencia Laboral - La Litografía</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #1e293b 0%, #334155 25%, #475569 50%, #64748b 75%, #94a3b8 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow-x: hidden;
            color: #eee;
        }

        /* Partículas de trabajo */
        .particles {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 1;
        }

        .particle {
            position: absolute;
            background: rgba(59, 130, 246, 0.4);
            border: 1px solid rgba(59, 130, 246, 0.6);
            animation: workFlow 18s infinite linear;
        }

        .particle:nth-child(odd) {
            background: rgba(34, 197, 94, 0.3);
            border-color: rgba(34, 197, 94, 0.5);
            animation-duration: 22s;
        }

        .particle:nth-child(3n) {
            background: rgba(251, 191, 36, 0.3);
            border-color: rgba(251, 191, 36, 0.5);
            animation-duration: 20s;
        }

        .particle:nth-child(1) {
            width: 10px;
            height: 10px;
            left: 8%;
            animation-delay: 0s;
        }

        .particle:nth-child(2) {
            width: 6px;
            height: 15px;
            left: 18%;
            animation-delay: 1.5s;
        }

        .particle:nth-child(3) {
            width: 12px;
            height: 8px;
            left: 28%;
            animation-delay: 3s;
        }

        .particle:nth-child(4) {
            width: 8px;
            height: 12px;
            left: 38%;
            animation-delay: 4.5s;
        }

        .particle:nth-child(5) {
            width: 14px;
            height: 6px;
            left: 48%;
            animation-delay: 6s;
        }

        .particle:nth-child(6) {
            width: 7px;
            height: 14px;
            left: 58%;
            animation-delay: 7.5s;
        }

        .particle:nth-child(7) {
            width: 11px;
            height: 9px;
            left: 68%;
            animation-delay: 9s;
        }

        .particle:nth-child(8) {
            width: 9px;
            height: 11px;
            left: 78%;
            animation-delay: 10.5s;
        }

        .particle:nth-child(9) {
            width: 13px;
            height: 7px;
            left: 88%;
            animation-delay: 12s;
        }

        .particle:nth-child(10) {
            width: 6px;
            height: 13px;
            left: 95%;
            animation-delay: 13.5s;
        }

        @keyframes workFlow {
            0% {
                transform: translateY(100vh) rotate(0deg);
                opacity: 0;
            }

            5% {
                opacity: 1;
            }

            25% {
                transform: translateY(75vh) rotate(90deg);
            }

            50% {
                transform: translateY(50vh) rotate(180deg);
                opacity: 0.8;
            }

            75% {
                transform: translateY(25vh) rotate(270deg);
            }

            95% {
                opacity: 1;
            }

            100% {
                transform: translateY(-5vh) rotate(360deg);
                opacity: 0;
            }
        }

        /* Contenedor principal */
        .container {
            z-index: 10;
            position: relative;
            padding: 45px;
            background: rgba(30, 41, 59, 0.95);
            border-radius: 25px;
            border: 2px solid rgba(59, 130, 246, 0.3);
            box-shadow: 
                0 25px 50px rgba(0, 0, 0, 0.8), 
                0 0 60px rgba(59, 130, 246, 0.15),
                inset 0 1px 0 rgba(255, 255, 255, 0.1);
            max-width: 950px;
            margin: 20px;
            backdrop-filter: blur(15px);
            position: relative;
        }

        .container::before {
            content: '';
            position: absolute;
            top: -1px;
            left: -1px;
            right: -1px;
            bottom: -1px;
            background: linear-gradient(135deg, rgba(59, 130, 246, 0.2), rgba(34, 197, 94, 0.15), rgba(59, 130, 246, 0.2));
            border-radius: 26px;
            z-index: -1;
            animation: workBorder 6s ease-in-out infinite alternate;
        }

        @keyframes workBorder {
            from {
                opacity: 0.2;
            }
            to {
                opacity: 0.5;
            }
        }

        /* Título principal */
        .main-title {
            font-size: clamp(2.8rem, 8vw, 4rem);
            font-weight: 800;
            margin-bottom: 20px;
            background: linear-gradient(135deg, #3b82f6, #22c55e, #eab308);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            text-align: center;
            animation: titleWork 3.5s ease-in-out infinite alternate;
            position: relative;
        }

        .main-title::after {
            content: '';
            position: absolute;
            bottom: -12px;
            left: 50%;
            transform: translateX(-50%);
            width: 120px;
            height: 3px;
            background: linear-gradient(90deg, transparent, #3b82f6, #22c55e, transparent);
            border-radius: 2px;
        }

        @keyframes titleWork {
            from {
                filter: drop-shadow(0 0 20px rgba(59, 130, 246, 0.6));
                transform: scale(1);
            }
            to {
                filter: drop-shadow(0 0 35px rgba(34, 197, 94, 0.8));
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
            font-weight: 400;
        }

        .story-section {
            margin-bottom: 35px;
        }

        .section-content {
            background: rgba(51, 65, 85, 0.9);
            border-radius: 20px;
            padding: 30px;
            border: 1px solid rgba(59, 130, 246, 0.2);
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
            background: linear-gradient(90deg, transparent, rgba(59, 130, 246, 0.1), transparent);
            transition: left 0.7s ease;
        }

        .section-content:hover::before {
            left: 100%;
        }

        .section-content:hover {
            transform: translateY(-6px) scale(1.01);
            box-shadow: 
                0 20px 40px rgba(0, 0, 0, 0.7), 
                0 0 25px rgba(59, 130, 246, 0.25);
            border-color: rgba(59, 130, 246, 0.4);
        }

        .section-icon {
            width: 75px;
            height: 75px;
            background: linear-gradient(135deg, #3b82f6, #1d4ed8);
            border-radius: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            font-size: 34px;
            color: #fff;
            box-shadow: 
                0 15px 30px rgba(59, 130, 246, 0.4),
                inset 0 1px 0 rgba(255, 255, 255, 0.2);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .section-content:hover .section-icon {
            transform: scale(1.1) rotateY(180deg);
            box-shadow: 0 20px 40px rgba(59, 130, 246, 0.6);
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
            background: rgba(71, 85, 105, 0.8);
            border-radius: 18px;
            border: 2px solid rgba(59, 130, 246, 0.3);
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
            background: linear-gradient(135deg, rgba(59, 130, 246, 0.1), rgba(34, 197, 94, 0.05));
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .photo-placeholder:hover::before {
            opacity: 1;
        }

        .photo-placeholder:hover {
            transform: scale(1.05) rotateZ(1deg);
            border-color: rgba(59, 130, 246, 0.7);
            box-shadow: 0 12px 25px rgba(59, 130, 246, 0.3);
        }

        .photo-icon {
            font-size: 38px;
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
            border-radius: 18px;
            border: 2px solid rgba(59, 130, 246, 0.3);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .profile-img:hover {
            transform: scale(1.05) rotateZ(-1deg);
            border-color: rgba(59, 130, 246, 0.7);
            box-shadow: 0 12px 25px rgba(59, 130, 246, 0.4);
        }

        .story-text {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #e2e8f0;
            text-align: justify;
            margin-top: 20px;
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
        }

        .highlight {
            background: linear-gradient(135deg, #3b82f6, #22c55e);
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
            background: linear-gradient(90deg, transparent, #3b82f6, transparent);
            opacity: 0.7;
        }

        .decoration {
            display: flex;
            justify-content: center;
            gap: 18px;
            margin-top: 50px;
        }

        .work-element {
            width: 45px;
            height: 45px;
            background: linear-gradient(135deg, #3b82f6, #1d4ed8);
            border-radius: 10px;
            position: relative;
            animation: workPulse 3s ease-in-out infinite;
            box-shadow: 0 12px 25px rgba(59, 130, 246, 0.3);
        }

        .work-element:nth-child(1) {
            animation-delay: 0s;
            background: linear-gradient(135deg, #3b82f6, #1e40af);
        }

        .work-element:nth-child(2) {
            animation-delay: 0.75s;
            background: linear-gradient(135deg, #22c55e, #16a34a);
            border-radius: 50%;
        }

        .work-element:nth-child(3) {
            animation-delay: 1.5s;
            background: linear-gradient(135deg, #eab308, #ca8a04);
            clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
        }

        .work-element:nth-child(4) {
            animation-delay: 2.25s;
            background: linear-gradient(135deg, #f59e0b, #d97706);
            clip-path: polygon(25% 0%, 75% 0%, 100% 50%, 75% 100%, 25% 100%, 0% 50%);
        }

        @keyframes workPulse {
            0%, 100% {
                transform: scale(1) rotate(0deg);
                opacity: 0.8;
            }
            50% {
                transform: scale(1.15) rotate(180deg);
                opacity: 1;
                box-shadow: 0 18px 35px rgba(59, 130, 246, 0.5);
            }
        }

        /* Estilos especiales para diferentes secciones */
        .design-section .section-icon {
            background: linear-gradient(135deg, #22c55e, #16a34a);
        }

        .design-section .section-content:hover {
            border-color: rgba(34, 197, 94, 0.4);
        }

        .teamwork-section .section-icon {
            background: linear-gradient(135deg, #eab308, #ca8a04);
        }

        .teamwork-section .section-content:hover {
            border-color: rgba(234, 179, 8, 0.4);
        }

        .growth-section .section-icon {
            background: linear-gradient(135deg, #f59e0b, #d97706);
        }

        .growth-section .section-content:hover {
            border-color: rgba(245, 158, 11, 0.4);
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
        <h1 class="main-title">Mi Primera Experiencia Laboral</h1>
        <p class="subtitle">La Litografía que Marcó el Comienzo</p>

        <div class="story-section">
            <div class="section-content">
                <div class="section-icon">🏢</div>
                <div class="photos-container">
                    <div class="photo-placeholder">
                        <img src="data:image/jpeg;base64,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" 
                             alt="Litografía" class="profile-img">
                    </div>
                    <div class="photo-placeholder">
                        <img src="data:image/jpeg;base64,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" 
                             alt="Primer Empleo" class="profile-img">
                    </div>
                </div>
                <p class="story-text">
                    Mi primera experiencia laboral fue en una <span class="highlight">litografía 🖨️</span>, poco 
                    tiempo después de terminar el colegio. Allí tuve la oportunidad de adentrarme en el mundo 
                    profesional real, lejos de las aulas y los libros, enfrentándome a responsabilidades concretas 
                    y horarios fijos. Este primer paso fue fundamental para entender la dinámica del trabajo y la 
                    importancia de la puntualidad y el compromiso.
                </p>
            </div>
        </div>

        <div class="story-section design-section">
            <div class="section-content">
                <div class="section-icon">🎨</div>
                <div class="photos-container">
                    <div class="photo-placeholder">
                        <img src="data:image/jpeg;base64,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" 
                             alt="Diseño de Parques" class="profile-img">
                    </div>
                    <div class="photo-placeholder">
                        <img src="data:image/png;base64,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" 
                             alt="Proceso de Producción" class="profile-img">
                    </div>
                </div>
                <p class="story-text">
                    En la litografía trabajé en la <span class="highlight">elaboración de parqués </span>, lo cual 
                    me permitió conocer de cerca los procesos de diseño, producción y la cadena completa desde la 
                    conceptualización hasta el producto final. Aprendí sobre materiales, técnicas de impresión, 
                    control de calidad y la importancia de cada detalle en el proceso creativo y manufacturero.
                </p>
            </div>
        </div>

        <div class="story-section teamwork-section">
            <div class="section-content">
                <div class="section-icon">🤝</div>
                <div class="photos-container">
                    <div class="photo-placeholder">
                        <img src="data:image/jpeg;base64,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" 
                             alt="Trabajo en Equipo" class="profile-img">
                    </div>
                    <div class="photo-placeholder">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhPnHV_lrlX00LnyMzG6tKGF6cdaTQqDrqwg&s" 
                             alt="Disciplina Laboral" class="profile-img">
                    </div>
                </div>
                <p class="story-text">
                    Aunque era mi primer empleo, esta experiencia me ayudó a adquirir <span class="highlight">disciplina, 
                    responsabilidad y a entender la importancia de la organización ⚡</span> en el ámbito laboral. 
                    Aprendí a trabajar bajo presión, a cumplir con deadlines, a comunicarme efectivamente con 
                    compañeros de diferentes edades y experiencias, y sobre todo, a valorar el esfuerzo conjunto 
                    para lograr objetivos comunes.
                </p>
            </div>
        </div>

        <div class="story-section growth-section">
            <div class="section-content">
                <div class="section-icon">🚀</div>
                <div class="photos-container">
                    <div class="photo-placeholder">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQW9z1d9dj_qS1ZYOVSkgOS2zJ2ivbAT9HIfA&s" 
                             alt="Crecimiento Personal" class="profile-img">
                    </div>
                    <div class="photo-placeholder">
                        <img src="data:image/jpeg;base64,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" 
                             alt="Punto de Partida" class="profile-img">
                    </div>
                </div>
                <p class="story-text">
                    Esa experiencia se convirtió en un <span class="highlight">punto de partida fundamental 🌟</span> 
                    para seguir desarrollándome tanto en lo personal como en lo profesional. Me enseñó que cada 
                    trabajo, por simple que parezca, tiene sus complejidades y aporta lecciones valiosas. La 
                    litografía no solo me dio mi primera experiencia laboral, sino que sembró en mí la semilla 
                    de la responsabilidad profesional y me preparó para los desafíos futuros de mi carrera.
                </p>
            </div>
        </div>

        <div class="decoration">
            <div class="work-element"></div>
            <div class="work-element"></div>
            <div class="work-element"></div>
            <div class="work-element"></div>
        </div>
    </div>
</body>

</html>