<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Movies</title>
    <link rel="stylesheet" href="./assets/css/global.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="./assets/js/script.js" defer></script>
    <?php
    include '../includes/js-libraries.php';
    ?>
</head>

<body>
    <div class="app-container">
        <?php
        include './components/sidebar.php'
            ?>
        <div class="app-content">
            <div class="app-content-header">
                <h1 class="app-content-headerText">Watchflix</h1>
                <button class="app-content-headerButton">Add Movie</button>
            </div>
        </div>
    </div>
</body>

</html>