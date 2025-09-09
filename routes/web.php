<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jesús David Rodríguez Mulford</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: #000000;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow-x: hidden;
        }

        /* Fondo animado con partículas */
        .particles {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 1;
        }

        .particle {
            position: absolute;
            background: rgba(255, 255, 255, 0.15);
            border-radius: 50%;
            animation: float 20s infinite linear;
        }

        .particle:nth-child(1) {
            width: 80px;
            height: 80px;
            left: 10%;
            animation-delay: 0s;
        }

        .particle:nth-child(2) {
            width: 60px;
            height: 60px;
            left: 20%;
            animation-delay: 2s;
        }

        .particle:nth-child(3) {
            width: 100px;
            height: 100px;
            left: 30%;
            animation-delay: 4s;
        }

        .particle:nth-child(4) {
            width: 40px;
            height: 40px;
            left: 40%;
            animation-delay: 6s;
        }

        .particle:nth-child(5) {
            width: 120px;
            height: 120px;
            left: 50%;
            animation-delay: 8s;
        }

        .particle:nth-child(6) {
            width: 70px;
            height: 70px;
            left: 60%;
            animation-delay: 10s;
        }

        .particle:nth-child(7) {
            width: 90px;
            height: 90px;
            left: 70%;
            animation-delay: 12s;
        }

        .particle:nth-child(8) {
            width: 50px;
            height: 50px;
            left: 80%;
            animation-delay: 14s;
        }

        .particle:nth-child(9) {
            width: 110px;
            height: 110px;
            left: 90%;
            animation-delay: 16s;
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
            text-align: center;
            z-index: 10;
            position: relative;
            padding: 40px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 25px 45px rgba(255, 255, 255, 0.1);
            max-width: 800px;
            margin: 20px;
        }

        /* Estilos para la foto de perfil */
        .profile-container {
            margin: 0 0 30px 0;
            animation: fadeInUp 1s ease-out 0.3s both;
        }

        .profile-img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
            transition: all 0.3s ease;
            animation: photoGlow 3s ease-in-out infinite alternate;
        }

        .profile-img:hover {
            transform: scale(1.1) rotate(5deg);
            border-color: rgba(255, 255, 255, 0.6);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
        }

        @keyframes photoGlow {
            from {
                box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3), 0 0 20px rgba(255, 255, 255, 0.1);
            }

            to {
                box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3), 0 0 30px rgba(255, 255, 255, 0.3);
            }
        }

        /* Título principal */
        .main-title {
            font-size: clamp(2.5rem, 8vw, 4.5rem);
            font-weight: bold;
            margin-bottom: 20px;
            background: linear-gradient(45deg, #ff6b6b, #4ecdc4, #45b7d1, #96ceb4, #feca57);
            background-size: 400% 400%;
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: gradientShift 4s ease-in-out infinite, textGlow 2s ease-in-out infinite alternate;
            text-shadow: 0 0 30px rgba(255, 255, 255, 0.3);
            line-height: 1.2;
        }

        @keyframes gradientShift {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        @keyframes textGlow {
            from {
                filter: brightness(1) drop-shadow(0 0 10px rgba(255, 255, 255, 0.3));
                transform: scale(1);
            }

            to {
                filter: brightness(1.2) drop-shadow(0 0 20px rgba(255, 255, 255, 0.6));
                transform: scale(1.02);
            }
        }

        /* Subtítulo */
        .subtitle {
            font-size: 1.2rem;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 30px;
            font-weight: 300;
            letter-spacing: 2px;
            text-transform: uppercase;
            animation: fadeInUp 1s ease-out 0.5s both;
        }

        /* Decoración */
        .decoration {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin: 30px 0;
            animation: fadeInUp 1s ease-out 1s both;
        }

        .star {
            width: 30px;
            height: 30px;
            background: linear-gradient(45deg, #ffd700, #ffed4e);
            clip-path: polygon(50% 0%, 61% 35%, 98% 35%, 68% 57%, 79% 91%, 50% 70%, 21% 91%, 32% 57%, 2% 35%, 39% 35%);
            animation: rotate 4s linear infinite, pulse 2s ease-in-out infinite alternate;
        }

        .star:nth-child(2) {
            animation-delay: 0.5s;
        }

        .star:nth-child(3) {
            animation-delay: 1s;
        }

        @keyframes rotate {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        @keyframes pulse {
            from {
                transform: scale(1);
            }

            to {
                transform: scale(1.2);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Botón interactivo */
        .cta-button {
            display: inline-block;
            padding: 15px 30px;
            background: linear-gradient(45deg, #667eea, #764ba2);
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-weight: bold;
            font-size: 1.1rem;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: all 0.3s ease;
            border: 2px solid rgba(255, 255, 255, 0.3);
            animation: fadeInUp 1s ease-out 1.5s both;
            position: relative;
            overflow: hidden;
        }

        .cta-button:before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.5s ease;
        }

        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 25px rgba(255, 255, 255, 0.2);
            border-color: rgba(255, 255, 255, 0.6);
        }

        .cta-button:hover:before {
            left: 100%;
        }

        /* Responsividad */
        @media (max-width: 768px) {
            .container {
                margin: 10px;
                padding: 30px 20px;
            }

            .profile-img {
                width: 150px;
                height: 150px;
            }

            .subtitle {
                font-size: 1rem;
                letter-spacing: 1px;
            }

            .decoration {
                gap: 15px;
            }

            .star {
                width: 25px;
                height: 25px;
            }
        }

        /* Hover effects en el contenedor */
        .container:hover {
            transform: translateY(-5px);
            box-shadow: 0 35px 60px rgba(255, 255, 255, 0.15);
            transition: all 0.3s ease;
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
    </div>

    <div class="container">

        {{-- Imagen desde public/img --}}
        <img src="{{ asset('img/IGUANA.jpg') }}" alt="Foto de perfil" class="profile-img">
        
        <h1 class="main-title">
            Jesús David<br>
            Rodríguez Mulford
        </h1>

        <p class="subtitle">Bienvenido a mi espacio digital</p>

        <div class="decoration">
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
        </div>
    </div>

    <script>
        function showWelcome() {
            alert('¡Hola! Soy Jesús David Rodríguez Mulford. ¡Gracias por visitar mi página! 🌟');
        }

        // Efecto de cursor personalizado
        document.addEventListener('mousemove', function(e) {
            const cursor = document.createElement('div');
            cursor.style.position = 'absolute';
            cursor.style.left = e.pageX + 'px';
            cursor.style.top = e.pageY + 'px';
            cursor.style.width = '10px';
            cursor.style.height = '10px';
            cursor.style.background = 'rgba(0, 212, 255, 0.8)';
            cursor.style.borderRadius = '50%';
            cursor.style.pointerEvents = 'none';
            cursor.style.zIndex = '9999';
            cursor.style.animation = 'cursorFade 1s ease-out forwards';
            document.body.appendChild(cursor);

            setTimeout(() => {
                if (cursor.parentNode) {
                    cursor.parentNode.removeChild(cursor);
                }
            }, 1000);
        });

        // Animación del cursor
        const style = document.createElement('style');
        style.textContent = `
            @keyframes cursorFade {
                0% {
                    opacity: 1;
                    transform: scale(0);
                }
                50% {
                    opacity: 1;
                    transform: scale(1);
                }
                100% {
                    opacity: 0;
                    transform: scale(2);
                }
            }
        `;
        document.head.appendChild(style);
    </script>
</body>

</html>
