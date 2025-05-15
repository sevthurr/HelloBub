<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cute Quiz Night!</title>
    <link rel="stylesheet" href="../css/quiz.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap"
      rel="stylesheet"
    />

  </head>
  <body>
    <div class="mini-quiz">
      <header class="quiz-header">
        <h1 class="brand-title">HelloBub!</h1>
        <nav class="navigation">
          <a href="carousel.php" class="nav-link">Carousel</a>
          <a href="quiz.php" class="nav-link">Cute Quiz</a>
          <a href="letter.php" class="nav-link">Read Me</a>
          <a href="login.php" class="nav-link"><i class="fa-solid fa-right-from-bracket"></i></a>

        </nav>
      </header>
      <main class="quiz-content">
        <section class="quiz-main-section">
          <h2 class="quiz-title">Cute Quiz Night!</h2>
          <form class="quiz-form" onsubmit="return false;">
            <div id="questions-container"></div>
          </form>
        </section>
      </main>
      <!-- Modal for perfect score -->
      <div class="modal-overlay" id="perfectModal">
        <div class="modal-content">
          <h2>Congratulations, Bub! You got a perfect score!</h2>
          <h3>(No surprise because you're perfect).</h3>
          <br>
          <p>As your reward, here's your latest WMHWTS entry!</p>
          <button class="modal-btn" id="modalGoBtn">Click Here</button>
        </div>
      </div>
    </div>
    <script>
      // 15 custom questions, multiple possible answers per question
      const questions = [
        {
          q: "What event did we attend when we first interacted with each other personally?",
          a: "basketball game||basketball",
          e: "Nitakas pa ka guidance ato tapos ako ga-wait saimo bago mulakaw. You were so shy and cute that time!"
        },
        {
          q: "Where’s our “Tagpuan”?",
          a: "shell||shell bangkal||petron||petron bangkal",
          e: "We were so cute back then! I remember your outfit pa and how caring you were. You shared your jacket with me para dili ko mabasa uwu."
        },
        {
          q: "When did we see each other next after the outing?",
          a: "cafeteria||canteen||be cafeteria||be canteen",
          e: "I was really simping when I saw you that time! You’re super focused on your papers and you look so sexy in your intern uniform."
        },
        {
          q: "Where were we when we first kissed?",
          a: "apartment||apartment ni meriam",
          e: "You kissed me first! (I love it)"
        },
        {
          q: "Where did we take our first photobooth?",
          a: "victoria plaza||victoria",
          e: "We wanted to just try until we got really into it!"
        },
        {
          q: "What’s the best series we watched together?",
          a: "friends",
          e: "Definitely the best. I miss it!"
        },
        {
          q: "What’s the first anime we watched together?",
          a: "demon slayer",
          e: "It feels like a dream!"
        },
        {
          q: "What’s our favorite home-cooked meal? Hint: It’s your specialty dish",
          a: "seafood boil",
          e: "Best seafood boil ever!"
        },
        {
          q: "Who’s the fictional character that I always use to greet you?",
          a: "deadpool",
          e: "You know why? Because your crazy matches my crazy, baby!"
        },
        {
          q: "Which cat of yours did we  consider our first child?",
          a: "marble",
          e: "Just a baby. Just a little baby."
        },
        {
          q: "Which crochet keychain did I give you before your mock boards?",
          a: "clover||clover leaf||four leaf clover",
          e: "And really nailed the “one take cutie”!"
        },
        {
          q: "Where did we usually go on our dates back then—the place I want to visit again? Hint: it has something to do with candles.",
          a: "church",
          e: "Something about it just feels right. Let’s find the time, please!"
        },
        {
          q: "When did we first visit your home?",
          a: "holy week",
          e: "I miss our first bus ride!"
        },
        {
          q: "What was the first nickname you gave me? Hint: Green",
          a: "grinch",
          e: "You gave this nickname to me because I told you I hate Christmas."
        },
        {
          q: "Who’s my best girl?",
          a: "zal||onik||me||babu",
          e: "Yes you are!"
        }
      ];

      const questionsContainer = document.getElementById('questions-container');
      let correctAnswers = Array(questions.length).fill(false);

      questions.forEach((item, idx) => {
        const row = document.createElement('div');
        row.className = 'question-row';
        row.innerHTML = `
          <div class="question-text">Question ${idx + 1}: ${item.q}</div>
          <label class="answer-label" for="answer-${idx}">Answer:</label>
          <div class="answer-row">
            <input type="text" class="answer-input" id="answer-${idx}" autocomplete="off" />
            <button type="button" class="go-btn" data-idx="${idx}">Go</button>
            <span class="inline-message" id="msg-${idx}"></span>
          </div>
          <div class="popup-explanation" id="popup-${idx}">${item.e}</div>
        `;
        questionsContainer.appendChild(row);
      });

      questions.forEach((item, idx) => {
        const goBtn = document.querySelector(`.go-btn[data-idx="${idx}"]`);
        const input = document.getElementById(`answer-${idx}`);
        const msg = document.getElementById(`msg-${idx}`);
        const popup = document.getElementById(`popup-${idx}`);

        goBtn.addEventListener('click', () => {
          popup.style.display = 'none';
          const userAns = input.value.trim().toLowerCase();
          const possibleAnswers = item.a.split('||').map(ans => ans.trim().toLowerCase());
          msg.innerHTML = '';
          if (possibleAnswers.includes(userAns)) {
            msg.innerHTML = `That's right, baby! <span class="explain-link" id="why-${idx}">Why?</span>`;
            correctAnswers[idx] = true;
            document.getElementById(`why-${idx}`).onclick = function(e) {
              popup.style.display = 'block';
              const rect = msg.getBoundingClientRect();
              popup.style.left = (rect.left - msg.parentElement.getBoundingClientRect().left) + 'px';
              popup.style.top = (msg.offsetTop + 28) + 'px';
            };
          } else {
            msg.innerHTML = `Wrong ka po baby. <span class="explain-link" id="try-${idx}">Try mo ulet.</span>`;
            correctAnswers[idx] = false;
            document.getElementById(`try-${idx}`).onclick = function(e) {
              input.value = '';
              msg.innerHTML = '';
              popup.style.display = 'none';
              input.focus();
            };
          }
          // Check for perfect score
          if (correctAnswers.every(Boolean)) {
            document.getElementById('perfectModal').style.display = 'flex';
          }
        });

        // Hide popup when clicking outside
        document.addEventListener('click', function handler(e) {
          if (!popup.contains(e.target) && !msg.contains(e.target)) {
            popup.style.display = 'none';
          }
        });
      });

      // Modal button redirect
      document.getElementById('modalGoBtn').onclick = function() {
        window.location.href = 'letter.php';
      };
    </script>
  </body>
</html>
