<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Update Profile</title>
  <script src="https://kit.fontawesome.com/87f0afa689.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="wrapper">
    <form action="update_script.php" method="POST">
      <h1>Update Profile</h1>
      <div class="input-box">
        <input id="update-fullname" type="text" name="fullname" placeholder="Full Name" required />
        <i class="fa-solid fa-user" onclick="focusInput('update-fullname')"></i>
      </div>
      <div class="input-box">
        <input id="update-email" type="email" name="email" placeholder="Email" required />
        <i class="fa-solid fa-envelope" onclick="focusInput('update-email')"></i>
      </div>
      <div class="input-box">
        <input id="update-contact" type="tel" name="contact" placeholder="Contact Number" required />
        <i class="fa-solid fa-phone" onclick="focusInput('update-contact')"></i>
      </div>
      <div class="input-box">
        <input id="update-address" type="text" name="address" placeholder="Address" required />
        <i class="fa-solid fa-location-dot" onclick="focusInput('update-address')"></i>
      </div>
      <div class="input-box">
        <input id="update-password" type="password" name="password" placeholder="New Password" />
        <i class="fa-solid fa-lock" onclick="focusInput('update-password')"></i>
      </div>
      <div class="input-box">
        <input id="update-confirm-password" type="password" name="confirm_password" placeholder="Confirm Password" />
        <i class="fa-solid fa-lock" onclick="focusInput('update-confirm-password')"></i>
      </div>
      <button type="submit" class="btn">Update</button>
    </form>
  </div>
  <script src="script.js"></script>
</body>
</html>
