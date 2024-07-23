<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Update Profile</title>
  <script src="https://kit.fontawesome.com/87f0afa689.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
  <div class="wrapper">
    <form action="../assets/php/updateScript.php" method="POST">
      <h1>Update Profile</h1>
      <div class="input-box">
        <input id="update-fullname" type="text" name="Uname" placeholder="Full Name" required />
        <i class="fa-solid fa-user" onclick="focusInput('update-fullname')"></i>
      </div>
      <div class="input-box">
        <input id="update-email" type="email" name="Uemail" placeholder="Email" required />
        <i class="fa-solid fa-envelope" onclick="focusInput('update-email')"></i>
      </div>
      <div class="input-box">
        <input id="update-contact" type="tel" name="Uphone" placeholder="Contact Number" required />
        <i class="fa-solid fa-phone" onclick="focusInput('update-contact')"></i>
      </div>
      <div class="input-box">
        <input id="update-address" type="text" name="Uaddress" placeholder="Address" required />
        <i class="fa-solid fa-location-dot" onclick="focusInput('update-address')"></i>
      </div>
      <div class="input-box">
        <input id="update-password" type="password" name="Upassword" placeholder="New Password" />
        <i class="fa-solid fa-lock" onclick="focusInput('update-password')"></i>
      </div>
      <div class="input-box">
        <input id="update-confirm-password" type="password" name="Ucpassword" placeholder="Confirm Password" />
        <i class="fa-solid fa-lock" onclick="focusInput('update-confirm-password')"></i>
      </div>
      <div class="remember-forgot">
        <label class="checkbox-container">
          <input type="checkbox" class="show-password" data-form="update" />
          <span></span>
          Show Password
        </label>
        <a href="#">Forgot Password</a>
      </div>
      <button type="submit" class="btn" name="Ubtn">Update</button>
    </form>
  </div>
  <script src="../assets/js/script.js"></script>
  <script>
    // Show password functionality
    function togglePassword() {
      const checkboxes = document.querySelectorAll('.show-password');
      checkboxes.forEach(checkbox => {
        const formType = checkbox.dataset.form;
        const passwordInputs = document.querySelectorAll(`#${formType}-password, #${formType}-confirm-password`);
        passwordInputs.forEach(input => {
          input.type = checkbox.checked ? 'text' : 'password';
        });
      });
    }

    // Add event listener for checkboxes
    document.querySelectorAll('.show-password').forEach(checkbox => {
      checkbox.addEventListener('change', togglePassword);
    });
  </script>
</body>

</html>
