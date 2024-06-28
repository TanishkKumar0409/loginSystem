<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/tailwind.css">
</head>

<body class="flex justify-center items-center h-screen  bg-slate-950 text-white">
    <section class="container text-center">
        <div class="login-head">
            <h1>REGISTER</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. At, maxime.</p>
        </div>
        <div class="registration ">
            <form action="script.php" class="registration-form justify-center">
                <input class="border border-black rounded bg-slate-900 p-2 w-72 text-center m-2" type="text" name="name" id="name" placeholder="Please Enter Your Name">
                <input class="border border-black rounded bg-slate-900 p-2 w-72 text-center m-2" type="number" name="phone" id="phone" placeholder="Please Enter Your Contact Number">
                <input class="border border-black rounded bg-slate-900 p-2 w-72 text-center m-2" type="email" name="email" id="email" placeholder="Please Enter Your Email">
                <br>
                <input class="border border-black rounded bg-slate-900 p-2 w-72 text-center m-2" type="text" name="address" id="address" placeholder="Please Enter Your Address">
                <input class="border border-black rounded bg-slate-900 p-2 w-72 text-center m-2" type="password" name="password" id="password" placeholder="Please Enter Password">
                <input class="border border-black rounded bg-slate-900 p-2 w-72 text-center m-2" type="password" name="confirm-password" id="confirm-password" placeholder="Please Confirm Passwor">
                <br>
                <button class="border border-black rounded bg-slate-900 p-2 w-72 text-center m-2" name="submit-button">submit</button>
            </form>
        </div>
    </section>
</body>

</html>