<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdn.tailwindcss.com"></script>
  <title>Rôle des images</title>
  <style>
   /* ================= HEADER / NAVBAR ================= */

/* Barre principale du header */
.header {
  background-color: #ffffff;              /* Fond blanc */
  border-bottom: 1px solid #e5e7eb;        /* Ligne fine en bas */
  position: sticky;                        /* Header fixe en haut au scroll */
  top: 0;
  z-index: 100;
}

/* Conteneur interne du header */
.header-container {
  max-width: 1200px;                       /* Largeur max */
  margin: 0 auto;                          /* Centrage horizontal */
  padding: 15px 20px;                      /* Espaces internes */
  display: flex;                           /* Alignement horizontal */
  align-items: center;                     /* Centrage vertical */
  justify-content: space-between;          /* Logo à gauche, menu à droite */
}

/* ================= LOGO ================= */

/* Bloc logo */
.logo {
  display: flex;
  align-items: center;
  gap: 10px;                               /* Espace entre image et texte */
}

/* Image du logo */
.logo img {
  height: 40px;                            /* Taille du logo */
  width: auto;
}

/* Texte éventuel du logo */
.logo span {
  font-size: 18px;
  font-weight: 700;
  color: #1f3c88;                          /* Bleu ADI */
}

/* ================= MENU DESKTOP ================= */

/* Liste du menu */
.nav-menu {
  display: flex;                           /* Menu horizontal */
  gap: 30px;                               /* Espacement entre liens */
  list-style: none;                        /* Suppression des puces */
  margin: 0;
  padding: 0;
}

/* Liens du menu */
.nav-menu a {
  text-decoration: none;                   /* Pas de soulignement */
  font-size: 16px;
  font-weight: 500;
  color: #1f2937;                          /* Gris foncé */
  transition: color 0.3s ease;             /* Animation douce */
}

/* Effet hover sur les liens */
.nav-menu a:hover {
  color: #1f3c88;                          /* Bleu au survol */
}

/* ================= RESPONSIVE ================= */

/* Sur mobile */
@media (max-width: 768px) {
  .nav-menu {
    display: none;                         /* Cache le menu desktop */
  }
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
/* FOOTER - styles personnalisés */

/* ================= FOOTER GENERAL ================= */
#contact {
  background-color: #1e3a8a; /* Bleu foncé */
  color: #d1d5db;
  padding: 60px 20px 0;
  font-family: Arial, Helvetica, sans-serif;
}

#contact .container {
  max-width: 1200px;
  margin: auto;
  display: grid;
  grid-template-columns: 1.2fr 1fr 1fr;
  gap: 50px;
}

/* ================= TITRES ================= */
#contact h1 {
  color: #facc15;
  font-size: 26px;
  margin-bottom: 8px;
}

#contact h4 {
  color: #facc15;
  font-size: 18px;
  margin-bottom: 15px;
}

/* ================= TEXTE ================= */
.slogan {
  font-weight: bold;
  margin-bottom: 4px;
}

.desc {
  font-size: 13px;
  margin-bottom: 12px;
}

/* ================= MAP ================= */
.map-container {
  width: 100%;
  height: 170px;
  border-radius: 10px;
  overflow: hidden;
  border: 2px solid #facc15;
}

.map-container iframe {
  width: 100%;
  height: 100%;
  border: none;
}

/* ================= LIENS RAPIDES ================= */
#contact ul {
  list-style: none;
  padding: 0;
}

#contact ul li {
  margin-bottom: 10px;
}

#contact ul li a {
  color: #e5e7eb;
  text-decoration: none;
  transition: color 0.3s ease, padding-left 0.3s ease;
}

#contact ul li a:hover {
  color: #facc15;
  padding-left: 6px;
}

/* ================= CONTACT ================= */
.contact-item {
  display: flex;
  align-items: center;
  gap: 10px;
  margin-bottom: 12px;
  font-size: 14px;
}

.contact-item i {
  color: #facc15;
  font-size: 16px;
}

.contact-item a {
  color: #e5e7eb;
  text-decoration: none;
}

.contact-item a:hover {
  color: #facc15;
}

/* ================= RESEAUX SOCIAUX ================= */
.social {
  display: flex;
  gap: 12px;
  margin-top: 15px;
}

.social a {
  width: 40px;
  height: 40px;
  background: #1e40af;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  font-size: 18px;
  transition: background 0.3s ease, transform 0.3s ease;
}

.social a:hover {
  background: #facc15;
  color: #1e3a8a;
  transform: scale(1.1);
}

/* ================= COPYRIGHT ================= */
.footer-bottom {
  border-top: 1px solid #3b82f6;
  margin-top: 40px;
  padding: 15px 0;
  text-align: center;
  font-size: 14px;
  color: #e5e7eb;
}

/* ================= RESPONSIVE ================= */
@media (max-width: 900px) {
  #contact .container {
    grid-template-columns: 1fr;
    text-align: center;
  }

  .contact-item {
    justify-content: center;
  }

  .social {
    justify-content: center;
  }
}
.footer{
  background:#1f3c88;
  color:#fff;
  font-family:Arial, sans-serif;
}

.footer-container{
  max-width:1200px;
  margin:auto;
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
  gap:50px;
  padding:60px 20px;
}

.logo{
  color:#ffc107;
  font-size:28px;
}

.slogan{
  font-weight:bold;
  font-size:18px;
  margin:10px 0;
}

.desc{
  font-size:12px;
  opacity:.8;
}

.map{
  width:100%;
  height:200px;
  border:0;
  border-radius:12px;
  margin-top:15px;
}

.footer-col h3{
  color:#ffc107;
  margin-bottom:15px;
}

.footer-col ul{
  list-style:none;
  padding:0;
}

.footer-col ul li{
  margin:10px 0;
}

.footer-col ul li a{
  text-decoration:none;
  color:#fff;
}

.footer-col p{
  margin:12px 0;
}

.follow{
  margin-top:20px;
}

.socials{
  display:flex;
  gap:15px;
}

.socials a{
  width:40px;
  height:40px;
  background:#2d5be3;
  display:flex;
  align-items:center;
  justify-content:center;
  border-radius:50%;
  text-decoration:none;
  color:#fff;
  font-weight:bold;
}

.socials a:hover{
  background:#ffc107;
  color:#000;
}

.copyright{
  text-align:center;
  padding:15px;
  background:#1a2f6d;
  font-size:14px;
}
/* ===== SECTION QUI SOMMES-NOUS ===== */
.about{
  padding:80px 20px;     /* Espacement intérieur : 80px haut/bas, 20px gauche/droite */
  background:#fff;      /* Fond blanc */
}

/* Conteneur principal qui aligne image + texte */
.about-container{
  max-width:1200px;     /* Largeur maximale de la section */
  margin:auto;         /* Centre la section horizontalement */
  display:grid;        /* Utilisation du système GRID */
  grid-template-columns:1fr 1fr; /* Deux colonnes égales (image | texte) */
  gap:60px;            /* Espace entre les deux colonnes */
  align-items:center;  /* Centre verticalement les éléments */
}

/* Image de l’équipe */
.about-image img{
  width:100%;          /* L’image prend toute la largeur de sa colonne */
  border-radius:18px; /* Coins arrondis */
  box-shadow:0 10px 25px rgba(0,0,0,0.2); /* Ombre pour effet professionnel */
}

/* Titre principal "Qui sommes-nous" */
.about-text h1{
  color:#1f3c88;       /* Couleur bleu foncé */
  font-size:42px;     /* Taille du texte */
  margin-bottom:20px; /* Espace sous le titre */
}

/* Sous-titres : Notre objectif / Notre mission */
.about-text h3{
  color:#1f3c88;       /* Même couleur que le titre */
  margin-top:25px;    /* Espace au-dessus */
}

/* Paragraphes de texte */
.about-text p{
  color:#333;         /* Gris foncé pour lecture confortable */
  line-height:1.8;   /* Espacement entre les lignes */
  font-size:16px;    /* Taille normale du texte */
  margin-top:10px;   /* Espace au-dessus de chaque paragraphe */
}

/* ===== VERSION MOBILE ===== */
@media(max-width:900px){
  .about-container{
    grid-template-columns:1fr; /* Une seule colonne (image au-dessus, texte en bas) */
  }
}
/* Galerie d’images */
.about-gallery{
  display:grid;
  grid-template-columns:repeat(2,1fr);
  gap:15px;
}

.about-gallery img{
  width:100%;
  height:160px;
  object-fit:cover;
  border-radius:14px;
  cursor:pointer;
  transition:.4s;
}

/* Effet au survol */
.about-gallery img:hover{
  transform:scale(1.05);
  box-shadow:0 10px 20px rgba(0,0,0,0.3);
}

/* Mobile */
@media(max-width:600px){
  .about-gallery{
    grid-template-columns:1fr;
  }
  .about-gallery img{
    height:200px;
  }
}
.gallery-item{
  position:relative;
  overflow:hidden;
  border-radius:14px;
}

.gallery-item img{
  width:100%;
  height:160px;
  object-fit:cover;
}

/* Filtre bleu au survol */
.gallery-item::after{
  content:"";
  position:absolute;
  inset:0;
  background:rgba(30,60,200,0.55);
  opacity:0;
  transition:.4s;
}

/* Icône œil */
.view-icon{
  position:absolute;
  inset:0;
  display:flex;
  align-items:center;
  justify-content:center;
  font-size:35px;
  color:#fff;
  opacity:0;
  z-index:2;
  transition:.4s;
}

/* Effet hover */
.gallery-item:hover::after,
.gallery-item:hover .view-icon{
  opacity:1;
  cursor:pointer;
}
.img-modal{
  position:fixed;
  inset:0;
  background:rgba(0,0,0,0.9);
  display:none;
  align-items:center;
  justify-content:center;
  z-index:9999;
}

.img-modal img{
  max-width:90%;
  max-height:90%;
  border-radius:12px;
}

.close{
  position:absolute;
  top:30px;
  right:40px;
  font-size:40px;
  color:white;
  cursor:pointer;
}
.gallery-item::after{
  pointer-events: none; /* 👈 LIGNE MAGIQUE */
}
.img-modal {
  position: fixed;
  inset: 0;
  background: rgba(0,0,0,0.9);
  display: none;
  align-items: center;
  justify-content: center;
  z-index: 9999;
}

.img-modal img {
  max-width: 90%;
  max-height: 90%;
  border-radius: 12px;
}

/* Bouton fermer */
.close {
  position: absolute;
  top: 30px;
  right: 40px;
  font-size: 40px;
  color: white;
  cursor: pointer;
}

/* Flèches de navigation */
.nav {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  font-size: 50px;
  color: white;
  cursor: pointer;
  user-select: none;
  padding: 10px;
  background: rgba(0,0,0,0.3);
  border-radius: 50%;
  transition: background 0.3s;
}

.nav:hover {
  background: rgba(0,0,0,0.6);
}

.prev {
  left: 20px;
}

.next {
  right: 20px;
}




  </style>
</head>
<body>
<!-- ================= HEADER ================= -->
<header class="header">
  <div class="header-container">

    <div class="logo">
      <img src="2P1.jpeg" alt="ADI CHAD">
      <!-- <span>ADI CHAD</span> (optionnel) -->
    </div>

    <ul class="nav-menu">
      <li><a href="#">Accueil</a></li>
      <li><a href="#">À propos</a></li>
      <li><a href="#">Services</a></li>
      <li><a href="#">Activités</a></li>
      <li><a href="#">Contact</a></li>
    </ul>

    <!-- Ton hamburger peut aller ici -->
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
  </div>
</header>

</header>
  <section class="about">
  <div class="about-container">

   <div class="about-image">
  <div class="about-gallery">
    <div class="gallery-item">
      <img src="1.jpeg">
      <span class="view-icon">👁</span>
    </div>

    <div class="gallery-item">
      <img src="2.jpeg">
      <span class="view-icon">👁</span>
    </div>

    <div class="gallery-item">
      <img src="3.jpeg">
      <span class="view-icon">👁</span>
    </div>

    <div class="gallery-item">
      <img src="4.jpeg">
      <span class="view-icon">👁</span>
    </div>
  </div>
</div>



    <!-- Texte -->
    <div class="about-text">
      <h1>Qui sommes-nous</h1>

      <p>
        <strong>ADI CHAD</strong> est une agence professionnelle de communication digitale spécialisée
        dans l’impression de supports de communication, la création de contenus visuels et le
        développement de solutions numériques.
      </p>

      <h3>Notre objectif</h3>
      <p>
        Renforcer l’impact et la notoriété de nos clients en proposant des solutions de communication
        efficaces, créatives et durables.
      </p>

      <h3>Notre mission</h3>
      <p>
        Accompagner les entreprises, ONG et institutions dans leur transformation digitale grâce à
        des outils modernes, accessibles et performants.
      </p>
    </div>

  </div>
</section>

<!-- ================= FOOTER ================= -->
<!-- FOOTER -->
<footer class="footer">
  <div class="footer-container">

    <!-- Bloc 1 -->
    <div class="footer-col">
      <h2 class="logo">ADI Chad</h2>
      <p class="slogan">Audace • Innovation • Excellence</p>
      <p class="desc">AU SERVICE DE VOTRE CONFORT DIGITAL</p>

      <iframe class="map"
        src="https://www.google.com/maps?q=N'Djamena&t=&z=12&ie=UTF8&iwloc=&output=embed">
      </iframe>
    </div>

    <!-- Bloc 2 -->
    <div class="footer-col">
      <h3>Liens Rapides</h3>
      <ul>
        <li><a href="#">Accueil</a></li>
        <li><a href="#">À propos</a></li>
        <li><a href="#">Formations</a></li>
        <li><a href="#">Activités</a></li>
        <li><a href="#">Partenaires</a></li>
      </ul>
    </div>

    <!-- Bloc 3 -->
    <div class="footer-col">
      <h3>Contact</h3>
      <p>📧 adichad235@gmail.com</p>
      <p>📞 +235 69 29 07 71</p>
      <p>💬 WhatsApp: +235 94 57 91 94</p>

      <h3 class="follow">Suivez-nous</h3>
      <div class="socials">
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

  <div class="copyright">
    © 2025 ADI CHAD – Tous droits réservés
  </div>
</footer>

<script>
  // Récupère l'élément du bouton hamburger (icône du menu)
  const hamburger = document.getElementById("hamburger");

  // Récupère l'élément du menu mobile
  const mobileMenu = document.getElementById("mobile-menu");

  // Ajoute un événement au clic sur le bouton hamburger
  hamburger.addEventListener("click", () => {
    // Ajoute ou enlève la classe "open" au menu mobile
    // Cela permet d'afficher ou de cacher le menu
    mobileMenu.classList.toggle("open");
  });

  // Fonction pour fermer le menu mobile
  function closeMenu() {
    // Supprime la classe "open" pour cacher le menu
    mobileMenu.classList.remove("open");
  }
</script>
<script>
  // Met automatiquement l'année actuelle dans le footer
  const year = new Date().getFullYear();
  document.querySelector("footer div.text-center").innerHTML =
    `© ${year} ADI CHAD — Tous droits réservés`;

// ===== Scroll fluide pour les liens du footer =====
document.querySelectorAll('#contact a[href^="#"]').forEach(link => {
  link.addEventListener('click', function (e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute('href'));
    if (target) {
      target.scrollIntoView({
        behavior: 'smooth',
        block: 'start'
      });
    }
  });
});

// ===== Année automatique =====
const copyright = document.querySelector('#contact .border-t');
if (copyright) {
  const year = new Date().getFullYear();
  copyright.innerHTML = `© ${year} ADI CHAD — Tous droits réservés`;
}
</script>
<script>
document.querySelectorAll('.footer a').forEach(link=>{
  link.addEventListener('mouseover',()=>link.style.opacity="0.7");
  link.addEventListener('mouseout',()=>link.style.opacity="1");
});
</script>
<div id="imgModal" class="img-modal">
  <!-- Flèche gauche -->
  <span class="nav prev" onclick="prevImg()">&#10094;</span>

  <!-- Image affichée -->
  <img id="modalImage">

  <!-- Flèche droite -->
  <span class="nav next" onclick="nextImg()">&#10095;</span>

  <!-- Bouton fermer -->
  <span class="close" onclick="closeImg()">×</span>
</div>

<script>
const galleryItems = document.querySelectorAll('.gallery-item');
const modal = document.getElementById('imgModal');
const modalImage = document.getElementById('modalImage');
let currentIndex = 0;

// Ouvrir modal au clic
galleryItems.forEach((item, index) => {
  item.addEventListener('click', () => {
    currentIndex = index;
    modal.style.display = "flex";
    modalImage.src = item.querySelector('img').src;
  });
});

// Fermer modal
function closeImg() {
  modal.style.display = "none";
}

// Image suivante
function nextImg() {
  currentIndex = (currentIndex + 1) % galleryItems.length;
  modalImage.src = galleryItems[currentIndex].querySelector('img').src;
}

// Image précédente
function prevImg() {
  currentIndex = (currentIndex - 1 + galleryItems.length) % galleryItems.length;
  modalImage.src = galleryItems[currentIndex].querySelector('img').src;
}

// Fermeture modal au clic en dehors de l'image
modal.addEventListener('click', (e) => {
  if (e.target === modal) closeImg();
});

</script>


</body>
</html>
