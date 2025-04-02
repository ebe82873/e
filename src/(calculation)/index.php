<!DOCTYPE html>
<?php require_once '../php/requirements.php'; ?>
<html lang="en">
<head>
    <?= render_header('calculator'); ?>
</head>
<body>
    <?= render_navbar(); ?>

    <?php

    $connection = get_database_connection();

    $query = "SELECT AVG(tonnes) FROM carbon_footprints";

    $result = round(num: $connection->query($query)->fetch_assoc()['AVG(tonnes)'], precision: 2);

    ?>
    <p id="avg-cbn-ftp" hidden><?= $result ?></p>

    <main class="calculation">

    </main>

    <script src="../js/calculator.js"></script>
</body>
</html>