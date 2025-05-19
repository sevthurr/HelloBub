<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Read The Letter</title>
    <link rel="stylesheet" href="../css/letter.css" />
    <link rel="stylesheet" href="../css/slowdance.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <style>
      .chevron-down-btn {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        margin: 32px 0 0 0;
        background: none;
        border: none;
        cursor: pointer;
        outline: none;
      }
      .chevron-down-icon {
        width: 40px;
        height: 48px;
        display: block;
        color: #fff;
        transition: transform 0.3s;
      }
      .chevron-down-btn.open .chevron-down-icon {
        transform: rotate(180deg);
      }
      .slowdance-section {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.6s cubic-bezier(0.4,0,0.2,1);
      }
      .slowdance-section.open {
        max-height: 1200px; /* enough to show all content */
        transition: max-height 0.8s cubic-bezier(0.4,0,0.2,1);

      }

  .invitation-text {
    width: 1000px;
    text-align: center;
  }
  .slowdance-centered {
    align-items: center !important;
    justify-content: center !important;
    padding-bottom: 80px;
  }
  
  .slowdance-centered-content {
    align-items: center !important;
    margin: 0 auto;
    width: 100%;
    max-width: 600px;
  }
  
  .slowdance-image-center {
    margin-left: 120px !important;

  }
  
  .slowdance-song-title,
  .slowdance-artist-name {
    text-align: center;
    margin-left: 0 !important;
  }
  
  .slowdance-action-buttons {
    justify-content: center !important;
    margin-left: 0 !important;
    margin-top: 20px;
    width: 100%;
    gap: 20px;
  }
  
  #slowdanceAudio {
    display: block;
    width: 350px;
    background: #ffecee;
    border-radius: 16px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.04);
  }
  
  .chevron-divider {
    border: none;
    border-top: 2px solid #ffecee;
    margin: 24px auto 0 auto;
    width: 80px;
    opacity: 1;
  }

  .letter-main-flex {
    display: flex;
    justify-content: center;
    align-items: flex-start;
    flex-direction: row;
    gap: 20px;
    margin-top: 40px;
  }


  .letter-main-image {
    width: 100%;
    border-radius: 12px;
  }

  .love-letter-icon-main {
    width: 50px;
    height: 50px;
    margin-bottom: 16px;
  }

    </style>
  </head>
  <body>
    <div class="letter-container">

      <header class="letter-header">
        <h1 class="logo">HelloBub!</h1>
        <nav class="navigation">
          <a href="carousel.php" class="nav-link">Carousel</a>
          <a href="quiz.php" class="nav-link">Cute Quiz</a>
          <a href="letter.php" class="nav-link">Read Me</a>
          <a href="login.php" class="nav-link"><i class="fa-solid fa-right-from-bracket"></i></a>
        </nav>
      </header>
      <h2 class="letter-title">What my heart wants to say...</h2>

      <main class="letter-main-flex">
        <div class="letter-image-box">
          <img src="../images/anniv.jpg" alt="Letter image" class="letter-main-image" />
        </div>
        <section class="letter-body-box">
       
          <article class="letter-message">
            <p class="message-text">
<strong>Just when you thought I couldn't get any cheesier.</strong><br>
<br>
Happy anniversary, Lovie! This was such a great day, wasn't it? I hope you were able to enjoy this website before reading this 12th letter. I started working on this two months ago. I thought it was just going to be a draft, but I realized I needed to top the small notebook I gave you a year ago.<br><br>
Anyway, I just wanted to thank you for sticking with me over the past year. I know it’s not an easy relationship, but it’s definitely a peaceful and fulfilling one. I’m extremely blessed to have you in my life. You don’t just motivate me or make me feel all these butterflies—you also complete me. I love all the moments we’ve shared: all the movies we laughed at, loved, cried over, and got angry about; all the songs we listened and danced to; all the great and even the 7-below-out-of-10 foods we shared. All the places we’ve made memories in, and even all the fights we've had, proved to us time and time again that we want this relationship to work.<br><br>
<strong>I’ll always be your lover girl.</strong><br>
Your <strong>Bub</strong> who gives you flowers and letters whenever we celebrate something—special or not.<br>
Your <strong>Babu</strong> who pulls your armpit hair every weekend.<br>
Your <strong>Lovie</strong> who tells you to eat because you tend to forget.<br>
Your <strong>Babum</strong> who washes the dishes because your nails are too pretty—they shouldn’t touch the water.<br>
Your <strong>Grinch</strong> who has learned to love celebrating the holidays with you.<br>
Your <strong>Chandler Bing</strong> who always tries their best to match your ‘anal’.<br>
And your <strong>Kaye Cam</strong>—the one who will always give you butterflies.<br><br>
I love you in every possible way. I love you in every programming language (eme).<br>I love you for who you are and how you love, my Zal. This may not be your first time experiencing an anniversary celebration, but I hope this is your most memorable one.<br><br>
<strong>Here’s to a more amazing and bountiful year together! ٩(^ᗜ^ )و ´-</strong>
</p>
            <p class="signature" style = "font-weight: bold; font-size: 18px;">
              From your awkward and loving girlfriend,
              <br />
              <span class="signature-name" style = "font-weight: bold; font-size: 18px;">Kaye</span>
            </p>
          </article>
        </section>
      </main>
      <!-- Chevron Down Button -->
    <button class="chevron-down-btn" id="chevronBtn" aria-label="Show more" title="Click after reading the message">
      <svg class="chevron-down-icon" fill="none" stroke="currentColor" stroke-width="4" viewBox="0 0 40 40">
        <polyline points="10,16 20,26 30,16" stroke-linecap="round" stroke-linejoin="round"/>
        <polyline points="10,24 20,34 30,24" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </button>

      <hr class="chevron-divider" />
      <!-- Hidden Slowdance Section -->
      <div class="slowdance-section" id="slowdanceSection">
        <section class="quiz-container slowdance-centered">
          <main class="quiz-content slowdance-centered-content">
            <h2 class="recipient-name">MISS ZAL TRIXIA RANIS,</h2>
            <h3 class="invitation-text">WILL YOU DANCE WITH ME?</h3>
            <figure class="image-container slowdance-image-center">
              <img
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/8d66ce7d018a75f4b218a72e4aa9d9c1317c97eb?placeholderIfAbsent=true&apiKey=ddaccfec04494b429f8d3267955938e3"
                alt="Dance invitation image"
                class="invitation-image"
              />
            </figure>
            <p class="song-title slowdance-song-title">Tonight</p>
            <p class="artist-name slowdance-artist-name">Stephen Day</p>
            <audio id="slowdanceAudio" src="../audio/Tonight.mp3" style="display:none;margin-bottom:32px;" controls></audio>
            <div class="action-buttons slowdance-action-buttons">
              <button class="response-button" id="yesBtn">Yes</button>
              <button class="response-button response-button-extended" id="yesOfCourseBtn">
                Yes, of course!
              </button>
            </div>
          </main>
        </section>
      </div>
    </div>
    <script>
      // Toggle slowdance section
      const chevronBtn = document.getElementById('chevronBtn');
      const slowdanceSection = document.getElementById('slowdanceSection');
      chevronBtn.addEventListener('click', function() {
        slowdanceSection.classList.toggle('open');
        chevronBtn.classList.toggle('open');
        if (slowdanceSection.classList.contains('open')) {
          // Scroll to the slowdance section smoothly
          setTimeout(() => {
            slowdanceSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
          }, 400);
        }
      });

      // Play audio on button click
      const audio = document.getElementById('slowdanceAudio');
      document.getElementById('yesBtn').onclick = document.getElementById('yesOfCourseBtn').onclick = function() {
        audio.style.display = 'block';
        audio.play();
      };
    </script>
  </body>
</html>
