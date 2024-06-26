<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <section class="container">
        <div class="registration">
            <form action="script.php" class="registration-form">
                <label class="block" for="name">Name</label>
                <input class="block border-2 border" type="text" name="name" id="name">
                <label class="block" for="phone">Phone</label>
                <input class="block border-2 border" type="number" name="phone" id="phone">
                <label class="block" for="email">Email</label>
                <input class="block border-2 border" type="email" name="email" id="email">
                <label class="block" for="address">Address</label>
                <input class="block border-2 border" type="text" name="address" id="address">
                <button class="block border-2 border" name="submit-button">submit</button>
            </form>
        </div>
    </section>
</body>

</html>