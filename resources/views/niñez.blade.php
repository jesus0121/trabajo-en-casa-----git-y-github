<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memorias de Mi Niñez - Colegio Santander</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: #000;
            /* Fondo negro */
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow-x: hidden;
            color: #eee;
        }

        /* Partículas grises */
        .particles {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 1;
        }

        .particle {
            position: absolute;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: float 25s infinite linear;
        }

        .particle:nth-child(1) {
            width: 60px;
            height: 60px;
            left: 5%;
            animation-delay: 0s;
        }

        .particle:nth-child(2) {
            width: 40px;
            height: 40px;
            left: 15%;
            animation-delay: 3s;
        }

        .particle:nth-child(3) {
            width: 80px;
            height: 80px;
            left: 25%;
            animation-delay: 6s;
        }

        .particle:nth-child(4) {
            width: 50px;
            height: 50px;
            left: 35%;
            animation-delay: 9s;
        }

        .particle:nth-child(5) {
            width: 70px;
            height: 70px;
            left: 45%;
            animation-delay: 12s;
        }

        .particle:nth-child(6) {
            width: 45px;
            height: 45px;
            left: 55%;
            animation-delay: 15s;
        }

        .particle:nth-child(7) {
            width: 90px;
            height: 90px;
            left: 65%;
            animation-delay: 18s;
        }

        .particle:nth-child(8) {
            width: 35px;
            height: 35px;
            left: 75%;
            animation-delay: 21s;
        }

        .particle:nth-child(9) {
            width: 65px;
            height: 65px;
            left: 85%;
            animation-delay: 24s;
        }

        .particle:nth-child(10) {
            width: 55px;
            height: 55px;
            left: 95%;
            animation-delay: 2s;
        }

        @keyframes float {
            0% {
                transform: translateY(100vh) rotate(0deg);
                opacity: 0;
            }

            10% {
                opacity: 1;
            }

            90% {
                opacity: 1;
            }

            100% {
                transform: translateY(-100px) rotate(360deg);
                opacity: 0;
            }
        }

        /* Contenedor principal */
        .container {
            z-index: 10;
            position: relative;
            padding: 40px;
            background: rgba(30, 30, 30, 0.9);
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.8);
            max-width: 900px;
            margin: 20px;
        }

        /* Título principal */
        .main-title {
            font-size: clamp(2.5rem, 8vw, 3.5rem);
            font-weight: bold;
            margin-bottom: 15px;
            background: linear-gradient(45deg, #00f2fe, #4facfe);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            text-align: center;
            text-shadow: 0 0 20px rgba(0, 242, 254, 0.5);
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
            background: rgba(50, 50, 50, 0.8);
            border-radius: 15px;
            padding: 25px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
        }

        .section-content:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.6);
            border-color: rgba(0, 242, 254, 0.3);
        }

        .section-icon {
            width: 55px;
            height: 55px;
            background: linear-gradient(45deg, #00f2fe, #4facfe);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            font-size: 22px;
            color: #000;
        }

        .photos-container {
            display: flex;
            gap: 15px;
            margin: 20px 0;
            justify-content: center;
            flex-wrap: wrap;
        }

        .photo-placeholder {
            width: 130px;
            height: 130px;
            background: rgba(70, 70, 70, 0.8);
            border-radius: 12px;
            border: 2px dashed rgba(0, 242, 254, 0.4);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            color: #ccc;
        }

        .photo-placeholder:hover {
            background: rgba(0, 242, 254, 0.1);
            transform: scale(1.05);
            border-color: rgba(0, 242, 254, 0.8);
        }

        .photo-icon {
            font-size: 28px;
            margin-bottom: 8px;
        }

        .photo-label {
            font-size: 0.8rem;
            text-align: center;
        }

        .profile-img {
            width: 130px;
            height: 130px;
            object-fit: cover;
            border-radius: 12px;
            border: 2px solid rgba(0, 242, 254, 0.4);
            transition: all 0.3s ease;
        }

        .profile-img:hover {
            transform: scale(1.05);
            border-color: rgba(0, 242, 254, 0.8);
        }

        .story-text {
            font-size: 1.05rem;
            line-height: 1.6;
            color: #ddd;
            text-align: justify;
            margin-top: 15px;
        }

        .game-highlight {
            background: linear-gradient(45deg, #00f2fe, #4facfe);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: bold;
        }

        .decoration {
            display: flex;
            justify-content: center;
            gap: 12px;
            margin-top: 30px;
        }

        .heart {
            width: 25px;
            height: 25px;
            background: linear-gradient(45deg, #ff6b6b, #ff8e8e);
            transform: rotate(45deg);
            position: relative;
        }

        .heart::before,
        .heart::after {
            content: '';
            position: absolute;
            width: 25px;
            height: 25px;
            background: inherit;
            border-radius: 50%;
        }

        .heart::before {
            top: -12px;
            left: 0;
        }

        .heart::after {
            top: 0;
            left: -12px;
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
        <h1 class="main-title">Memorias de Mi Niñez</h1>
        <p class="subtitle">Colegio Santander y Los Juegos de Facebook</p>

        <div class="story-section">
            <div class="section-content">
                <div class="section-icon">🏫</div>
                <div class="photos-container">
                    <div class="photo-placeholder">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ8LGB3XIV30CbrEJqMuXzkqw_KLiGf3SytOg&s"
                        alt="Foto de perfil" class="profile-img">
                        <div class="photo-label">Colegio Santander</div>
                    </div>
                </div>
                <p class="story-text">
                    Cuando era niño estudiaba en el Colegio Santander 📚. Recuerdo que siempre esperaba con ansias la
                    hora de salida, no solo porque significaba descanso de las clases, sino porque era el momento en
                    que podía reunirme con mis dos mejores amigos. Aunque jugábamos en el recreo, lo que más nos
                    emocionaba eran las tardes en las que nos conectábamos a Facebook para jugar juntos.
                </p>
            </div>
        </div>

        <div class="story-section">
            <div class="section-content">
                <div class="section-icon">🎮</div>
                <div class="photos-container">
                    <div class="photo-placeholder">
                        <img src="https://www.movistargameclub.pe/wp-content/uploads/2024/03/image-62.png"
                        alt="Foto de perfil" class="profile-img">
                        <div class="photo-icon"></div>
                        <div class="photo-label">Pet Society</div>
                    </div>
                    <div class="photo-placeholder">
                        <img src="https://eip.gg/wp-content/uploads/2020/01/Dungeon-Blitz-Character-Creation.jpg"
                        alt="Foto de perfil" class="profile-img">
                        <div class="photo-label">Dungeon Blitz</div>
                    </div>
                    <div class="photo-placeholder">
                        <img src="https://pm1.aminoapps.com/6318/221a86c91177de159382df9cb85de997be8414e5_hq.jpg"
                        alt="Foto de perfil" class="profile-img">
                        <div class="photo-label">Dragon City</div>
                    </div>
                </div>
                <p class="story-text">
                    En esa época los juegos de Facebook estaban de moda: pasábamos horas compitiendo en <span
                        class="game-highlight">Pet Society 🐾</span>, viendo quién lograba decorar mejor su casita, o
                    en <span class="game-highlight">Dungeon Blitz ⚔️</span>, donde intentábamos pelear por quién
                    conseguía más poder. También nos encantaba <span class="game-highlight">Dragon City 🐲</span>,
                    cuidando a nuestras criaturas y presumiendo de cuál había evolucionado más rápido.
                </p>
            </div>
        </div>

        <div class="story-section">
            <div class="section-content">
                <div class="section-icon">💻</div>
                <div class="photos-container">
                    <div class="photo-placeholder">
                        <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiFNicFZzOG0wc8pn6fN3JL8obCHbjPFbvcRLgv7aegR7lhXkm6a-75awo59XWXhMPpb40kkK6rsQwNgqg0S4L2BBU7EiXdjIkHbMkahQtvl_rtigFZJMwBn6TGfyhX8kO-PKjWgCvGM3s/s1600/computadora.jpg"
                        alt="Foto de perfil" class="profile-img">
                        <div class="photo-label">Computadora</div>
                    </div>
                </div>
                <p class="story-text">
                    Lo divertido era que, aunque cada uno estaba en su casa, sentíamos que seguíamos compartiendo el
                    recreo, solo que ahora dentro de una pantalla 🖥️. A veces la conexión fallaba o alguno se quedaba
                    sin "energía" para jugar, pero incluso eso nos hacía reír y nos dejaba anécdotas.
                </p>
            </div>
        </div>

        <div class="story-section">
            <div class="section-content">
                <div class="section-icon">❤️</div>
                <div class="photos-container">
                    <div class="photo-placeholder">
                         <img src="https://www.votatuprofesor.com/images/jch-optimize/ng/images_blog_educar-en-valores-amistad.webp"
                            alt="Foto de perfil" class="profile-img">
                        <div class="photo-label">Amistad</div>
                    </div>
                    <div class="photo-placeholder">
                        <img src="https://i.ytimg.com/vi/z7Ux2Z18WqY/mqdefault.jpg" alt="Foto de perfil"
                            class="profile-img">
                        <div class="photo-label">Buenos Tiempos</div>
                    </div>
                </div>
                <p class="story-text">
                    Hoy en día miro atrás y me doy cuenta de que esos juegos no eran solo entretenimiento; eran
                    parte de nuestra amistad 🤝. En el colegio Santander aprendí muchas cosas, pero también descubrí el
                    valor de compartir pequeños momentos, incluso detrás de una computadora, con las personas que
                    más quería en mi niñez ⏰.
                </p>
            </div>
        </div>

        <div class="decoration">
            <div class="heart"></div>
            <div class="heart"></div>
            <div class="heart"></div>
        </div>
    </div>
</body>

</html>
