<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="images/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Login.css">
</head>
<body>
    <div class="background-box"></div>
    <div class="background-box"></div>
    <section>
      <div class="imgBx">
        <img class="logo-image" src="images/logo.png" alt="Barangay Logo">
        <div class="overlay-text">
          <h3>Barangay Paule 1</h3>
          <p class="welcome">Welcome!</p>
          <p class="message">Your gateway to staying connected to Barangay Community</p>
      </div>
      </div>
      <div class="contentBx">
        <div class="formBx">
          <img src="images/logo.png" alt="Barangay Logo">
          <h2>Login</h2>
          <form action="login.php" method="POST">
            <div class="inputBx">
              <label>Username</label>
              <div class="input-group">
                <span><i class="bi bi-person"></i></span>
                <input type="text" name="username" title="text" required>
              </div>
            </div>
            <div class="inputBx">
              <label>Password</label>
              <div class="input-group">
                <span><i class="bi bi-lock"></i></span>
                <input type="password" id="password" name="password" title="password" required>
                <span class="password-toggle"><i class="bi bi-eye-slash"></i></span>
              </div>
            </div>
            <div class="remember">
              <label><input type="checkbox" name=""> Remember Me</label>
              <a href="ForgotPassword.html">Forgot Password?</a>
            </div>
            <div class="inputBx">
              <input type="submit" value="Log In" name="">
            </div>
            <footer>
              <p>&copy; 2024 Barangay Paule 1. All rights reserved.</p>
            </footer>
          </form>
        </div>
      </div>
    </section>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        const passwordInput = document.getElementById('password');
        const passwordToggle = document.querySelector('.password-toggle');
    
        passwordInput.addEventListener('input', function() {
            if (passwordInput.value.trim() !== '') {
                passwordToggle.style.display = 'block'; 
            } else {
                passwordToggle.style.display = 'none'; 
            }
        });
    
        passwordToggle.addEventListener('click', function() {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            if (type === 'text') {
                passwordToggle.querySelector('i').classList.remove('bi-eye');
                passwordToggle.querySelector('i').classList.add('bi-eye-slash');
            } else {
                passwordToggle.querySelector('i').classList.remove('bi-eye-slash');
                passwordToggle.querySelector('i').classList.add('bi-eye');
            }
        });

        if (passwordInput.value.trim() === '') {
            passwordToggle.style.display = 'none';
        }
    });
    
    </script>
</body>
</html>
