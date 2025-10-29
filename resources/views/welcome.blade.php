<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tabo Kuliner</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/Home.css')}}" />
</head>
<body>
  <nav class="navbar">
    <div class="logo">
      <img src="{{asset('image/LOGO.png')}}" alt="Logo Tabo Kuliner">
      <span>Tabo Kuliner</span>
    </div>

    <div class="menu-toggle" id="menu-toggle">&#9776;</div>

    <ul class="nav-links" id="nav-links">
      <li><a href="#" class="active">Home</a></li>
      <li><a href="#">Menu</a></li>
      <li><a href="#">About Tabo</a></li>
      <li><a href="#">Contact</a></li>
    </ul>

    <div class="auth-buttons">
      <button class="btn login">Login</button>
      <button class="btn register">Register</button>
    </div>
  </nav>

  <!-- HERO SECTION -->
  <section class="hero">
    <div class="overlay"></div>
    <div class="hero-content">
      <h1>RASAKAN CITA RASA AUTENTIK<br>SUMATERA UTARA</h1>
      <p>Temukan cita rasa autentik dari jantung Sumatera Utara sebuah perjalanan kuliner yang merayakan tradisi, rempah, dan warisan budaya.</p>
    </div>
  </section>

  <section class="feature-section">
  <div class="feature-card">
    <img src="icons/rempah.svg" alt="Rempah Pilihan">
    <h3>REMPAH PILIHAN</h3>
  </div>

  <div class="feature-card">
    <img src="icons/resep.svg" alt="Resep Leluhur">
    <h3>RESEP LELUHUR</h3>
  </div>

  <div class="feature-card">
    <img src="icons/bahan.svg" alt="Bahan Berkualitas">
    <h3>BAHAN BERKUALITAS</h3>
  </div>
</section>



</body>
  <script>
    const toggle = document.getElementById('menu-toggle');
    const navLinks = document.getElementById('nav-links');
    toggle.addEventListener('click', () => {
      navLinks.classList.toggle('active');
    });
  </script>
</html>

