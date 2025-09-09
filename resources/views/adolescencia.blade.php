<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memorias de Mi Adolescencia - Videojuegos, Robótica y Hawaií</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #0c0c0c 0%, #1a1a2e 50%, #16213e 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow-x: hidden;
            color: #eee;
        }

        /* Partículas tecnológicas */
        .particles {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 1;
        }

        .particle {
            position: absolute;
            border: 1px solid rgba(0, 255, 255, 0.2);
            background: transparent;
            animation: float 20s infinite linear;
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
            border-radius: 50%;
        }

        .particle:nth-child(3) {
            width: 6px;
            height: 6px;
            left: 25%;
            animation-delay: 4s;
        }

        .particle:nth-child(4) {
            width: 10px;
            height: 10px;
            left: 35%;
            animation-delay: 6s;
            border-radius: 50%;
        }

        .particle:nth-child(5) {
            width: 14px;
            height: 14px;
            left: 45%;
            animation-delay: 8s;
        }

        .particle:nth-child(6) {
            width: 9px;
            height: 9px;
            left: 55%;
            animation-delay: 10s;
            border-radius: 50%;
        }

        .particle:nth-child(7) {
            width: 11px;
            height: 11px;
            left: 65%;
            animation-delay: 12s;
        }

        .particle:nth-child(8) {
            width: 7px;
            height: 7px;
            left: 75%;
            animation-delay: 14s;
            border-radius: 50%;
        }

        .particle:nth-child(9) {
            width: 13px;
            height: 13px;
            left: 85%;
            animation-delay: 16s;
        }

        .particle:nth-child(10) {
            width: 5px;
            height: 5px;
            left: 95%;
            animation-delay: 18s;
            border-radius: 50%;
        }

        @keyframes float {
            0% {
                transform: translateY(100vh) rotate(0deg);
                opacity: 0;
                box-shadow: 0 0 0 rgba(0, 255, 255, 0);
            }

            10% {
                opacity: 1;
                box-shadow: 0 0 10px rgba(0, 255, 255, 0.3);
            }

            50% {
                box-shadow: 0 0 20px rgba(0, 255, 255, 0.5);
            }

            90% {
                opacity: 1;
                box-shadow: 0 0 10px rgba(0, 255, 255, 0.3);
            }

            100% {
                transform: translateY(-100px) rotate(360deg);
                opacity: 0;
                box-shadow: 0 0 0 rgba(0, 255, 255, 0);
            }
        }

        /* Contenedor principal */
        .container {
            z-index: 10;
            position: relative;
            padding: 40px;
            background: rgba(15, 25, 45, 0.95);
            border-radius: 20px;
            border: 1px solid rgba(0, 255, 255, 0.2);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.8), 0 0 30px rgba(0, 255, 255, 0.1);
            max-width: 900px;
            margin: 20px;
            backdrop-filter: blur(10px);
        }

        /* Título principal */
        .main-title {
            font-size: clamp(2.5rem, 8vw, 3.5rem);
            font-weight: bold;
            margin-bottom: 15px;
            background: linear-gradient(45deg, #00ffff, #0080ff, #8000ff);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            text-align: center;
            text-shadow: 0 0 30px rgba(0, 255, 255, 0.6);
            animation: glow 2s ease-in-out infinite alternate;
        }

        @keyframes glow {
            from {
                filter: drop-shadow(0 0 20px rgba(0, 255, 255, 0.6));
            }
            to {
                filter: drop-shadow(0 0 30px rgba(0, 255, 255, 0.9));
            }
        }

        .subtitle {
            font-size: 1.2rem;
            color: #aaa;
            margin-bottom: 30px;
            text-align: center;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .story-section {
            margin-bottom: 30px;
        }

        .section-content {
            background: rgba(30, 40, 60, 0.9);
            border-radius: 15px;
            padding: 25px;
            border: 1px solid rgba(0, 255, 255, 0.15);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .section-content::before {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(45deg, transparent, rgba(0, 255, 255, 0.1), transparent);
            border-radius: 15px;
            z-index: -1;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .section-content:hover::before {
            opacity: 1;
        }

        .section-content:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.7), 0 0 20px rgba(0, 255, 255, 0.2);
            border-color: rgba(0, 255, 255, 0.4);
        }

        .section-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(45deg, #00ffff, #0080ff);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 28px;
            color: #000;
            box-shadow: 0 10px 20px rgba(0, 255, 255, 0.3);
            transition: all 0.3s ease;
        }

        .section-content:hover .section-icon {
            transform: rotateY(360deg);
            box-shadow: 0 15px 30px rgba(0, 255, 255, 0.5);
        }

        .photos-container {
            display: flex;
            gap: 15px;
            margin: 20px 0;
            justify-content: center;
            flex-wrap: wrap;
        }

        .photo-placeholder {
            width: 140px;
            height: 140px;
            background: rgba(40, 50, 70, 0.8);
            border-radius: 12px;
            border: 2px dashed rgba(0, 255, 255, 0.3);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            color: #ccc;
            position: relative;
            overflow: hidden;
        }

        .photo-placeholder::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(0, 255, 255, 0.1), transparent);
            transition: left 0.5s ease;
        }

        .photo-placeholder:hover::before {
            left: 100%;
        }

        .photo-placeholder:hover {
            background: rgba(0, 255, 255, 0.1);
            transform: scale(1.05) rotateZ(2deg);
            border-color: rgba(0, 255, 255, 0.7);
            box-shadow: 0 10px 25px rgba(0, 255, 255, 0.2);
        }

        .photo-icon {
            font-size: 32px;
            margin-bottom: 8px;
        }

        .photo-label {
            font-size: 0.85rem;
            text-align: center;
            font-weight: bold;
        }

        .profile-img {
            width: 140px;
            height: 140px;
            object-fit: cover;
            border-radius: 12px;
            border: 2px solid rgba(0, 255, 255, 0.3);
            transition: all 0.3s ease;
        }

        .profile-img:hover {
            transform: scale(1.05) rotateZ(-2deg);
            border-color: rgba(0, 255, 255, 0.7);
            box-shadow: 0 10px 25px rgba(0, 255, 255, 0.3);
        }

        .story-text {
            font-size: 1.1rem;
            line-height: 1.7;
            color: #ddd;
            text-align: justify;
            margin-top: 15px;
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.5);
        }

        .highlight {
            background: linear-gradient(45deg, #00ffff, #0080ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: bold;
            text-shadow: none;
        }

        .decoration {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 40px;
        }

        .tech-element {
            width: 30px;
            height: 30px;
            background: linear-gradient(45deg, #00ffff, #0080ff);
            position: relative;
            animation: pulse 2s ease-in-out infinite alternate;
        }

        .tech-element:nth-child(1) {
            transform: rotate(45deg);
            border-radius: 4px;
        }

        .tech-element:nth-child(2) {
            border-radius: 50%;
            animation-delay: 0.5s;
        }

        .tech-element:nth-child(3) {
            clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
            animation-delay: 1s;
        }

        @keyframes pulse {
            from {
                box-shadow: 0 0 10px rgba(0, 255, 255, 0.5);
                opacity: 0.8;
            }
            to {
                box-shadow: 0 0 20px rgba(0, 255, 255, 0.8);
                opacity: 1;
            }
        }

        /* Efecto especial para Hawái */
        .hawaii-section .section-content {
            background: rgba(30, 40, 60, 0.9);
            border: 1px solid rgba(255, 215, 0, 0.3);
        }

        .hawaii-section .section-content:hover {
            border-color: rgba(255, 215, 0, 0.6);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.7), 0 0 30px rgba(255, 215, 0, 0.3);
        }

        .hawaii-section .section-icon {
            background: linear-gradient(45deg, #ffd700, #ff8c00);
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
        <h1 class="main-title">Memorias de Mi Adolescencia</h1>
        <p class="subtitle">Videojuegos, Robótica y Aventuras Internacionales</p>

        <div class="story-section">
            <div class="section-content">
                <div class="section-icon">🎮</div>
                <div class="photos-container">
                    <div class="photo-placeholder">
                        <img src="https://cdn.akamai.steamstatic.com/steam/apps/10/header.jpg" 
                             alt="Counter-Strike" class="profile-img">
                             <div class="photo-label">Counter-Strike</div>
                    </div>

                </div>
                <p class="story-text">
                    Durante mi adolescencia descubrí varias de mis grandes pasiones. En esos años me gustaba mucho 
                    jugar videojuegos, sobre todo <span class="highlight">shooters como Counter-Strike 🔫</span>, donde 
                    pasaba horas con amigos compitiendo, riendo y aprendiendo a trabajar en equipo. Esa etapa me ayudó 
                    a desarrollar la concentración, la estrategia y también a hacer amistades que aún recuerdo con cariño.
                </p>
            </div>
        </div>

        <div class="story-section">
            <div class="section-content">
                <div class="section-icon">🤖</div>
                <div class="photos-container">
                    <div class="photo-placeholder">
                        <img src="https://www.edsrobotics.com/wp-content/uploads/2021/10/robotica-educativa-que-es.jpg" 
                             alt="Robótica" class="profile-img">
                    </div>
                    <div class="photo-placeholder">
                        <img src="https://i.ytimg.com/vi/aFYHaSwcOqk/maxresdefault.jpg" 
                             alt="Programación" class="profile-img">
                    </div>
                </div>
                <p class="story-text">
                    Cuando entré a sexto grado, mi vida dio un giro interesante: <span class="highlight">me metí a 
                    robótica ⚙️</span>. Al principio era pura curiosidad, pero poco a poco me fui dando cuenta de lo 
                    mucho que me gustaba entender cómo funcionaban las cosas, armar proyectos y experimentar con la 
                    tecnología. Cada clase me motivaba a seguir aprendiendo más.
                </p>
            </div>
        </div>

        <div class="story-section hawaii-section">
            <div class="section-content">
                <div class="section-icon">🏝️</div>
                <div class="photos-container">
                    <div class="photo-placeholder">
                        <img src="https://www.vanguardia.com/resizer/v2/tomenotacomfenalcoconcursobigcevl442887mg18653138jpg-ILZENWEL5JBKVFSDZ4JHNHOHSQ.jpg?auth=10ec55a2e1e65fd2c1c3d9a04ba3547f2d3427f34420c730d06efad8e6a1a7af&smart=true&width=1200&height=800&quality=70" 
                             alt="Bandera de Hawaii" class="profile-img">
                    </div>
                    <div class="photo-placeholder">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSPa4EaUMChz2Z0uxFUXT-ohZtp4w2G0UARIQ&s" 
                             alt="Competencia Internacional" class="profile-img">
                    </div>
                    <div class="photo-placeholder">
                        <img src="https://www.visittheusa.com/sites/default/files/styles/hero_l/public/images/hero_media_image/2025-02/16db584d-0a2b-4d99-b37f-27a5fac23628.jpeg?h=9a3d8190&itok=nCYfPN5-" 
                             alt="Bandera de Colombia" class="profile-img">
                    </div>
                </div>
                <p class="story-text">
                    En séptimo grado llegó una de las experiencias más inolvidables de mi vida: junto con unos amigos 
                    tuve la oportunidad de <span class="highlight">representar a Colombia en un evento internacional 
                    de robótica en Honolulu, Hawái 🇨🇴✈️🏝️</span>. Fue increíble, no solo por la competencia, sino 
                    porque era la primera vez que viajaba tan lejos y podía compartir con jóvenes de otros países que 
                    también soñaban con la ciencia y la tecnología.
                </p>
            </div>
        </div>

        <div class="story-section">
            <div class="section-content">
                <div class="section-icon">⭐</div>
                <div class="photos-container">
                    <div class="photo-placeholder">
                        <img src="https://japangemu.com/wp-content/uploads/2023/03/csgo.jpg" 
                             alt="Crecimiento Personal" class="profile-img">
                    </div>
                    <div class="photo-placeholder">
                        <img src="{{ asset('img/IGUANA.jpg') }}" alt="Foto de perfil" class="profile-img">
                    </div>
                </div>
                <p class="story-text">
                    Esa experiencia marcó mi camino, me enseñó a creer en mí mismo y a ver que <span class="highlight">
                    los sueños, con esfuerzo, sí se pueden alcanzar 🌟</span>. La adolescencia me regaló no solo 
                    momentos de diversión con los videojuegos, sino también la oportunidad de descubrir mi pasión 
                    por la tecnología y vivir una aventura que cambiaría mi perspectiva del mundo para siempre.
                </p>
            </div>
        </div>

        <div class="decoration">
            <div class="tech-element"></div>
            <div class="tech-element"></div>
            <div class="tech-element"></div>
        </div>
    </div>
</body>

</html>