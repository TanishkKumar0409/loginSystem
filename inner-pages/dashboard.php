<?php
include "../assets/php/config.php";
include "../assets/php/session.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User Profile</title>
    <script src="https://kit.fontawesome.com/87f0afa689.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <div class="wrapper">
        <h1>Your Profile</h1>
        <div class="user-data">
            <div class="data-item">
                <span>Full Name:</span>
                <span><?php echo $name ?></span>
            </div>
            <div class="data-item">
                <span>Email:</span>
                <span><?php echo $email ?></span>
            </div>
            <div class="data-item">
                <span>Contact Number:</span>
                <span><?php echo $phone ?></span>
            </div>
            <div class="data-item">
                <span>Address:</span>
                <span><?php echo $address ?></span>
            </div>
        </div>
        <div class="action-buttons">
            <form action="../assets/php/redirects.php" method="POST" style="width: 100%;">
                <button class="btn" name="Rbtn1">Update</button>
                <button class="btn" name="Rbtn2">Delete</button>
                <button class="btn" name="Rlogout">Logout</button>
            </form>
        </div>
    </div>
    <script src="../assets/js/script.js"></script>
</body>

</html>