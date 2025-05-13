<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cute Quiz Night!</title>
    <link rel="stylesheet" href="../css/quiz.css" />
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
      // 15 sample questions, answers, and explanations
      const questions = [
        { q: "What is 2 + 2?", a: "q", e: "Because 2 plus 2 equals 4." },
        { q: "What color is the sky on a clear day?", a: "q", e: "The sky appears blue due to Rayleigh scattering." },
        { q: "What is the capital of France?", a: "q", e: "Paris is the capital city of France." },
        { q: "How many days are there in a week?", a: "q", e: "There are 7 days in a week." },
        { q: "What is the opposite of hot?", a: "q", e: "Cold is the opposite of hot." },
        { q: "What is the first letter of the English alphabet?", a: "q", e: "The first letter is 'A'." },
        { q: "What do bees make?", a: "q", e: "Bees make honey from nectar." },
        { q: "What is the color of grass?", a: "q", e: "Grass is green due to chlorophyll." },
        { q: "How many months are in a year?", a: "q", e: "There are 12 months in a year." },
        { q: "What is the largest planet in our solar system?", a: "q", e: "Jupiter is the largest planet." },
        { q: "What animal barks?", a: "q", e: "Dogs bark." },
        { q: "What do you call water in its solid state?", a: "q", e: "Solid water is called ice." },
        { q: "What is the main ingredient in bread?", a: "q", e: "Bread is mainly made from flour." },
        { q: "What is 10 divided by 2?", a: "q", e: "10 divided by 2 is 5." },
        { q: "What fruit is yellow and curved?", a: "q", e: "Bananas are yellow and curved." }
      ];

      const questionsContainer = document.getElementById('questions-container');

      // Track correct answers
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
          msg.innerHTML = '';
          if (userAns === item.a.toLowerCase()) {
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
