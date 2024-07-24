<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login System</title>
    <script src="https://kit.fontawesome.com/87f0afa689.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <div class="wrapper" id="wrapper">
        <div id="login-form" class="form-container active">
            <form action="../assets/php/updateScript.php" method="POST">
                <h1>Confirm</h1>
                <p>
                    <?php
                    session_start();
                    if ($_SESSION['R'] == 'Rbtn1') {
                        echo "Confirm Update Account";
                    } else if ($_SESSION['R'] == 'Rbtn2') {
                        echo "Confirm Delete Account";
                    }
                    ?>
                </p>
                <div class="input-box">
                    <input id="login-password" type="password" placeholder="Password" name="Cpassword" required />
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
                <button type="submit" class="btn" name="Cbtn">Login</button>
            </form>
        </div>
        <script src="../assets/js/script.js" defer></script>
        <script>
            // Show password
            function togglePassword() {
                const passwordInput = document.getElementById('login-password');
                const showPasswordCheckbox = document.getElementById('show-password');

                // Toggle password visibility
                if (showPasswordCheckbox.checked) {
                    passwordInput.type = 'text'; // Show password
                } else {
                    passwordInput.type = 'password'; // Hide password
                }
            }
        </script>
</body>

</html>