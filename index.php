<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Shermin Soo | Portfolio</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Playfair:ital,opsz,wght@0,5..1200,300..900;1,5..1200,300..900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/turn.js/4/turn.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  </head>
  <body>
    <!-- navigation bar -->
    <nav class="top-nav">
      <ul>
        <li><a href="#about">About</a></li>
        <li><a href="#portfolio">Photography</a></li>
        <li><a href="#reels">Reels</a></li>
        <li><a href="#skills">Skills</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav>

    <!-- hero section -->
    <header class="hero hero-grid">
      <div class="hero-text">
        <h1>Hello there,</h1>
        <span class="hero-name">I am Shermin Soo</span>
        <p class="hero-title">Digital Marketer & Visual Storyteller</p>
        <div class="hero-tagline">
          <span id="typed-text"></span>
        </div>
      </div>
      <div class="hero-photo">
        <img src="assets/shermin-soo2.png" alt="Shermin Soo" />
      </div>
    </header>

    <!-- about section -->
    <section id="about" data-aos="fade-up" data-aos-delay="200">
      <h2>About Me</h2>
      <p>
        I am Shermin Soo, a versatile Marketer with a proven track record in
        Digital Content Creation and Project Marketing. Well-versed in
        optimising brand visibility, fostering collaboration across teams and
        vendors, and driving meaningful growth in hospitality and real estate
        industries.
      </p>
    </section>

    <!-- gallery style 1 - mansory -->
    <section id="portfolio" data-aos="zoom-in-up" data-aos-delay="300">
      <h2>Photography</h2>

      <div class="gallery-filters">
        <button onclick="filterGallery('all')">All</button>
        <button onclick="filterGallery('portrait')">Portrait</button>
        <button onclick="filterGallery('landscape')">Landscape</button>
      </div>

      <div class="masonry-gallery">
        <?php
          $categories = [
            'portrait' => 'assets/films/portraits',
            'landscape' => 'assets/films/landscape'
          ];
          foreach ($categories as $category => $dir) {
            $files = scandir($dir);
            foreach ($files as $file) {
              $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
              if (in_array($ext, ['jpg', 'jpeg', 'png'])) {
                $title = ucwords(str_replace(['-', '_', '.jpg', '.jpeg', '.png'], [' ', ' ', '', '', ''], $file));
                echo "<div class='gallery-item $category'>
                        <img src='$dir/$file' alt='$title' />
                      </div>";
              }
            }
          }
        ?>
      </div>
    </section>

    <!-- gallery style 2 -->
    <section id="recent-work" class="recent-work-section">
      <h2>Recent Work</h2>
      <div class="recent-work-scroll">
        <?php
          $directories = [
            'assets/films/landscape',
            'assets/films/portraits'
          ];

          $index = 1;
          foreach ($directories as $dir) {
            if (is_dir($dir)) {
              $files = scandir($dir);
              foreach ($files as $file) {
                $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                if (in_array($ext, ['jpg', 'jpeg', 'png'])) {
                  $title = ucwords(str_replace(['-', '_', '.jpg', '.jpeg', '.png'], [' ', ' ', '', '', ''], $file));
                  echo '<div class="recent-work-item">
                          <img src="' . $dir . '/' . $file . '" alt="' . $title . '" />
                          <div class="photo-meta">
                            <div class="photo-index">/ ' . str_pad($index, 2, '0', STR_PAD_LEFT) . '</div>
                            <div class="photo-info">
                              <div class="photo-title">' . strtolower($title) . '</div>
                              <div class="photo-year">2025</div>
                            </div>
                          </div>
                        </div>';
                  $index++;
                }
              }
            }
          }
        ?>
      </div>
    </section>

    <!-- gallery image modal when clicked -->
    <div id="imageModal" class="modal">
      <span class="close">&times;</span>
      <img class="modal-content" id="modalImg">
      <div class="modal-caption" id="modalCaption"></div>
      <span class="nav-arrow nav-left">&#10094;</span>
      <span class="nav-arrow nav-right">&#10095;</span>
    </div>

    <!-- reels -->
    <section id="reels" data-aos="flip-left" data-aos-delay="400">
      <h2>Edited Reels</h2>
      <div class="reel-grid">
        <iframe
          src="https://www.youtube.com/embed/ScMzIvxBSi4"
          frameborder="0"
          allowfullscreen
        ></iframe>
        <iframe
          src="https://www.youtube.com/embed/TX9qSaGXFyg"
          frameborder="0"
          allowfullscreen
        ></iframe>
      </div>
    </section>

    <!-- skills -->
    <section id="skills" data-aos="fade-right" data-aos-delay="500">
      <h2>Marketing & Creative Skills</h2>
      <ul>
        <li>Brand Strategy</li>
        <li>Content Creation</li>
        <li>Social Media Campaigns</li>
        <li>Photography & Editing</li>
        <li>Video Editing & Reels</li>
      </ul>
    </section>

    <!-- contact -->
    <section id="contact" data-aos="fade-up" data-aos-delay="600">
      <h2>Let's make something amazing together!</h2>
      <p>
        Email:
        <a href="mailto:sherminsys519@gmail.com">sherminsys519@gmail.com</a>
      </p>
      <p>
        <i class="fab fa-instagram"></i>
        <a href="https://instagram.com/sherminsoo" target="_blank"
          >@sherminsoo</a
        >
      </p>
    </section>

    <!-- footer -->
    <footer>
      <p>&copy; 2025 Shermin Soo. All rights reserved.</p>
    </footer>

    <!-- glow cursor -->
    <div class="glow-cursor" id="glowCursor"></div>

    <script>
      // glow cursor
      const glow = document.getElementById("glowCursor");
      document.addEventListener("mousemove", (e) => {
        glow.style.left = `${e.clientX}px`;
        glow.style.top = `${e.clientY}px`;
      });

      // animation
      AOS.init({
        once: true,
        duration: 1000,
        offset: 100,
        easing: "ease-in-out",
      });

      // type animation
      document.addEventListener("DOMContentLoaded", function () {
        new Typed("#typed-text", {
          strings: [
            "Helping brands connect deeply through compelling digital narratives, visual identity, and strategy.",
          ],
          typeSpeed: 35,
          startDelay: 300,
          backSpeed: 0,
          backDelay: 500,
          loop: false,
          showCursor: false,
        });
      });

      // mansory gallery filters seclection
      function filterGallery(category) {
        const items = document.querySelectorAll(".gallery-item");
        items.forEach((item) => {
          if (category === "all") {
            item.style.display = "block";
          } else {
            item.style.display = item.classList.contains(category)
              ? "block"
              : "none";
          }
        });
      }

      // gallery image modal
      document.addEventListener("DOMContentLoaded", function () {
        const modal = document.getElementById("imageModal");
        const modalImg = document.getElementById("modalImg");
        const modalCaption = document.getElementById("modalCaption");
        const closeBtn = document.querySelector(".close");
        const navLeft = document.querySelector(".nav-left");
        const navRight = document.querySelector(".nav-right");

        const allImages = Array.from(document.querySelectorAll(".masonry-gallery img, .recent-work-item img"));
        let currentIndex = -1;

        allImages.forEach((img, i) => {
          img.style.cursor = "zoom-in";
          img.addEventListener("click", () => {
            modal.style.display = "block";
            modalImg.src = img.src;
            modalCaption.innerText = img.alt;
            currentIndex = i;
          });
        });

        closeBtn.addEventListener("click", () => {
          modal.style.display = "none";
        });

        navLeft.addEventListener("click", () => {
          if (currentIndex > 0) {
            currentIndex--;
            modalImg.src = allImages[currentIndex].src;
            modalCaption.innerText = allImages[currentIndex].alt;
          }
        });

        navRight.addEventListener("click", () => {
          if (currentIndex < allImages.length - 1) {
            currentIndex++;
            modalImg.src = allImages[currentIndex].src;
            modalCaption.innerText = allImages[currentIndex].alt;
          }
        });

        // Close modal on outside click
        modal.addEventListener("click", (e) => {
          if (e.target === modal) {
            modal.style.display = "none";
          }
        });
      });
    </script>
  </body>
</html>
