<?php
include '../assets/database_configs/session.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/tailwind.css">
</head>

<body class="flex justify-center items-center h-screen  bg-slate-950 text-white text-center overflow-hidden">
    <section class="container">
        <div class="dashboard-head">
            <h1>DASHBOARD</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. At, maxime.</p>
        </div>
        <div class="dashborad-details text-start p-2 md:left-[40%] relative">
            <h2>Name: <?php echo $sname;?></h2>
            <h2>Phone: +91<?php echo $sphone;?></h2>
            <h2>Email:<?php echo $semail;?></h2>
            <h2>Address: <?php echo $saddress;?></h2>
            <a class="text-[#414acd55] hover:text-[#414acd]" href="../assets/database_configs/logout.php">logout</a>
        </div>
    </section>
</body>

</html>