<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login System</title>
  <script src="https://kit.fontawesome.com/87f0afa689.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="wrapper" id="wrapper">
    <div id="login-form" class="form-container active">
      <form action="">
        <h1>Login</h1>
        <div class="input-box">
          <input type="email" placeholder="Email" required />
          <i class="fa-solid fa-envelope"></i>
        </div>
        <div class="input-box">
          <input type="password" placeholder="Password" required />
          <i class="fa-solid fa-lock"></i>
        </div>
        <div class="remember-forgot">
          <label class="checkbox-container">
            <input type="checkbox" />
            <span></span>
            Remember me
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
          <input type="text" placeholder="Full Name" required />
          <i class="fa-solid fa-user"></i>
        </div>
        <div class="input-box">
          <input type="email" placeholder="Email" required />
          <i class="fa-solid fa-envelope"></i>
        </div>
        <div class="input-box">
          <input type="tel" placeholder="Contact Number" required />
          <i class="fa-solid fa-phone"></i>
        </div>
        <div class="input-box">
          <input type="text" placeholder="Address" required />
          <i class="fa-solid fa-location-dot"></i>
        </div>
        <div class="input-box">
          <input type="password" placeholder="Password" required />
          <i class="fa-solid fa-lock"></i>
        </div>
        <div class="input-box">
          <input type="password" placeholder="Confirm Password" required />
          <i class="fa-solid fa-lock"></i>
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
  <script src="script.js"></script>
</body>

</html>