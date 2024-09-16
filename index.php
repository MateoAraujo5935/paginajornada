<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jornada Deportiva</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="content">
        <?php

        // Definir las páginas permitidas
        $allowedPages = ['home', 'sports', 'cursos', 'esport', 'arte'];

        // Obtener el nombre de la página solicitada
        $page = isset($_GET['page']) ? $_GET['page'] : 'home';

        //añade el deporte
        $sport = isset($_GET['sport']) ? $_GET['sport'] : null;

        // Construir la ruta del archivo correspondiente
        $pagePath = 'pages/' . $page . '.php';

        // Verificar si la página está permitida
        if (!in_array($page, $allowedPages)) {
            $page = 'home';  // Página por defecto
        }

        // Incluir el contenido de la página si existe
        if (file_exists($pagePath)) {
            include $pagePath;
        } else {
            echo "<p>Página no encontrada. Buscá a algún chico de informática para solucionar el problema o intenta nuevamente más tarde.</p>";
        }
        ?>
    </div>
    <?php include 'footer.php'; ?>

    <!-- SCRIPTS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="./js/carrusel_deportes.js"></script>
</body>
</html>