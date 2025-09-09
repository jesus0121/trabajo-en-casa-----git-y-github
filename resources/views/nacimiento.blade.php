<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Familia Rodríguez Mulford - Lugares de Nacimiento</title>
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

    .particle:nth-child(1) { width: 80px; height: 80px; left: 10%; animation-delay: 0s; }
    .particle:nth-child(2) { width: 60px; height: 60px; left: 20%; animation-delay: 2s; }
    .particle:nth-child(3) { width: 100px; height: 100px; left: 30%; animation-delay: 4s; }
    .particle:nth-child(4) { width: 40px; height: 40px; left: 40%; animation-delay: 6s; }
    .particle:nth-child(5) { width: 120px; height: 120px; left: 50%; animation-delay: 8s; }
    .particle:nth-child(6) { width: 70px; height: 70px; left: 60%; animation-delay: 10s; }
    .particle:nth-child(7) { width: 90px; height: 90px; left: 70%; animation-delay: 12s; }
    .particle:nth-child(8) { width: 50px; height: 50px; left: 80%; animation-delay: 14s; }
    .particle:nth-child(9) { width: 110px; height: 110px; left: 90%; animation-delay: 16s; }

    @keyframes float {
      0% { transform: translateY(100vh) rotate(0deg); opacity: 0; }
      10% { opacity: 1; }
      90% { opacity: 1; }
      100% { transform: translateY(-100px) rotate(360deg); opacity: 0; }
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
      max-width: 1200px;
      margin: 20px;
    }

    /* Título principal */
    .main-title {
      font-size: clamp(2rem, 6vw, 3.5rem);
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
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    @keyframes textGlow {
      from { filter: brightness(1) drop-shadow(0 0 10px rgba(255, 255, 255, 0.3)); transform: scale(1); }
      to { filter: brightness(1.2) drop-shadow(0 0 20px rgba(255, 255, 255, 0.6)); transform: scale(1.02); }
    }

    /* Subtítulo */
    .subtitle {
      font-size: 1.2rem;
      color: rgba(255, 255, 255, 0.9);
      margin-bottom: 40px;
      font-weight: 300;
      letter-spacing: 2px;
      text-transform: uppercase;
      animation: fadeInUp 1s ease-out 0.5s both;
    }

    /* Contenedor de la familia */
    .family-info {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
      gap: 30px;
      margin: 40px 0;
      animation: fadeInUp 1s ease-out 1s both;
    }

    .family-member {
      background: rgba(255, 255, 255, 0.05);
      backdrop-filter: blur(10px);
      border-radius: 15px;
      padding: 30px 25px;
      border: 1px solid rgba(255, 255, 255, 0.2);
      transition: all 0.3s ease;
      position: relative;
      overflow: hidden;
    }

    .family-member:hover {
      transform: translateY(-5px);
      box-shadow: 0 20px 40px rgba(255, 255, 255, 0.1);
      border-color: rgba(255, 255, 255, 0.4);
    }

    .member-name {
      font-size: 1.4rem;
      font-weight: bold;
      color: #ffffff;
      margin-bottom: 20px;
      background: linear-gradient(45deg, #ff6b6b, #4ecdc4);
      -webkit-background-clip: text;
      background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .member-relation {
      font-size: 0.9rem;
      color: rgba(255, 255, 255, 0.7);
      text-transform: uppercase;
      letter-spacing: 1px;
      margin-bottom: 25px;
      font-weight: 300;
    }

    /* Contenedor de fotos */
    .photos-container {
      display: flex;
      gap: 25px;
      margin-bottom: 25px;
      justify-content: center;
      flex-wrap: wrap;
    }

    .photo-placeholder {
      width: 140px;
      height: 140px;
      background: rgba(255, 255, 255, 0.08);
      border-radius: 12px;
      border: 2px solid rgba(255, 255, 255, 0.3);
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 8px;
      overflow: hidden;
      transition: all 0.3s ease;
    }

    .photo-placeholder:hover {
      border-color: rgba(76, 236, 196, 0.6);
      background: rgba(76, 236, 196, 0.1);
      transform: scale(1.05);
    }

    .profile-img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 10px;
    }

    .photo-label {
      font-size: 0.8rem;
      color: rgba(255, 255, 255, 0.7);
      margin-top: 6px;
      font-weight: bold;
      text-align: center;
    }

    .birth-place {
      position: relative;
      padding: 15px;
      background: rgba(255, 255, 255, 0.08);
      border-radius: 10px;
      border-left: 4px solid #4ecdc4;
    }

    .place-label {
      font-size: 0.8rem;
      color: rgba(255, 255, 255, 0.6);
      text-transform: uppercase;
      letter-spacing: 1px;
      margin-bottom: 8px;
      font-weight: bold;
    }

    .place-name {
      font-size: 1.1rem;
      color: #ffffff;
      font-weight: 600;
      line-height: 1.4;
    }

    .city { color: #4ecdc4; }
    .state { color: #feca57; }
    .country { color: #ff6b6b; }

    /* Responsividad */
    @media (max-width: 768px) {
      .photos-container { gap: 15px; }
      .photo-placeholder { width: 120px; height: 120px; }
    }
  </style>
</head>

<body>
  <div class="particles">
    <div class="particle"></div><div class="particle"></div><div class="particle"></div>
    <div class="particle"></div><div class="particle"></div><div class="particle"></div>
    <div class="particle"></div><div class="particle"></div><div class="particle"></div>
  </div>

  <div class="container">
    <h1 class="main-title">Familia Rodríguez Mulford</h1>
    <p class="subtitle">Lugares de Nacimiento</p>

    <div class="family-info">
      <!-- Jesús -->
      <div class="family-member">
        <div class="member-name">Jesús David Rodríguez Mulford</div>
        <div class="member-relation">Hijo</div>
        <div class="photos-container">
          <div class="photo-placeholder">
            <img src="{{ asset('img/IGUANA.jpg') }}" alt="Jesús" class="profile-img">
            <div class="photo-label">Foto Personal</div>
          </div>
          <div class="photo-placeholder">
            <img src="https://www.upb.edu.co/es/imagenes/img-sobrelaciudadbucaramanga-cam-1464102319822.jpg" alt="Bucaramanga" class="profile-img">
            <div class="photo-label">Bucaramanga</div>
          </div>
        </div>
        <div class="birth-place">
          <div class="place-label">Lugar de Nacimiento</div>
          <div class="place-name"><span class="city">Bucaramanga</span> / <span class="state">Santander</span> / <span class="country">Colombia</span></div>
        </div>
      </div>

      <!-- Jenri -->
      <div class="family-member">
        <div class="member-name">Jenri Orlando Rodríguez Riveros</div>
        <div class="member-relation">Padre</div>
        <div class="photos-container">
          <div class="photo-placeholder">
            <img src="{{ asset('img/PAPA.png') }}" alt="Padre" class="profile-img">
            <div class="photo-label">Foto Personal</div>
          </div>
          <div class="photo-placeholder">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSFmm4zWu97X2EIkPVAi9HA1L0v1t_M8_GlNw&s" alt="Acacias" class="profile-img">
            <div class="photo-label">Acacias</div>
          </div>
        </div>
        <div class="birth-place">
          <div class="place-label">Lugar de Nacimiento</div>
          <div class="place-name"><span class="city">Acacias</span> / <span class="state">Meta</span> / <span class="country">Colombia</span></div>
        </div>
      </div>

      <!-- Diana -->
      <div class="family-member">
        <div class="member-name">Diana Mulford Bertel</div>
        <div class="member-relation">Madre</div>
        <div class="photos-container">
          <div class="photo-placeholder">
            <img src="https://cdn.pixabay.com/photo/2015/11/03/08/56/question-mark-1019820_1280.jpg" alt="Diana" class="profile-img">
            <div class="photo-label">Foto Personal</div>
          </div>
          <div class="photo-placeholder">
            <img src="https://www.cideu.org/wp-content/uploads/2019/12/barrancabermeja-3-1.jpg" alt="Barrancabermeja" class="profile-img">
            <div class="photo-label">Barrancabermeja</div>
          </div>
        </div>
        <div class="birth-place">
          <div class="place-label">Lugar de Nacimiento</div>
          <div class="place-name"><span class="city">Barrancabermeja</span> / <span class="state">Santander</span> / <span class="country">Colombia</span></div>
        </div>
      </div>

      <!-- María Helena -->
      <div class="family-member">
        <div class="member-name">Maria Helena Rodríguez Mulford</div>
        <div class="member-relation">Hermana</div>
        <div class="photos-container">
          <div class="photo-placeholder">
            <img src="{{ asset('img/Helena.png') }}" alt="Helena" class="profile-img">
            <div class="photo-label">Foto Personal</div>
          </div>
          <div class="photo-placeholder">
            <img src="https://www.floridablanca.gov.co/info/floridablanca_se/media/pubInt/thumbs/thpubInt_700X400_1385.webp" alt="Floridablanca" class="profile-img">
            <div class="photo-label">Floridablanca</div>
          </div>
        </div>
        <div class="birth-place">
          <div class="place-label">Lugar de Nacimiento</div>
          <div class="place-name"><span class="city">Floridablanca</span> / <span class="state">Santander</span> / <span class="country">Colombia</span></div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
