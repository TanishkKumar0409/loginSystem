<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login System</title>
  <script src="https://kit.fontawesome.com/87f0afa689.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <div class="wrapper" id="wrapper">
    <div id="login-form" class="form-container active">
      <form action="">
        <h1>Login</h1>
        <div class="input-box">
          <input id="login-email" type="email" placeholder="Email" required />
          <i class="fa-solid fa-envelope" onclick="focusInput('login-email')"></i>
        </div>
        <div class="input-box">
          <input id="login-password" type="password" placeholder="Password" required />
          <i class="fa-solid fa-lock" onclick="focusInput('login-password')"></i>
        </div>
        <div class="remember-forgot">
          <label class="checkbox-container">
            <input type="checkbox" class="show-password" data-form="login" />
            <span></span>
            Show Password
          </label>
          <a href="#">Forgot Password</a>
        </div>
        <button type="submit" class="btn">Login</button>
        <div class="registered-link">
          <p>
            Don't have an account?<a href="#" onclick="toggleForms()">Register</a>
          </p>
        </div>
      </form>
    </div>
    <div id="register-form" class="form-container">
      <form action="">
        <h1>Register</h1>
        <div class="input-box">
          <input id="register-fullname" type="text" placeholder="Full Name" required />
          <i class="fa-solid fa-user" onclick="focusInput('register-fullname')"></i>
        </div>
        <div class="input-box">
          <input id="register-email" type="email" placeholder="Email" required />
          <i class="fa-solid fa-envelope" onclick="focusInput('register-email')"></i>
        </div>
        <div class="input-box">
          <input id="register-contact" type="tel" placeholder="Contact Number" required />
          <i class="fa-solid fa-phone" onclick="focusInput('register-contact')"></i>
        </div>
        <div class="input-box">
          <input id="register-address" type="text" placeholder="Address" required />
          <i class="fa-solid fa-location-dot" onclick="focusInput('register-address')"></i>
        </div>
        <div class="input-box">
          <input id="register-password" type="password" placeholder="Password" required />
          <i class="fa-solid fa-lock" onclick="focusInput('register-password')"></i>
        </div>
        <div class="input-box">
          <input id="register-confirm-password" type="password" placeholder="Confirm Password" required />
          <i class="fa-solid fa-lock" onclick="focusInput('register-confirm-password')"></i>
        </div>
        <div class="remember-forgot">
          <label class="checkbox-container">
            <input type="checkbox" class="show-password" data-form="register" />
            <span></span>
            Show Password
          </label>
          <a href="#">Forgot Password</a>
        </div>
        <button type="submit" class="btn">Register</button>
        <div class="registered-link">
          <p>
            Already have an account?<a href="#" onclick="toggleForms()">Login</a>
          </p>
        </div>
      </form>
    </div>
  </div>
  <script src="assets/js/script.js" defer></script>
  <script>
       // Show password
       function togglePassword() {
      // Loop through each checkbox
      const checkboxes = document.querySelectorAll('.show-password');
      checkboxes.forEach(checkbox => {
        // Get the form type (login or register) from the data-form attribute
        const formType = checkbox.dataset.form;
        
        // Find the password and confirm password inputs for the specific form
        const passwordInputs = document.querySelectorAll(`#${formType}-password, #${formType}-confirm-password`);
        
        // Toggle password visibility based on checkbox state
        passwordInputs.forEach(input => {
          input.type = checkbox.checked ? 'text' : 'password';
        });
      });
    }

    // Add event listeners for checkboxes
    document.querySelectorAll('.show-password').forEach(checkbox => {
      checkbox.addEventListener('change', togglePassword);
    });
  </script>
</body>

</html>
