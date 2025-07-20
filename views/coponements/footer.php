<footer class="custom-footer border-top" style="position: absolute; left: 0; width: 100%; margin-top: 72px;">
  <div class="container py-4">
    <div class="row align-items-center">
      <div class="col-md-6 text-md-start mb-3 mb-md-0">
        <p class="mb-0">&copy; <?= date('Y') ?> Jhonito 021.</p>
      </div>
      <div class="col-md-6 text-md-end d-flex justify-content-md-end justify-content-center gap-4">
        <a href="https://www.facebook.com/jhooonito.021" class="footer-link facebook" style="animation-delay: 0s" target="_blank">
          <i class="fab fa-facebook-f"></i> jhooonito.021
        </a>
        <a href="https://wa.me/261385101400?text=Bonjour%2C%20merci%20de%20laisser%20un%20message.%20Nous%20vous%20r%C3%A9pondrons%20rapidement." class="footer-link whatsapp" style="animation-delay: 0.2s" target="_blank">
          <i class="fab fa-whatsapp"></i> 261 38 51 014 00
        </a>
        <a href="https://www.instagram.com/jhooonito.021?igsh=ODAxd2VyajY2bm01" class="footer-link instagram" style="animation-delay: 0.4s" target="_blank">
          <i class="fab fa-instagram"></i> @jhooonito.021
        </a>
      </div>
    </div>
  </div>
</footer>


<script src="public/js/bootstrap.bundle.min.js"></script>
<script>

  // Cascade d'apparition des lignes de tableau
  document.addEventListener("DOMContentLoaded", () => {
    const rows = document.querySelectorAll("table tbody tr");
    rows.forEach((row, index) => {
      row.style.animationDelay = `${index * 0.05}s`;
    });
  });

  // Animation en cascade pour les cartes (ex: page d'accueil)
  document.addEventListener("DOMContentLoaded", () => {
    const cards = document.querySelectorAll(".card.fade-in-cascade");
    cards.forEach((card, index) => {
      card.style.animationDelay = `${index * 0.1}s`;
    });
  });

  const toggleBtn = document.getElementById('toggle-theme');
  const icon = toggleBtn.querySelector('i');
  const body = document.body;
  const clickSound = new Audio('public/sound/click.mp3');

  // Activer le thème sombre par défaut si non défini
  let theme = localStorage.getItem('theme');
  if (!theme) {
    theme = 'dark';
    localStorage.setItem('theme', theme);
  }

  // Appliquer le thème au chargement
  if (theme === 'dark') {
    body.classList.add('dark-mode');
    body.classList.remove('light-mode');
    icon.classList.replace('fa-moon', 'fa-sun');
  } else {
    body.classList.add('light-mode');
    body.classList.remove('dark-mode');
    icon.classList.replace('fa-sun', 'fa-moon');
  }

  // Gestion du clic
  toggleBtn.addEventListener('click', () => {
    clickSound.play();

    const isDark = body.classList.contains('dark-mode');

    if (isDark) {
      body.classList.replace('dark-mode', 'light-mode');
      icon.classList.replace('fa-sun', 'fa-moon');
      icon.classList.remove('icon-animate-down');
      icon.classList.add('icon-animate-up');
      localStorage.setItem('theme', 'light');
    } else {
      body.classList.replace('light-mode', 'dark-mode');
      icon.classList.replace('fa-moon', 'fa-sun');
      icon.classList.remove('icon-animate-up');
      icon.classList.add('icon-animate-down');
      localStorage.setItem('theme', 'dark');
    }

    void icon.offsetWidth; // reflow pour relancer l'animation
  });


  const title = document.getElementById("hero-title");
  const fullText = "Bienvenue sur MediTrack Express";
  const stopText = "Bien";
  let index = 0;
  let isDeleting = false;

  function animateTyping() {
    if (!isDeleting) {
      // Tape lettre par lettre
      title.textContent = fullText.substring(0, index + 1);
      index++;
      if (index === fullText.length) {
        isDeleting = true;
        setTimeout(animateTyping, 2000); // pause avant suppression
        return;
      }
    } else {
      // Efface jusqu'à "Bien"
      title.textContent = fullText.substring(0, index - 1);
      index--;
      if (fullText.substring(0, index) === stopText) {
        isDeleting = false;
        setTimeout(animateTyping, 1500); // pause avant re-tape
        return;
      }
    }
    setTimeout(animateTyping, 80);
  }

  // Lancer dès le chargement de la page
  window.addEventListener("load", animateTyping);


  const hero = document.querySelector(".custom-hero");
  const cursorShadow = document.querySelector(".cursor-shadow");

  hero.addEventListener("mousemove", (e) => {
    const rect = hero.getBoundingClientRect();
    const x = e.clientX - rect.left - 30; // centre le cercle
    const y = e.clientY - rect.top - 30;
    cursorShadow.style.left = `${x}px`;
    cursorShadow.style.top = `${y}px`;
    cursorShadow.style.opacity = 1;
  });

  hero.addEventListener("mouseleave", () => {
    cursorShadow.style.opacity = 0;
  });
</script>

</body>
</html>
