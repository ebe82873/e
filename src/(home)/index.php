<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="shortcut icon" href="../assets/images/favicon.svg" type="image/x-icon">
</head>
<?php

require_once '../php/requirements.php';

?>
<body>
    <?= render_navbar() ?>

    <main class="home">
        <section class="title">
            <h1 class="title-text">Rolsa</h1>
            <p class="splash-text">Leaders of a greener future</p>
        </section>
    </main>

    <script src="../js/scripts.js"></script>
</body>
</html>