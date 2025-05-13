<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HelloBub!</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet" href="../css/login.css" />
  </head>
  <body>
    <main class="login-container">
      <header class="brand-section">
        <h1 class="brand-title">HelloBub!</h1>
        <p class="brand-tagline">From the heart, to the screen — for you.</p>
      </header>
      <form class="login-form" id="loginForm" onsubmit="handleLogin(event)">
        <h2 class="login-heading">Log In</h2>
        <p class="login-subheading">(I swear you have an account)</p>

        <div class="form-group">
          <label for="username" class="form-label">Username:</label>
          <input type="text" id="username" name="username" class="form-input" required />
        </div>

        <div class="form-group">
          <label for="password" class="form-label">Password:</label>
          <div class="password-field">
            <input type="password" id="password" name="password" class="form-input" required />
            <button type="button" class="password-toggle" onclick="togglePassword()">
              <i class="fas fa-eye" id="password-toggle-icon"></i>
            </button>
          </div>
        </div>

        <button type="submit" class="login-link">
          <i class="fas fa-sign-in-alt"></i>
          <span>Log In</span>
        </button>

        <p class="hint-text">
          Need a hint? <span class="hint-link" onclick="openModal()">Click here</span>.
        </p>

        <div id="errorMessage" class="error-message"></div>
      </form>
    </main>

    <!-- Modal -->
    <div id="hintModal" class="modal">
      <div class="modal-content">
        <span class="close-button" onclick="closeModal()">&times;</span>
        <h3>Here are the hints po, baby</h3>
        <p><strong>Username:</strong> HOE_anniv-day</p>
        <p><strong>Password:</strong> greet me</p>
      </div>
    </div>

    <script>
    // Modal functions
    function openModal() {
        document.getElementById('hintModal').style.display = 'flex';
    }

    function closeModal() {
        document.getElementById('hintModal').style.display = 'none';
    }

    // Close modal when clicking outside
    window.onclick = function(event) {
        const modal = document.getElementById('hintModal');
        if (event.target === modal) {
            closeModal();
        }
    }

    function togglePassword() {
        const passwordInput = document.getElementById('password');
        const icon = document.getElementById('password-toggle-icon');
        
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            icon.className = 'fas fa-eye-slash';
        } else {
            passwordInput.type = 'password';
            icon.className = 'fas fa-eye';
        }
    }

    function handleLogin(event) {
        event.preventDefault();
        
        const errorDiv = document.getElementById('errorMessage');
        errorDiv.style.display = 'none';
        
        const formData = new FormData(document.getElementById('loginForm'));
        
        fetch('process_login.php', {
            method: 'POST',
            body: formData
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            console.log('Login response:', data);  // Debug log
            if (data.success) {
                window.location.href = data.redirect || 'carousel.php';
            } else {
                errorDiv.textContent = data.message || 'Login failed. Please try again.';
                errorDiv.style.display = 'block';
            }
        })
        .catch(error => {
            console.error('Error:', error);
            errorDiv.textContent = 'An error occurred. Please try again.';
            errorDiv.style.display = 'block';
        });
    }
    </script>
  </body>
</html>
