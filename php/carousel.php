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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
          <a href="login.php" class="nav-link"><i class="fa-solid fa-right-from-bracket"></i></a>
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
        "Second month, second photobooth! I remember how excited we were to keep this tradition going. This is also the first time we found a decent photobooth (shoutout to Sari-sari). I remember this celebration because it’s one of the cutest dates we had! I honestly think this is our best date so far (no offense to the other dates ah). I hope maka-paint by numbers date ta again soon~",
        "This was our first (and last) time trying the photobooth as SM Lanang. Was actually surprised naa didtoa, I remember nag-hope pa ta na naa tay makita convenient nga photobooth back then, and surprisingly, there is! This wasn’t exactly an easy month for us, both mentally and financially. But, hey, nag-dine pa ta’g Tokyo Tokyo ani. How abundant! (kiss me if I’m wrong.) ( ˘ ³˘)♥︎",
        "Trying the most hyped photobooth in Davao, lol! Do you think it was worth it? Because I do. Gwapa man gud akong ka-picture, tas na-post pajud ang behind-the-scenes ani sa TikTok. In response to Stan Lee’s, you really made a difference, lovie. You made my life a whole lot better. (˶˘ ³˘(´͈ ᵕ `͈˶)",
        "Fifth month! Halfway to a year. This date was a little tough kay you know what happened, lol! But I’m glad we did this photoshoot because this really lightened up our mood. I’d also like to add na you look extremely beautiful ani na date. The way you fixed your hair, the way you carried yourself in those cute outfit (favorite top, btw!). You really are stunning, lovie! Your camera can’t justify how gwapa you are. I’m just so lucky~ (*ᴗ͈ˬᴗ͈)ꕤ*.ﾟ",
        "First time trying the photobooth at SM Ecoland. You know what I remember during this day? My long-awaited Wotakoi Dance Challenge really happened! ಥ﹏ಥ Aside from that, this was also the first time we tried Frogurt. Dili pa kaayo ka interested ato kay yogurt ice cream (and I know you don’t exactly like Yogurt) pero captivated kaayo ka sailang Christmas decoration. I’m super glad we tried it kay we now have our favorite ice cream place. ˚ʚ♡ɞ˚",
        "Best photobooth for me! It was the best kay gi-print gyud nato ang pic nga nag-kiss ta (˵ ¬ᴗ¬˵). Kidding aside,  I love how we spent this day. Naka-TikTok pa ta bago nag-go, then we bought flowers for your birthday (which was the first time nga na-nail nato ang arrangement na gusto nato). This was also the first time na we brought a “pretty” on our photobooth sesh. Plus super lami atoang pizza and pasta dinner ani na day. Thank you sa pa-Little Italy, bubba!",
        "First entry for 2025! I almost thought na we will break the tradition this month because we took the photo a little late na sa month ಥ﹏ಥ. But I’m glad we were able to make time for it. I’m so happy that I get to welcome the new year with you, bub. I don’t think I thanked you enough for joining us na mag-celebrate og Christmas and New Year. I’m so grateful I found the reason to celebrate holidays because of you.",
        "Can you believe it? This was our second Valentines together! We finally found the opportunity to take a photo at Litrato.I find it touching to think that the 'pretty' thing I gave last year is something I get to receive in return this year. Thank you so much for the flowers, bub! Thank you for listening to my drama that time kay wala ko naka-receive ug Valentine surprise (lol huhu), and I’m also grateful for your message to me back then. It’s really great to celebrate heart’s day with you. -`♡´-",
        "Tenth month, and our photobooth strip is almost complete! You know what’s the best thing that happened during this celebration? We bought our first matchy shoes! It may not be as expensive as the other shoes, or as special as living together, but what I love about this milestone is the fulfillment of realizing our plans. It feels great to accomplish something with you, bum. No matter how small it is. You know what’s next, ah? Travel, then hopefully, living together	~ 🤞",
        "It may sound odd (literally), but the 11th month is the last item for this carousel. I’m glad to have fulfilled the mandatory 4-strip photos during our monthly celebrations. I know the next shoot we’ll have will be a special one because it’ll be an important milestone for us. But before you read the 12th message, I’d like to just appreciate how far we’ve come. We started from the 70-peso strip and now here– in a 300-peso-meal-per-head photobooth (lol). Have we explored all the photobooths in Davao? I’m positive we did. I’m proud to share this achievement with you, love! This is definitely my favorite collection. "
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
