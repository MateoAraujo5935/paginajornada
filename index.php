<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jornada Deportiva</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="content">
        <?php
        // Obtener el nombre de la página solicitada
        $page = isset($_GET['page']) ? $_GET['page'] : 'home';

        // Construir la ruta del archivo correspondiente
        $pagePath = 'pages/' . $page . '.php';

        // Incluir el contenido de la página si existe
        if (file_exists($pagePath)) {
            include $pagePath;
        } else {
            echo "<p>Página no encontrada. Buscá a algún chico de informática para solucionar el problema o intenta nuevamente más tarde.</p>";
        }
        ?>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>