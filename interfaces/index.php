<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .login-form input {
        display: block;
        margin: 5%;
    }
</style>

<body>
    <section class="container">
        <div class="">
            <form action="script.php" class="login-form">
                <label for="name">Name</label>
                <input type="text" name="name" id="name">
                <label for="phone">Phone</label>
                <input type="number" name="phone" id="phone">
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
                <label for="address">Address</label>
                <input type="text" name="address" id="address">
                <button name="submit-button">submit</button>
            </form>
        </div>
    </section>
</body>

</html>