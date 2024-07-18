<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User Profile</title>
    <script src="https://kit.fontawesome.com/87f0afa689.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <h1>Your Profile</h1>
        <div class="user-data">
            <div class="data-item">
                <span>Full Name:</span>
                <span>Tanishk Kumar</span>
            </div>
            <div class="data-item">
                <span>Email:</span>
                <span>Tanishkk60@gmail.com</span>
            </div>
            <div class="data-item">
                <span>Contact Number:</span>
                <span>+91 95576 23131</span>
            </div>
            <div class="data-item">
                <span>Address:</span>
                <span>Seemadwar</span>
            </div>
            <div class="data-item">
                <span>Password:</span>
                <span id="password">••••••••</span>
                <i class="fa-solid fa-eye" onclick="togglePasswordVisibility('password', '9557623131')"></i>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>