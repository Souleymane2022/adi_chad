<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ADI CHAD | Communication Digitale & Audiovisuel</title>

<!-- SEO -->
<meta name="description" content="ADI CHAD – Agence de Communication Digitale, Imprimerie, Production Audiovisuelle et Centre de Formation Professionnelle au Tchad.">
<meta name="keywords" content="ADI CHAD, communication digitale, audiovisuel, imprimerie, formation numérique, Tchad">

<!-- Fonts & Icons -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdn.tailwindcss.com"></script>

<script>
tailwind.config = {
  theme: {
    extend: {
      colors: {
        primary: '#060E54',
        dark: '',
        accent: '#F59E0B'
      }
    }
  }
}
</script>
</head>
<style>
    @media (max-width: 768px) {
  .partner-scroll {
    animation-duration: 30s;
  }
}
<!-- ================= animation pour le partenaire ================= -->
@keyframes scrollHorizontal {
  0% {
    transform: translateX(0);
  }
  100% {
    transform: translateX(-50%);
  }
}

.partner-scroll {
  animation: scrollHorizontal 25s linear infinite;
  width: max-content;
}

.partner-scroll:hover {
  animation-play-state: paused;
}

/* ================= Animation de révélation (défilement de bas vers le haut) ================= */
.reveal {
  transform: translateY(100px); /* Décalage initial vers le bas */
  opacity: 0; /* Invisible au départ */
  transition: all 0.6s ease-out; /* Transition fluide */
}

.reveal.active {
  transform: translateY(0); /* Retour à la position normale */
  opacity: 1; /* Visible */
}
@keyframes scroll {
  0% {
    transform: translateX(0);
  }
  100% {
    transform: translateX(-50%);
  }
}

.animate-scroll {
  animation: scroll 25s linear infinite;
}
/* ================= Menu mobile ================= */
.mobile-menu {
  position: absolute;
  top: 100%;
  left: 0;
  width: 100%;
  background-color: #ffffff;
  display: none;
  flex-direction: column;
  padding: 1rem 1.5rem;
  box-shadow: 0 8px 20px rgba(0,0,0,0.1);
  z-index: 60;
}

.mobile-menu a {
  color: #1f2937; /* gris foncé */
  font-size: 1rem;
  font-weight: 500;
  padding: 0.75rem 0;
  text-decoration: none;
  border-bottom: 1px solid #e5e7eb;
}

.mobile-menu a:hover {
  color: #16a34a; /* vert */
}

.mobile-menu.open {
  display: flex;
}

/* Hamburger */
.hamburger {
  display: none;
  flex-direction: column;
  cursor: pointer;
}

.hamburger span {
  width: 26px;
  height: 3px;
  background-color: #374151;
  margin: 4px 0;
}

/* Mobile only */
@media (max-width: 768px) {
  .hamburger {
    display: flex;
  }
}

/* css pour la carte */
.hero {
    background: #1f3c88; /* bleu ADI */
    color: white;
    padding: 60px 40px;
}

.hero-content {
    max-width: 1100px;
    margin: auto;
}

.hero h1 {
    color: rgb(235, 238, 37);
    font-size: 32px;
    margin-bottom: 10px;
}

.slogan {
    font-weight: 600;
    margin-bottom: 6px;
}

.desc {
    font-size: 14px;
    opacity: 0.9;
}
body {
  font-family: 'Poppins', sans-serif;
}


/* ===== Carte ===== */
.map-container {
    margin-top: 20px;
    width: 280px;   /* petite taille */
    height: 180px;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 12px rgba(0,0,0,0.3);
}

.map-container iframe {
    width: 100%;
    height: 100%;
    border: 0;
}
@keyframes scroll {
  0% {
    transform: translateX(0);
  }
  100% {
    transform: translateX(-50%);
  }
}

.animate-scroll {
  animation: scroll 5s linear infinite;
}
/* Animation de base */
.reveal-side {
  opacity: 0;
  transition: all 0.8s ease-out;
}

/* Depuis la gauche */
.reveal-left {
  transform: translateX(-80px);
}

/* Depuis la droite */
.reveal-right {
  transform: translateX(80px);
}

/* Quand visible */
.reveal-side.active {
  opacity: 1;
  transform: translateX(0);
}
transition: all 1s cubic-bezier(0.22, 1, 0.36, 1);

.reveal-left {
  transform: translateX(-80px) translateY(30px);
}

.reveal-right {
  transform: translateX(80px) translateY(30px);
}

.no-scrollbar::-webkit-scrollbar {
  display: none;
}
.no-scrollbar {
  -ms-overflow-style: none;
  scrollbar-width: none;
}
/* Carte activité */
.activity-card {
  position: relative;
  min-width: 280px;
  height: 380px;
  border-radius: 20px;
  overflow: hidden;
  flex-shrink: 0;
  box-shadow: 0 15px 30px rgba(0,0,0,.2);
}

@media (min-width: 768px) {
  .activity-card {
    min-width: 320px;
    height: 420px;
  }
}

.activity-card img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

/* Overlay texte */
.activity-card .overlay {
  position: absolute;
  inset: 0;
  background: linear-gradient(
    to top,
    rgba(0,0,0,.85),
    rgba(0,0,0,.25)
  );
  color: white;
  padding: 20px;
  display: flex;
  flex-direction: column;
  justify-content: flex-end;
}

.overlay .date {
  font-size: 0.85rem;
  opacity: .85;
}

.overlay h3 {
  font-size: 1.1rem;
  font-weight: 700;
  margin: 6px 0;
}

.overlay p {
  font-size: 0.9rem;
  line-height: 1.4;
  opacity: .9;
}

/* Flèches */
.nav-btn {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  width: 42px;
  height: 42px;
  border-radius: 999px;
  background: white;
  color: #5b21b6; /* violet */
  font-size: 24px;
  box-shadow: 0 10px 20px rgba(0,0,0,.25);
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
}

.nav-btn:hover {
  background: #ede9fe;
}

/* scrollbar off */
.no-scrollbar::-webkit-scrollbar {
  display: none;
}
.no-scrollbar {
  scrollbar-width: none;
}
/* Images rotatives derrière la carte */
.image-rotator {
  position: absolute;
  inset: 0;
  z-index: 0;
}

.image-rotator img {
  position: absolute;
  inset: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  opacity: 0;
  transition: opacity 1s ease-in-out;
}

.image-rotator img.active {
  opacity: 1;
}

/* S'assurer que le texte est au-dessus */
.activity-card .overlay {
  z-index: 1;
}
.nav-btn {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  width: 42px;
  height: 42px;
  border-radius: 999px;
  background: white;
  color: #5b21b6; /* violet */
  font-size: 24px;
  box-shadow: 0 10px 20px rgba(0,0,0,.25);
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  z-index: 10; /* Assurez-vous que c'est supérieur */
  pointer-events: auto; /* Permet au bouton de capter les clics */
}
/* Animation reveal bas vers haut */
.reveal-up {
  opacity: 0;
  transform: translateY(60px);
  transition: opacity 0.8s ease-out, transform 0.8s ease-out;
}

.reveal-up.active {
  opacity: 1;
  transform: translateY(0);
}
transition: opacity 1s cubic-bezier(0.22, 1, 0.36, 1),
            transform 1s cubic-bezier(0.22, 1, 0.36, 1);






</style>
 <body class="font-poppins text-gray-800 text-base sm:text-lg lg:text-xl">
<!-- ================= HEADER ================= -->
<header class="fixed top-0 w-full bg-white shadow z-50">
  <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">

    <!-- Logo + Nom -->
    <div class="flex items-center gap-3">
     <img
  src="{{ asset('/image/2P1.jpeg') }}"
  alt="Logo ADI CHAD"
  class="h-14 w-auto object-contain"
/>
    </div>

    <!-- Navigation Desktop -->
    <nav class="hidden md:flex gap-6 font-medium">
      <a href="#accueil" class="hover:text-primary">Accueil</a>
      <a href="#apropos" class="hover:text-primary">À propos</a>
      <a href="#services" class="hover:text-primary">Services</a>
      <a href="#activites" class="hover:text-primary">Activités</a>
      <a href="#contact" class="hover:text-primary">Contact</a>
    </nav>

    <!-- Bouton Hamburger Mobile -->
    <div class="hamburger md:hidden" id="hamburger">
      <span></span>
      <span></span>
      <span></span>
    </div>

  </div>

  <!-- Menu Mobile -->
  <div class="mobile-menu" id="mobile-menu">
    <a href="#accueil" onclick="closeMenu()">Accueil</a>
    <a href="#apropos" onclick="closeMenu()">À propos</a>
    <a href="#services" onclick="closeMenu()">Services</a>
    <a href="#activites" onclick="closeMenu()">Activités</a>
    <a href="#contact" onclick="closeMenu()">Contact</a>
  </div>
</header>

<!-- ================= HERO SLIDER ================= -->
<section  id="accueil" class="h-screen relative overflow-hidden mt-16">
    <!-- Flèche gauche -->
<button id="prev"
  class="absolute left-4 top-1/2 -translate-y-1/2 z-20
         bg-black/50 hover:bg-black/70 text-white
         w-12 h-12 rounded-full flex items-center justify-center">
  ❮
</button>

<!-- Flèche droite -->
<button id="next"
  class="absolute right-4 top-1/2 -translate-y-1/2 z-20
         bg-black/50 hover:bg-black/70 text-white
         w-12 h-12 rounded-full flex items-center justify-center">
  ❯
</button>


<div id="slider"class="h-full flex w-full transition-transform duration-700 ease-in-out">

    <!-- Slide 1 -->
   <div class="min-w-full h-full relative bg-cover bg-center"
     style="background-image:url('/image/1.jpeg');">

  <!-- Overlay noir transparent -->
  <div class="absolute inset-0 bg-black/60"></div>

  <!-- Contenu -->
  <div class="relative z-10 h-full flex items-center justify-center text-white text-center px-6">
    <div>
  <h2 class="text-5xl font-bold">ADI CHAD</h2>
  <p class="mt-4 text-xl">Au service de votre confort digital</p>

  <!-- Boutons -->
  <div class="mt-6 flex justify-center gap-4 flex-wrap">

    <!-- Bouton bleu -->
    <a href="#apropos"
       class="inline-block bg-blue-600 hover:bg-yellow-500
              text-white px-6 py-3 rounded transition">
      En savoir plus
    </a>

    <!-- Bouton orange -->
    <a href="#contact"
       class="inline-block bg-yellow-500 hover:bg-yellow-500
              text-white px-6 py-3 rounded transition">
      Contactez-nous
    </a>

  </div>
</div>
  </div>

</div>


    <!-- Slide 2 -->

    <div class="min-w-full h-full relative bg-cover bg-center"
     style="background-image:url('/image/T1.jpeg');">

  <!-- Overlay noir transparent -->
  <div class="absolute inset-0 bg-black/60"></div>

  <!-- Contenu -->
  <div class="relative z-10 h-full flex items-center justify-center text-white text-center px-6">
    <div>
      <h2 class="text-5xl font-bold">ADI CHAD</h2>
      <h2 class="text-3xl font-bold">Votre partenaire en Communication Digitale</h2>
        <p class="mt-4">
          Nous accompagnons les entreprises et les institutions dans leur transformation digitale.<br>
          grâce à des services professionnels, créatifs et adaptés à leurs besoins.
        </p>
    </div>
  </div>

</div>

    <!-- Slide 3 -->
    <div class="min-w-full h-full relative bg-cover bg-center"
     style="background-image:url('/image/5.jpeg');">

  <!-- Overlay noir transparent -->
  <div class="absolute inset-0 bg-black/60"></div>

  <!-- Contenu -->
  <div class="relative z-10 h-full flex items-center justify-center text-white text-center px-6">
    <p class="text-xl">
          Des solutions sur mesure :<br> communication digitale, gestion d’image, branding, audiovisuel,<br> impression professionnelle et bien plus encore.
        </p>
  </div>

</div>


    <!-- Slide 4 -->

     <div class="min-w-full h-full relative bg-cover bg-center"
     style="background-image:url('/image/12.jpeg');">

  <!-- Overlay noir transparent -->
  <div class="absolute inset-0 bg-black/60"></div>

  <!-- Contenu -->
  <div class="relative z-10 h-full flex items-center justify-center text-white text-center px-6">
     <p class="text-xl font-semibold">
           ADI CHAD : créativité, efficacité et <br>innovation au service de votre performance digitale..
        </p>
      </div>
  </div>

</div>

  </div>
</section>

<!-- ================= CHIFFRES ================= -->
<section class="py-16 bg-gray-100 reveal">
  <div class="max-w-7xl mx-auto grid md:grid-cols-5 gap-8 text-center">

    <div>
      <h3 class="counter text-4xl font-bold text-yellow-500" data-target="2">0</h3>
      <p>Ans d’expérience</p>
    </div>

    <div>
      <h3 class="counter text-4xl font-bold text-yellow-500" data-target="600">0</h3>
      <p>Clients & projets</p>
    </div>

    <div>
      <h3 class="counter text-4xl font-bold text-yellow-500" data-target="10">0</h3>
      <p>Insertion (%)</p>
    </div>

    <div>
      <h3 class="counter text-4xl font-bold text-yellow-500" data-target="15">0</h3>
      <p>Partenaires</p>
    </div>

    <div>
      <h3 class="counter text-4xl font-bold text-yellow-500" data-target="4">0</h3>
      <p>Distinctions</p>
    </div>

  </div>
</section>

<!-- ================= A PROPOS ================= -->
<section id="apropos" class="py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4 grid md:grid-cols-2 gap-12 items-start">

    <!-- COLONNE GAUCHE (IMAGES desktop) -->
    <div class="hidden md:flex flex-col space-y-8">

      <img src="/image/7.jpeg"
           alt="ADI CHAD"
           class="w-full rounded-lg shadow-lg object-cover">

      <img src="/image/4.jpeg"
           alt="Objectif ADI CHAD"
           class="w-full rounded-lg shadow-lg object-cover">
    </div>

    <!-- COLONNE DROITE (TEXTE + images mobile) -->
    <div>

      <!-- QUI SOMMES-NOUS -->
      <h2 class="text-4xl font-bold text-blue-900 mb-6 relative inline-block">
        Qui sommes-nous
        <span class="block w-16 h-1 bg-blue-900 mt-2"></span>
      </h2>

      <p class="text-gray-700 leading-relaxed mb-6">
       ADI CHAD est une agence professionnelle de communication digitale, spécialisée dans l’impression
        de supports de communication, la création de contenus visuels et le développement de solutions
        numériques..
      </p>

      <!-- IMAGE 1 MOBILE -->
      <img src="/image/7.jpeg"
           alt="ADI CHAD"
           class="w-full rounded-lg shadow-lg object-cover mb-8 md:hidden aspect-[4/3] object-cover">

      <!-- OBJECTIF -->
      <h3 class="font-bold text-lg mb-2">Notre objectif</h3>
      <p class="text-gray-700 leading-relaxed mb-6">
        Renforcer l’impact et la notoriété de nos clients en proposant des
        solutions de communication efficaces, créatives et durables.
      </p>

      <!-- IMAGE 2 MOBILE -->
      <img src="/image/4.jpeg"
           alt="Objectif ADI CHAD"
           class="w-full rounded-lg shadow-lg object-cover mb-8 md:hidden aspect-[4/3] object-cover">

      <!-- MISSION -->
      <h3 class="font-bold text-lg mb-2">Notre mission</h3>
      <p class="text-gray-700 leading-relaxed mb-6">
       Renforcer l’impact et la notoriété de nos clients en proposant des solutions de communication efficaces, créatives et durables.
      </p>

      <!-- EXPERTISE -->
      <h3 class="font-bold text-lg mb-3">Notre expertise</h3>
      <ul class="list-disc list-inside text-gray-700 space-y-1 mb-8">
        <li>Communication digitale</li>
        <li>Impression tous supports</li>
        <li>Production audiovisuelle</li>
        <li>Maintenance informatique</li>
        <li>EdTech & formation</li>
      </ul>

    <!-- BOUTON -->
<button onclick="openGallery2()"
   class="inline-block bg-blue-900 hover:bg-yellow-500
          text-white font-semibold px-8 py-3 rounded transition duration-300">
  Voir Galerie
</button>

    </div>
  </div>
</section>



<!-- ================= SERVICES ================= -->
<section id="services" class="py-16 bg-gray-100 reveal">
  <h2 class="text-center text-3xl font-bold text-primary mb-12">Nos Services</h2>
  <div class="max-w-7xl mx-auto grid md:grid-cols-3 gap-8 px-4">

   <div class="bg-white p-6 rounded shadow reveal-up">
      <i class="fas fa-bullhorn text-yellow-500 text-3xl"></i>
      <h3 class="font-bold mt-4">Marketing Digital</h3>
      <p>Gestion réseaux sociaux, campagnes publicitaires, branding.</p>
    </div>

    <div class="bg-white p-6 rounded shadow reveal-up">
      <i class="fas fa-laptop-code text-yellow-500 text-3xl"></i>
      <h3 class="font-bold mt-4">Création de Sites Web</h3>
      <p>Sites vitrine, e-commerce, maintenance.</p>
    </div>

    <div class="bg-white p-6 rounded shadow reveal-up">
      <i class="fas fa-palette text-yellow-500 text-3xl"></i>
      <h3 class="font-bold mt-4">Conception Graphique</h3>
      <p>Logos, affiches, identité visuelle.</p>
    </div>

    <div class="bg-white p-6 rounded shadow reveal-up">
      <i class="fas fa-video text-yellow-500 text-3xl"></i>
      <h3 class="font-bold mt-4">Production Audiovisuelle</h3>
      <p>Tournage, montage, documentaires.</p>
    </div>

   <div class="bg-white p-6 rounded shadow reveal-up">
      <i class="fas fa-print text-yellow-500 text-3xl"></i>
      <h3 class="font-bold mt-4">Impression Tous Supports</h3>
      <p>Flyers, brochures, bannières.</p>
    </div>

    <div class="bg-white p-6 rounded shadow reveal-up">
      <i class="fas fa-graduation-cap text-yellow-500 text-3xl"></i>
      <h3 class="font-bold mt-4">Centre de Formation</h3>
      <p>Formations numériques & audiovisuel.</p>
    </div>

    <div class="bg-white p-6 rounded shadow reveal-up">
  <i class="fas fa-tools text-yellow-500 text-3xl"></i>
  <h3 class="font-bold mt-4">Maintenance informatique</h3>
  <p>Assistance, réparation et maintenance des systèmes informatiques.</p>
</div>
<div class="bg-white p-6 rounded shadow reveal-up">
  <i class="fas fa-paint-roller text-yellow-500 text-3xl"></i>
  <h3 class="font-bold mt-4">Décoration </h3>
  <p>Habillage visuel, décoration événementielle</p>
</div>


  </div>
</section>

<!-- ================= REALISATIONS ================= -->
<section id="realisations" class="py-16 bg-white">
  <div class="max-w-7xl mx-auto px-3 sm:px-4">

    <!-- Titre -->
    <div class="text-center mb-12">
      <h2 class="text-3xl font-bold text-primary mb-4">Nos Réalisations</h2>
      <p class="text-gray-600 max-w-2xl mx-auto">
        Découvrez quelques projets réalisés par ADI CHAD.
      </p>
    </div>

    <!-- Grille -->
   <!-- Grille 1 -->
<div class="grid sm:grid-cols-1 md:grid-cols-3 gap-6 mb-12">
  <!-- Image 1 -->
 <div class="group reveal-side reveal-left relative overflow-hidden rounded-lg shadow-lg cursor-pointer"
     onclick="openModal(this)"
     data-images="/image/6.jpeg,/image/mi.jpeg,/image/m2.jpeg,/image/m3.jpeg,/image/m4.jpeg">

  <img src="/image/1.jpeg"
       class="
  w-full
  aspect-square
  sm:aspect-auto
  sm:h-56
  md:h-64
  lg:h-72
  object-cover
  transition-transform
  duration-500
  group-hover:scale-110
">

  <div class="absolute inset-0 bg-purple-800/70 flex items-center justify-center
              opacity-0 group-hover:opacity-100 transition text-white text-3xl">
    👁️
  </div>
</div>


  <!-- Image 2 -->
 <div class="group reveal-side reveal-right relative overflow-hidden rounded-lg shadow-lg cursor-pointer"
     onclick="openModal(this)"
     data-images="/image/cap1.png,/image/cap2.png,/image/cap3.png,/image/cap4.png">

  <img src="/image/w.jpeg"
        class="
  w-full
  aspect-square
  sm:aspect-auto
  sm:h-56
  md:h-64
  lg:h-72
  object-cover
  transition-transform
  duration-500
  group-hover:scale-110
">

  <div class="absolute inset-0 bg-purple-800/70 flex items-center justify-center
              opacity-0 group-hover:opacity-100 transition text-white text-3xl">
    👁️
  </div>
</div>


  <!-- Image 3 -->
 <div class="group reveal-side reveal-left relative overflow-hidden rounded-lg shadow-lg cursor-pointer"
     onclick="openModal(this)"
     data-images="/image/cc.jpeg,/image/c2.jpeg,/image/c1.jpeg,/image/c5.jpeg,/image/i4.jpeg,/image/i5.jpeg,/image/c4.jpeg,/image/c7.jpeg,
     /image/i17.jpeg,/image/i18.jpeg,/image/B1.jpeg
     ,/image/B2.jpeg,/image/B2.jpeg,/image/B4.jpeg,/image/B5.jpeg
     ,/image/B6.jpeg,/image/B7.jpeg,/image/B8.jpeg,/image/B9.jpeg,/image/B10.jpeg">

  <img src="/image/c.jpeg"
       class="
  w-full
  aspect-square
  sm:aspect-auto
  sm:h-56
  md:h-64
  lg:h-72
  object-cover
  transition-transform
  duration-500
  group-hover:scale-110
">

  <div class="absolute inset-0 bg-purple-800/70 flex items-center justify-center
              opacity-0 group-hover:opacity-100 transition text-white text-3xl">
    👁️
  </div>
</div>

</div>

<!-- Grille 2 -->
<div class="grid sm:grid-cols-1 md:grid-cols-3 gap-6 mt-12">
  <!-- Image 4 -->
 <div class="group reveal-side reveal-right relative overflow-hidden rounded-lg shadow-lg cursor-pointer"
     onclick="openModal(this)"
     data-images="/image/pp2.jpeg,/image/p3.jpeg,/image/a1.jpeg,/image/pp1.jpeg">

  <img src="/image/pp2.jpeg"
        class="
  w-full
  aspect-square
  sm:aspect-auto
  sm:h-56
  md:h-64
  lg:h-72
  object-cover
  transition-transform
  duration-500
  group-hover:scale-110
">

  <div class="absolute inset-0 bg-purple-800/70 flex items-center justify-center
              opacity-0 group-hover:opacity-100 transition text-white text-3xl">
    👁️
  </div>
</div>


  <!-- Image 5 -->
  <div class="group reveal-side reveal-left relative overflow-hidden rounded-lg shadow-lg cursor-pointer"
     onclick="openModal(this)"
     data-images="/image/i2.jpeg,/image/i3.jpeg,/image/i4.jpeg,/image/i5.jpeg,/image/i10.jpeg,/image/i11.jpeg,/image/i12.jpeg,/image/i14.jpeg
     ,/image/i15.jpeg,/image/i16.jpeg">

  <img src="/image/cc.jpeg"
       class="
  w-full
  aspect-square
  sm:aspect-auto
  sm:h-56
  md:h-64
  lg:h-72
  object-cover
  transition-transform
  duration-500
  group-hover:scale-110
">

  <div class="absolute inset-0 bg-purple-800/70 flex items-center justify-center
              opacity-0 group-hover:opacity-100 transition text-white text-3xl">
    👁️
  </div>
</div>


  <!-- Image 6 -->
 <div class="group reveal-side reveal-right relative overflow-hidden rounded-lg shadow-lg cursor-pointer"
     onclick="openModal(this)"
     data-images="/image/f1.jpeg,/image/f2.jpeg,/image/f3.jpeg,/image/f4.jpeg,/image/f6.jpeg,/image/f7.jpeg,/image/f8.jpeg,/image/f9.jpeg
     ,/image/z1.jpeg,/image/z2.jpeg,/image/z3.jpeg,/image/z4.jpeg,/image/z5.jpeg">

  <img src="/image/f5.jpeg"
        class="
  w-full
  aspect-square
  sm:aspect-auto
  sm:h-56
  md:h-64
  lg:h-72
  object-cover
  transition-transform
  duration-500
  group-hover:scale-110
">

  <div class="absolute inset-0 bg-purple-800/70 flex items-center justify-center
              opacity-0 group-hover:opacity-100 transition text-white text-3xl">
    👁️
  </div>
</div>

</div>

  </div>
</section>


<!-- ================= ACTIVITES ================= -->
<section id="activites" class="py-20 bg-primary reveal">
  <div class="max-w-7xl mx-auto px-4">

    <!-- Titre -->
    <div class="text-center mb-12">
      <h2 class="text-3xl font-bold text-white mb-4">Nos Activités</h2>
      <p class="text-gray-200 max-w-2xl mx-auto">
        ADI CHAD mène des actions à fort impact dans le domaine du numérique,
        de l’audiovisuel et de la formation professionnelle.
      </p>
    </div>
<!-- Slider -->
<div class="relative">

  <!-- Conteneur scroll -->
  <div
    id="activites-slider"
    class="
      flex gap-6 overflow-x-auto scroll-smooth no-scrollbar
      px-2
    "
  >
 <div class="activity-card">
 <!-- image 1 -->
  <!-- Images en arrière-plan -->
  <div class="image-rotator">
    <img src="/image/d3.jpeg" class="active" alt="">
    <img src="/image/d1.jpeg" alt="">
    <img src="/image/d2.jpeg" alt="">
    <img src="/image/d4.jpeg" alt="">
  </div>

  <!-- Overlay -->
  <div class="overlay">
    <span class="date">2026</span>
    <h3>Projet TchadSearh</h3>
    <p>
     Présentation du projet TchadSearch par AdiTChad dans le festival dary Tech
    </p>
  </div>

</div>


    <div class="activity-card">
 <!-- image 1 -->
  <!-- Images en arrière-plan -->
  <div class="image-rotator">
    <img src="/image/A1.jpeg" class="active" alt="">
    <img src="/image/A2.jpeg" alt="">
  </div>

  <!-- Overlay -->
  <div class="overlay">
    <span class="date">2025</span>
    <h3>ADI Chad</h3>
    <p>
      Attestation de reconnaissance pour son soutien au service
      communication pour l'association action pour l'eduction et de la promotion de la femme-
      AEPT-TCHAD
    </p>
  </div>

</div>
<!-- image 5 -->
  <div class="activity-card">

  <!-- Images en arrière-plan -->
  <div class="image-rotator">
  <img src="/image/A12.jpeg" class="active" alt="">
    <img src="/image/A13.jpeg" alt="">
    <img src="/image/A14.jpeg" alt="">
  </div>

  <!-- Overlay -->
  <div class="overlay">
    <span class="date">Du 13 au 15 octobre 2025</span>
    <h3>Exposition ADI CHAD au Forum Youth Connekt Sahel</h3>
  </div>

</div>
       <!-- image 2 -->
  <div class="activity-card">

  <!-- Images en arrière-plan -->
  <div class="image-rotator">
    <img src="/image/A4.jpeg" class="active" alt="">
    <img src="/image/A3.jpeg" alt="">
  </div>

  <!-- Overlay -->
  <div class="overlay">
    {{--  <span class="date">2025</span>  --}}
    <h3>signature de convention </h3>
    <p>
     Signature de conventions entre l’Association tchadienne pour l’Épanouissement de la Femme et de
     l’Enfant (ATEFE) et ADI CHAD pour apporter nos services principaux à l’association.
    </p>
  </div>

</div>
 <!-- image 3 -->
  <div class="activity-card">

  <!-- Images en arrière-plan -->
  <div class="image-rotator">
    <img src="/image/A6.jpeg" class="active" alt="">
    <img src="/image/A7.jpeg" alt="">
    <img src="/image/A8.jpeg" alt="">
  </div>

  <!-- Overlay -->
  <div class="overlay">
    {{--  <span class="date">2025</span>  --}}
    <h3>Journée de l’Entrepreneuriat Féminin</h3>
    <p>
    Formation dédiée aux femmes à l’occasion de la Journée internationale des femmes, en mars 2025, pour 100 jeunes femmes dans les métiers du numérique et de l’audiovisuel.
    </p>
  </div>

</div>
     <!-- image 4 -->
  <div class="activity-card">

  <!-- Images en arrière-plan -->
  <div class="image-rotator">
    <img src="/image/a2.jpeg" class="active" alt="">
    <img src="/image/A10.jpeg" alt="">
    <img src="/image/A11.jpeg" alt="">
  </div>

  <!-- Overlay -->
  <div class="overlay">
    {{--  <span class="date">2025</span>  --}}
    <h3>Journée de l’Entrepreneuriat Féminin</h3>
    <p>
      Sensibilisation et formation aux métiers du numérique pour les jeunes femmes.
    </p>
  </div>

</div>

 <!-- image 6 -->
  <div class="activity-card">

  <!-- Images en arrière-plan -->
  <div class="image-rotator">
    <img src="/image/aa1.jpg" class="active" alt="">
    <img src="/image/aa2.jpg" alt="">
    <img src="/image/aa3.jpg" alt="">
    <img src="/image/aa4.jpg" alt="">
  </div>

  <!-- Overlay -->
  <div class="overlay">
    <span class="date">Du 20 au 4 janvier 2026</span>
    <h3>Le 2e Exposition d ADI Chad au festival Dary Tech </h3>
    <p>
Le Festival Dary est donc une fête de la culture qui contribue à la valorisation et à la promotion de l’héritage tchadien.
    </p>
  </div>

</div>


  <!-- Flèches -->
  <button onclick="scrollActivites(-1)"
    class="nav-btn left-2">
    ‹
  </button>

  <button onclick="scrollActivites(1)"
    class="nav-btn right-2">
    ›
  </button>

</div>


    </div>
</section>


<!-- ================= PARTENAIRES ================= -->
<section id="partenaires" class="py-20 bg-white reveal">
  <div class="max-w-7xl mx-auto px-4">

    <!-- Titre -->
    <div class="text-center mb-14">
      <h2 class="text-4xl font-bold text-primary mb-4">
        Nos Partenaires
      </h2>
     <p class="text-gray-600 max-w-2xl mx-auto">
        ADI CHAD collabore avec des institutions, associations et entreprises
        locales et internationales.
      </p>
    </div>

    <!-- Logos -->
    <!-- Défilement horizontal -->
<div class="overflow-hidden relative">
  <div class="flex items-center gap-8 animate-scroll whitespace-nowrap">

    <div class="bg-white rounded-xl shadow flex items-center justify-center p-6 min-w-[180px]">
      <img src="/image/X1.jpeg" alt="Partenaire 1" class="h-12 object-contain">
    </div>

    <div class="bg-white rounded-xl shadow flex items-center justify-center p-6 min-w-[180px]">
      <img src="/image/X2.jpeg" alt="Partenaire 1" class="h-12 object-contain">
    </div>



    <!-- Logo 1 -->
    <div class="bg-white rounded-xl shadow flex items-center justify-center p-6 min-w-[180px]">
      <img src="/image/p1.jpg" alt="Partenaire 1" class="h-12 object-contain">
    </div>

    <!-- Logo 2 -->
    <div class="bg-white rounded-xl shadow flex items-center justify-center p-6 min-w-[180px]">
      <img src="/image/p2.jpg" alt="Partenaire 2" class="h-12 object-contain">
    </div>

    <!-- Logo 3 -->
    <div class="bg-white rounded-xl shadow flex items-center justify-center p-6 min-w-[180px]">
      <img src="/image/P3.jpg" alt="Partenaire 3" class="h-12 object-contain">
    </div>

    <!-- Logo 4 -->
    <div class="bg-white rounded-xl shadow flex items-center justify-center p-6 min-w-[180px]">
      <img src="/image/p4.jpg" alt="Partenaire 4" class="h-12 object-contain">
    </div>

    <!-- Logo 5 -->
    <div class="bg-white rounded-xl shadow flex items-center justify-center p-6 min-w-[180px]">
      <img src="/image/p5.jpg" alt="Partenaire 5" class="h-12 object-contain">
    </div>

    <!-- Logo 6 -->
    <div class="bg-white rounded-xl shadow flex items-center justify-center p-6 min-w-[180px]">
      <img src="/image/p6.jpg" alt="Partenaire 6" class="h-12 object-contain">
    </div>

    <!-- Logo 7 -->
    <div class="bg-white rounded-xl shadow flex items-center justify-center p-6 min-w-[180px]">
      <img src="/image/p7.jpg" alt="Partenaire 7" class="h-12 object-contain">
    </div>

    <!-- Duplication pour effet infini -->
    <div class="bg-white rounded-xl shadow flex items-center justify-center p-6 min-w-[180px]">
      <img src="/image/p1.jpg" alt="Partenaire 1" class="h-12 object-contain">
    </div>

    <div class="bg-white rounded-xl shadow flex items-center justify-center p-6 min-w-[180px]">
      <img src="/image/X.jpeg" alt="Partenaire 1" class="h-12 object-contain">
    </div>


  </div>
</div>


  </div>
</section>
<section class="py-20 px-6">
  <div class="max-w-7xl mx-auto bg-gradient-to-r from-blue-900 to-blue-900
              rounded-2xl text-center text-white py-16 px-6">

    <h2 class="text-3xl md:text-4xl font-bold">
      Devenez Partenaire
    </h2>

    <p class="mt-4 text-lg max-w-3xl mx-auto">
      Rejoignez-nous dans notre mission d'accompagner la jeunesse tchadienne
      vers l'excellence digitale
    </p>

    <a href="{{ url('/partenaire') }}"
       class="inline-block mt-8 bg-yellow-500 hover:bg-yellow-500
              text-white font-semibold px-8 py-4 rounded-full transition">
      Nous Contacter
    </a>

  </div>
</section>


<!-- ================= FOOTER ================= -->
<!-- FOOTER -->
<footer id="contact" class="bg-blue-900 text-gray-300 py-12">
  <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-10">

    <!-- Logo & Description -->
        <div class="hero-content">
        <h1 class="text-2xl font-bold text-yellow-500 mb-3">ADI Chad</h1>
        <p class="slogan">Audace • Innovation • Excellence</p>
        <p class="desc"> AU SERVICE DE VOTRE CONFORT DIGITAL</p>

        <!-- Carte sous ADI Chad -->
        <div class="map-container">
          <iframe
  src="https://www.google.com/maps?q=N'Djamena%2C%20Tchad&output=embed"
  width="100%"
  height="100%"
  style="border:0;"
  allowfullscreen=""
  loading="lazy"
  referrerpolicy="no-referrer-when-downgrade">
</iframe>

        </div>
    </div>
    <!-- Liens rapides -->
    <div>
      <h4 class="text-lg font-semibold text-yellow-500 mb-4">
        Liens Rapides
      </h4>
      <ul class="space-y-2">
        <li><a href="#accueil" class="hover:text-yelloww-500">Accueil</a></li>
        <li><a href="#apropos" class="hover:text-yellow-500">À propos</a></li>
        <li><a href="#formations" class="hover:text-yellow-500">Formations</a></li>
        <li><a href="#activites" class="hover:text-yellow-500">Activités</a></li>
        <li><a href="#partenaires" class="hover:text-yellow-500">Partenaires</a></li>
      </ul>
    </div>

    <!-- Contact & Réseaux -->
    <div>
      <h4 class="text-lg font-semibold text-yellow-500 mb-4">
        Suivez-nous
      </h4>

      <!-- Réseaux sociaux -->
      <!-- Contact -->
<div>
  <h4 class="text-lg font-semibold text-yellow-500 mb-4">
    Contact
  </h4>

  <!-- Emails -->
  <div class="flex items-start gap-3 mb-3">
    <i class="fas fa-envelope text-yellow-500 mt-1"></i>
    <div class="text-sm">
      <a href="adichad235@gmail.com " class="hover:text-yellow-500 block">
        adichad235@gmail.com
      </a>
    </div>
  </div>

  <!-- Téléphone -->
  <div class="flex items-center gap-3 mb-3">
    <i class="fas fa-phone text-yellow-500"></i>
    <a href="tel:+23569290771" class="text-sm hover:text-yellow-500">
      +235 69 29 07 71
    </a>
  </div>

  <!-- WhatsApp -->
  <div class="flex items-start gap-3 mb-6">
    <i class="fab fa-whatsapp text-yellow-500 mt-1"></i>
    <div class="text-sm">
      <span class="block">WhatsApp :</span>
      <a href="https://wa.me/23594579194" target="_blank" class="hover:text-yellow-500">
        +235 94 57 91 94
      </a>
    </div>
  </div>

  <!-- Réseaux sociaux -->
  <h4 class="text-white font-semibold mb-3">Suivez-nous</h4>
  <div class="flex gap-3">
    <a href="https://www.facebook.com/share/16nYV4RjxD/" target="_blank"
       class="w-10 h-10 flex items-center justify-center rounded-full bg-blue-800 hover:bg-yellow-500 transition">
      <i class="fab fa-facebook-f text-white"></i>
    </a>

    <a href="https://www.linkedin.com/company/adi-chad/" target="_blank"
       class="w-10 h-10 flex items-center justify-center rounded-full bg-blue-800 hover:bg-yellow-500 transition">
      <i class="fab fa-linkedin-in text-white"></i>
    </a>

    <a href="https://www.tiktok.com/@adichad0?_r=1&_t=ZM-92IOkoIB63o" target="_blank"
       class="w-10 h-10 flex items-center justify-center rounded-full bg-blue-800 hover:bg-yellow-500 transition">
      <i class="fab fa-tiktok text-white"></i>
    </a>
  </div>
</div>

    </div>


  </div>

  <!-- Copyright -->
  <div class="border-t border-blue-700 mt-10 pt-4 text-center text-sm">
    © 2025 ADI CHAD — Tous droits réservés
  </div>
</footer>


<!-- ================= JS ================= -->
<script>
// Slider auto
let index = 0;
const slider = document.getElementById('slider');
setInterval(() => {
  index = (index + 1) % 4;
  slider.style.transform = `translateX(-${index * 100}%)`;
}, 5000);

// Counters
const counters = document.querySelectorAll('.counter');
counters.forEach(counter => {
  const update = () => {
    const target = +counter.dataset.target;
    const count = +counter.innerText;
    const inc = target / 100;
    if (count < target) {
      counter.innerText = Math.ceil(count + inc);
      setTimeout(update, 30);
    }
  };
  update();
});
</script>
<script>
const reveals = document.querySelectorAll('.reveal');

function revealOnScroll() {
  reveals.forEach(el => {
    const windowHeight = window.innerHeight;
    const elementTop = el.getBoundingClientRect().top;
    if (elementTop < windowHeight - 100) {
      el.classList.add('active');
    }
  });
}

window.addEventListener('scroll', revealOnScroll);
revealOnScroll();
</script>

<script>
document.addEventListener("DOMContentLoaded", () => {
  const slider = document.getElementById("slider");
  const slides = document.querySelectorAll("#slider > div");
  const next = document.getElementById("next");
  const prev = document.getElementById("prev");

  let index = 0;

  function updateSlider() {
    slider.style.transform = `translateX(-${index * 100}%)`;
  }

  next.addEventListener("click", () => {
    index = (index + 1) % slides.length;
    updateSlider();
  });

  prev.addEventListener("click", () => {
    index = (index - 1 + slides.length) % slides.length;
    updateSlider();
  });
});
</script>


<script>
  const hamburger = document.getElementById("hamburger");
  const mobileMenu = document.getElementById("mobile-menu");

  hamburger.addEventListener("click", () => {
    mobileMenu.classList.toggle("open");
  });

  function closeMenu() {
    mobileMenu.classList.remove("open");
  }
</script>

<!--script de  Modal -->
<script>
let modalImages = [];
let currentIndex = 0;

function openModal(element) {
  const modal = document.getElementById('imageModal');
  const mainImage = document.getElementById('modalMainImage');
  const thumbnails = document.getElementById('modalThumbnails');

  thumbnails.innerHTML = "";

  // Image principale affichée
  const mainSrc = element.querySelector("img").src;

  // Images supplémentaires
  let images = [];
  if (element.dataset.images) {
    images = element.dataset.images.split(",");
  }

  // Ajouter l'image principale automatiquement
  modalImages = [mainSrc, ...images];
  currentIndex = 0;

  mainImage.src = modalImages[currentIndex];

  // Miniatures
  modalImages.forEach((img, index) => {
    const thumb = document.createElement("img");
    thumb.src = img;
    thumb.className =
      "w-16 h-16 object-cover rounded cursor-pointer border hover:border-purple-600";
    thumb.onclick = () => {
      currentIndex = index;
      mainImage.src = modalImages[currentIndex];
    };
    thumbnails.appendChild(thumb);
  });

  // Ajouter les flèches une seule fois
  addArrows();

  modal.classList.remove("hidden");
  modal.classList.add("flex");
}

function closeModal() {
  const modal = document.getElementById('imageModal');
  modal.classList.add("hidden");
  modal.classList.remove("flex");
}

// Navigation
function nextImage() {
  currentIndex = (currentIndex + 1) % modalImages.length;
  document.getElementById('modalMainImage').src = modalImages[currentIndex];
}

function prevImage() {
  currentIndex =
    (currentIndex - 1 + modalImages.length) % modalImages.length;
  document.getElementById('modalMainImage').src = modalImages[currentIndex];
}

// Injection des flèches
function addArrows() {
  const modalContent = document.querySelector("#imageModal > div");

  if (document.getElementById("arrowLeft")) return;

  const leftArrow = document.createElement("button");
  leftArrow.id = "arrowLeft";
  leftArrow.innerHTML = "❮";
  leftArrow.onclick = prevImage;
  leftArrow.className =
    "absolute left-2 top-1/2 -translate-y-1/2 text-3xl bg-black/50 text-white px-3 py-2 rounded-full hover:bg-black";

  const rightArrow = document.createElement("button");
  rightArrow.id = "arrowRight";
  rightArrow.innerHTML = "❯";
  rightArrow.onclick = nextImage;
  rightArrow.className =
    "absolute right-2 top-1/2 -translate-y-1/2 text-3xl bg-black/50 text-white px-3 py-2 rounded-full hover:bg-black";

  modalContent.appendChild(leftArrow);
  modalContent.appendChild(rightArrow);
}
</script>

<script>
document.addEventListener("DOMContentLoaded", () => {

  // LISTE OFFICIELLE DES SERVICES (selon ton code)
  const services = [
    "Marketing Digital",
    "Création de Sites Web",
    "Conception Graphique",
    "Production Audiovisuelle",
    "Impression Tous Supports",
    "Centre de Formation",
    "Maintenance Informatique",
    "Décoration"
  ];

  const items = document.querySelectorAll("#realisations .group");

  items.forEach((item, index) => {
    const label = document.createElement("div");

    label.textContent = services[index] || "";

   label.className = `
  absolute bottom-0 left-0 w-full
  bg-black/60 text-white
  text-xl md:text-2xl font-bold
  text-center py-3
  font-poppins
  pointer-events-none
`;


    item.appendChild(label);
  });

});
</script>


<!-- Modal -->
<!-- MODAL GALERIE -->
<div id="imageModal"
     class="fixed inset-0 bg-black/80 hidden items-center justify-center z-50">

  <div class="relative bg-white rounded-lg max-w-4xl w-full p-4">

    <!-- Bouton fermer -->
    <button onclick="closeModal()"
            class="absolute top-2 right-2 text-2xl text-gray-600 hover:text-red-600">
      ✕
    </button>

    <!-- Image principale -->
    <img id="modalMainImage"
         src=""
         class="w-full h-96 object-contain rounded mb-4">

    <!-- Miniatures -->
    <div id="modalThumbnails"
         class="flex gap-3 justify-center flex-wrap">
    </div>

  </div>
</div>


<script>
  const images = [
    "1.jpeg",
    "2.jpeg",
    "3.jpg"
  ];

  let index = 0;

  const modal = document.getElementById("galleryModal");
  const openBtn = document.getElementById("openBtn");
  const closeBtn = document.getElementById("closeBtn");
  const img = document.getElementById("galleryImage");

  openBtn.onclick = function () {
    modal.style.display = "flex";
    img.src = images[index];
  };

  closeBtn.onclick = function () {
    modal.style.display = "none";
  };
</script>
<!-- ===== MODAL GALERIE ===== -->
<div id="galleryModal"
     style="
       display:none;
       position:fixed;
       inset:0;
       background:rgba(0,0,0,0.8);
       z-index:99999;
       align-items:center;
       justify-content:center;
     ">

  <div style="background:white;padding:20px;border-radius:10px;
              max-width:600px;width:90%;position:relative;">

    <!-- Bouton fermer -->
    <button onclick="closeGallery()"
            style="position:absolute;top:10px;right:10px;
                   font-size:22px;border:none;background:none;cursor:pointer;">
      ✕
    </button>

    <!-- Flèche gauche -->
    <button onclick="prevImage()"
            style="position:absolute;left:10px;top:50%;
                   transform:translateY(-50%);
                   background:rgba(0,0,0,0.6);
                   color:white;
                   border:none;
                   font-size:28px;
                   padding:5px 12px;
                   border-radius:50%;
                   cursor:pointer;">
      ‹
    </button>

    <!-- Image  pour apropos-->
    <img id="galleryImage"
         src="/images/img1.jpg"
         style="width:100%;height:300px;object-fit:cover;border-radius:8px;">

    <!-- Flèche droite -->
    <button onclick="nextImage()"
            style="position:absolute;right:10px;top:50%;
                   transform:translateY(-50%);
                   background:rgba(0,0,0,0.6);
                   color:white;
                   border:none;
                   font-size:28px;
                   padding:5px 12px;
                   border-radius:50%;
                   cursor:pointer;">
      ›
    </button>

  </div>
</div>

<script>
  function openGallery() {
    const modal = document.getElementById("galleryModal");
    modal.style.display = "flex";
  }

  function closeGallery() {
    const modal = document.getElementById("galleryModal");
    modal.style.display = "none";
  }
</script>

<script>
tailwind.config = {
  theme: {
    extend: {
      fontFamily: {
        poppins: ['Poppins', 'sans-serif'],
      },
      colors: {
        primary: '#060E54',
        accent: '#F59E0B'
      }
    }
  }
}
</script>

<script>
document.addEventListener("scroll", () => {
  const reveals = document.querySelectorAll(".reveal-side");

  reveals.forEach(el => {
    const windowHeight = window.innerHeight;
    const elementTop = el.getBoundingClientRect().top;
    const elementVisible = 120;

    if (elementTop < windowHeight - elementVisible) {
      el.classList.add("active");
    }
  });
});
</script>

<script>
function scrollActivites(direction) {
  const slider = document.getElementById("activites-slider");
  const cardWidth = slider.firstElementChild.offsetWidth + 16; // gap
  slider.scrollBy({
    left: direction * cardWidth,
    behavior: "smooth"
  });
}
</script>
<script>
const slider = document.getElementById("activites-slider");
const cards = slider.querySelectorAll(".activity-card");

let currentIndex = 0;

/* Aller exactement à une carte */
function scrollToCard(index) {
  if (index < 0) index = cards.length - 1;
  if (index >= cards.length) index = 0;

  const card = cards[index];
  const sliderRect = slider.getBoundingClientRect();
  const cardRect = card.getBoundingClientRect();

  const scrollLeft =
    slider.scrollLeft + (cardRect.left - sliderRect.left);

  slider.scrollTo({
    left: scrollLeft,
    behavior: "smooth"
  });

  currentIndex = index;
}

/* Boutons gauche / droite */
function scrollActivites(direction) {
  scrollToCard(currentIndex + direction);
}

/* Auto scroll */
let autoScroll = setInterval(() => {
  scrollActivites(1);
}, 4000);

/* Pause au survol */
slider.addEventListener("mouseenter", () => clearInterval(autoScroll));
slider.addEventListener("mouseleave", () => {
  autoScroll = setInterval(() => scrollActivites(1), 4000);
});

/* Synchroniser l’index après swipe manuel */
slider.addEventListener("scroll", () => {
  let closestIndex = 0;
  let closestDistance = Infinity;

  cards.forEach((card, index) => {
    const distance = Math.abs(
      card.getBoundingClientRect().left -
      slider.getBoundingClientRect().left
    );

    if (distance < closestDistance) {
      closestDistance = distance;
      closestIndex = index;
    }
  });

  currentIndex = closestIndex;
});
</script>

<script>
/* Rotation automatique des images par carte */
document.querySelectorAll(".image-rotator").forEach(rotator => {
  const images = rotator.querySelectorAll("img");
  let index = 0;

  setInterval(() => {
    images[index].classList.remove("active");
    index = (index + 1) % images.length;
    images[index].classList.add("active");
  }, 3500); // vitesse de changement d’image
});
</script>
<script>
document.addEventListener("DOMContentLoaded", () => {
  const reveals = document.querySelectorAll(".reveal-up");

  function revealOnScroll() {
    reveals.forEach((el, index) => {
      const windowHeight = window.innerHeight;
      const elementTop = el.getBoundingClientRect().top;
      const visiblePoint = 120;

      if (elementTop < windowHeight - visiblePoint) {
        el.style.transitionDelay = `${index * 0.12}s`; // effet cascade
        el.classList.add("active");
      }
    });
  }

  window.addEventListener("scroll", revealOnScroll);
  revealOnScroll(); // au chargement
});
</script>
<!-- MODAL GALERIE -->
<div id="galleryModal2"
     class="fixed inset-0 bg-black/80 hidden items-center justify-center z-50">

  <div class="relative bg-white rounded-lg max-w-4xl w-full p-4">

    <button onclick="closeGallery2()"
            class="absolute top-2 right-2 text-2xl text-gray-600 hover:text-red-600">✕</button>

    <img id="mainImage2" src="/5.jpeg"
         class="w-full h-[400px] object-contain rounded">

    <button onclick="prevImage2()"
            class="absolute left-2 top-1/2 -translate-y-1/2 bg-black/50 text-white px-3 py-2 rounded-full">❮</button>

    <button onclick="nextImage2()"
            class="absolute right-2 top-1/2 -translate-y-1/2 bg-black/50 text-white px-3 py-2 rounded-full">❯</button>

    <div class="flex justify-center gap-3 mt-4">
        <img src="/v1.jpeg" onclick="changeImage2(0)" class="w-20 h-16 object-cover cursor-pointer border">
      <img src="/V5.jpeg" onclick="changeImage2(0)" class="w-20 h-16 object-cover cursor-pointer border">
      <img src="/V6.jpeg" onclick="changeImage2(1)" class="w-20 h-16 object-cover cursor-pointer border">
      <img src="/V7.jpeg" onclick="changeImage2(2)" class="w-20 h-16 object-cover cursor-pointer border">
      <img src="/V8.jpeg" onclick="changeImage2(3)" class="w-20 h-16 object-cover cursor-pointer border">
       <img src="/T2.jpeg" onclick="changeImage2(3)" class="w-20 h-16 object-cover cursor-pointer border">
        <img src="/T3.jpeg" onclick="changeImage2(3)" class="w-20 h-16 object-cover cursor-pointer border">
         <img src="/T4.jpeg" onclick="changeImage2(3)" class="w-20 h-16 object-cover cursor-pointer border">
    </div>
  </div>
</div>

<script>
const images2 = ["/v1.jpeg","/V5.jpeg","/V6.jpeg","/V7.jpeg","/8.jpeg","/V4.jpeg","/V3.jpeg","V2.jpeg",
"V9.jpeg","V10.jpeg","V11.jpeg","V12.jpeg","V13.jpeg","V14.jpeg","T2.jpeg","T3.jpeg","T4.jpeg"];
let index2 = 0;

function openGallery2(){
  document.getElementById("galleryModal2").style.display = "flex";
  showImage2();
}

function closeGallery2(){
  document.getElementById("galleryModal2").style.display = "none";
}

function showImage2(){
  document.getElementById("mainImage2").src = images2[index2];
}

function nextImage2(){
  index2 = (index2 + 1) % images2.length;
  showImage2();
}

function prevImage2(){
  index2 = (index2 - 1 + images2.length) % images2.length;
  showImage2();
}

function changeImage2(i){
  index2 = i;
  showImage2();
}
</script>



</body>
</html>
