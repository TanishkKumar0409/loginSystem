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
        <h1>Delete Account</h1>
        <div class="input-box">
          <input id="login-password" type="password" placeholder="Password" required />
          <i class="fa-solid fa-lock" onclick="focusInput('login-password')"></i>
        </div>
        <div class="remember-forgot">
          <label class="checkbox-container">
            <input type="checkbox" id="show-password" onclick="togglePassword()" />
            <span></span>
            Show Password
          </label>
          <a href="#">Forgot Password</a>
        </div>
        <button type="submit" class="btn">Login</button>
      </form>
    </div>
  <script src="script.js"></script>
</body>

</html>
