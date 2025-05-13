<?php
require_once 'session_check.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HelloBub Photobooth Carousel</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/carousel.css" />
  </head>
  <body>
    <div class="page-container">
      <header class="header">
        <h1 class="logo">HelloBub!</h1>
        <nav class="navigation">
          <a href="carousel.php" class="nav-link">Carousel</a>
          <a href="quiz.php" class="nav-link">Cute Quiz</a>
          <a href="letter.php" class="nav-link">Read Me</a>
        </nav>
      </header>
      <main class="main-content">
        <h2 class="carousel-title">THE PHOTOBOOTH CAROUSEL</h2>
        <div class="content-wrapper">
          <div class="carousel-wrapper">
            <div id="photoboothCarousel" class="carousel slide">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#photoboothCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#photoboothCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#photoboothCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#photoboothCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#photoboothCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#photoboothCarousel" data-bs-slide-to="5" aria-label="Slide 6"></button>
                <button type="button" data-bs-target="#photoboothCarousel" data-bs-slide-to="6" aria-label="Slide 7"></button>
                <button type="button" data-bs-target="#photoboothCarousel" data-bs-slide-to="7" aria-label="Slide 8"></button>
                <button type="button" data-bs-target="#photoboothCarousel" data-bs-slide-to="8" aria-label="Slide 9"></button>
                <button type="button" data-bs-target="#photoboothCarousel" data-bs-slide-to="9" aria-label="Slide 10"></button>
                <button type="button" data-bs-target="#photoboothCarousel" data-bs-slide-to="10" aria-label="Slide 11"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="../images/1.jpg" class="d-block w-100" alt="First Month">
                </div>
                <div class="carousel-item">
                  <img src="../images/2.jpg" class="d-block w-100" alt="Second Month">
                </div>
                <div class="carousel-item">
                  <img src="../images/3.jpg" class="d-block w-100" alt="Third Month">
                </div>
                <div class="carousel-item">
                  <img src="../images/4.jpg" class="d-block w-100" alt="Fourth Month">
                </div>
                <div class="carousel-item">
                  <img src="../images/5.jpg" class="d-block w-100" alt="Fifth Month">
                </div>
                <div class="carousel-item">
                  <img src="../images/6.jpg" class="d-block w-100" alt="Sixth Month">
                </div>
                <div class="carousel-item">
                  <img src="../images/7.jpg" class="d-block w-100" alt="Seventh Month">
                </div>
                <div class="carousel-item">
                  <img src="../images/8.jpg" class="d-block w-100" alt="Eighth Month">
                </div>
                <div class="carousel-item">
                  <img src="../images/9.jpg" class="d-block w-100" alt="Ninth Month">
                </div>
                <div class="carousel-item">
                  <img src="../images/10.jpg" class="d-block w-100" alt="Tenth Month">
                </div>
                <div class="carousel-item">
                  <img src="../images/11.jpg" class="d-block w-100" alt="Eleventh Month">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#photoboothCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#photoboothCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
          <section class="message-box">
            <img
              src="https://cdn.builder.io/api/v1/image/assets/TEMP/e4d77ca3da14b0fc089321eabeab83619781a182"
              alt="Love letter icon"
              class="love-letter-icon"
            />
            <p class="message-text" id="carousel-message">
              Our first month was the simplest but also one of the most memorable
              celebrations that I had with you. It was the time we started our
              cute tradition of taking photobooth pictures in every month we were
              together. This image may have the lowest quality (it's what you get
              with 70 pesos, lol), but I love how you made your copy even cuter. I
              wish I have it though. Hmpp!
            </p>
          </section>
        </div>
      </main>
    </div>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      // Messages for each carousel image (index 0-10)
      const carouselMessages = [
        "Our first month was the simplest but also one of the most memorable celebrations that I had with you. It was the time we started our cute tradition of taking photobooth pictures in every month we were together. This image may have the lowest quality (it's what you get with 70 pesos, lol), but I love how you made your copy even cuter. I wish I have it though. Hmpp!",
        "Second month, second photobooth! I remember how excited we were to keep this tradition going. Each photo is a little snapshot of our growing love and silliness together.",
        "Third month already! Time flies when I'm with you. This photo always makes me smile because of how goofy we looked trying to fit in the frame.",
        "Fourth month, and our collection keeps growing. I love looking back at these and seeing how much closer we've become.",
        "Fifth month! Halfway to a year. This one is extra special because of the little doodles you added on your copy. So cute!",
        "Sixth month, and still going strong. I cherish every memory we make, and every photobooth picture is a treasure.",
        "Seventh month! I love how we always find time for our little tradition, no matter how busy life gets.",
        "Eighth month, and our smiles just keep getting bigger. Thank you for always making these moments so fun.",
        "Ninth month! Almost a year. This photo reminds me of how much we've grown together and all the laughter we've shared.",
        "Tenth month, and our photobooth strip is almost complete. I can't wait to see what the next months bring.",
        "Eleventh month! One more to a year. Looking at all these photos, I feel so grateful to have you by my side. Love you always!"
      ];

      const messageBox = document.getElementById('carousel-message');
      const carousel = document.getElementById('photoboothCarousel');

      // Update message on slide
      carousel.addEventListener('slid.bs.carousel', function (event) {
        const idx = event.to;
        messageBox.textContent = carouselMessages[idx] || "";
      });
    </script>
  </body>
</html>
