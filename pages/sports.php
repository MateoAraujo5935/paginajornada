<?php
// Datos deportes
$sportData = [
    'football_male' => [
        'title' => 'Fútbol Masculino',
        'teamsCB' => [
            ['name' => 'Figuero', 'class' => '1A', 'flag' => './imagenes/flags/1a.webp'],
            ['name' => 'Figuero B', 'class' => '1A', 'flag' => './imagenes/flags/1a.webp'],
            ['name' => 'La bandeta', 'class' => '1B', 'flag' => './imagenes/flags/1b.webp'],
            ['name' => 'Los sequitos', 'class' => '1C', 'flag' => './imagenes/flags/1c.webp'],
            ['name' => 'Chipi Maffin FC', 'class' => '2A', 'flag' => './imagenes/flags/2a.webp'],
            ['name' => 'Deportivo esta', 'class' => '2B', 'flag' => './imagenes/flags/2b.webp'],
            ['name' => 'La Chispa', 'class' => '2C', 'flag' => './imagenes/flags/2c.webp'],
            ['name' => 'Real Tractor', 'class' => '3A', 'flag' => './imagenes/flags/3a.webp'],
            ['name' => 'La Dinastía', 'class' => '3B', 'flag' => './imagenes/flags/3b.webp'],
            ['name' => 'Zunga FC', 'class' => '3B', 'flag' => './imagenes/flags/3b.webp'],
            ['name' => 'Deportivo Rustico', 'class' => '3C', 'flag' => './imagenes/flags/3c.webp'],
            ['name' => 'Sacapipas FC', 'class' => '3C', 'flag' => './imagenes/flags/3c.webp']
        ],
        'format_desc_cb' => 'notReady',
        'fixture_cb' => 'https://challonge.com/es/yi7y5yo4/module',

        'teamsCO' => [
            ['name' => 'Rumba FC', 'class' => '4A', 'flag' => './imagenes/flags/4a.webp'],
            ['name' => 'La sub 16', 'class' => '4B', 'flag' => './imagenes/flags/4b.webp'],
            ['name' => 'Chori cheto', 'class' => '5A', 'flag' => './imagenes/flags/5a.webp'],
            ['name' => 'Villa Dolmine', 'class' => '5A', 'flag' => './imagenes/flags/5a.webp'],
            ['name' => 'Sector L', 'class' => '5B', 'flag' => './imagenes/flags/5b.webp'],
            ['name' => 'Mopaneta', 'class' => '5C', 'flag' => './imagenes/flags/5c.webp'],
            ['name' => 'La toco y me voy', 'class' => '6B', 'flag' => './imagenes/flags/6.webp'],
            ['name' => 'Deportivo La Sala', 'class' => '6B', 'flag' => './imagenes/flags/6.webp'],
            ['name' => 'Santos', 'class' => '6C', 'flag' => './imagenes/flags/6.webp'],
            ['name' => 'Las sobras', 'class' => '6C', 'flag' => './imagenes/flags/6.webp']
        ],
        'format_desc_co' => 'notReady',
        'fixture_co' => 'notReady'
    ],

    'football_female' => [
        'title' => 'Fútbol Femenino',
        'teamsCB' => [
            ['name' => 'Las Figuero', 'class' => '1A', 'flag' => './imagenes/flags/1a.webp'],
            ['name' => 'La bandita', 'class' => '1B', 'flag' => './imagenes/flags/1b.webp'],
            ['name' => 'Real maní', 'class' => '1C', 'flag' => './imagenes/flags/1c.webp'],
            ['name' => 'Las danoninas', 'class' => '2A', 'flag' => './imagenes/flags/2a.webp'],
            ['name' => 'Las Leonas FC', 'class' => '2A', 'flag' => './imagenes/flags/2a.webp'],
            ['name' => 'Deportivas estas', 'class' => '2B', 'flag' => './imagenes/flags/2b.webp'],
            ['name' => 'Fuego y Chispa', 'class' => '2C', 'flag' => './imagenes/flags/2c.webp'],
            ['name' => 'Las Renzas', 'class' => '3A', 'flag' => './imagenes/flags/3a.webp'],
            ['name' => 'Al tobillo FC', 'class' => '3B', 'flag' => './imagenes/flags/3b.webp'],
            ['name' => 'Deportivas Rusticas', 'class' => '3C', 'flag' => './imagenes/flags/3c.webp'],
        ],
        'format_desc_cb' => 'notReady',
        'fixture_cb' => 'notReady',

        'teamsCO' => [
            ['name' => 'No sé FC', 'class' => '4A', 'flag' => './imagenes/flags/4a.webp'],
            ['name' => 'Rompe pelotas', 'class' => '4B', 'flag' => './imagenes/flags/4b.webp'],
            ['name' => 'Lado C', 'class' => '4C', 'flag' => './imagenes/flags/4c.webp'],
            ['name' => 'La 16', 'class' => '4C', 'flag' => './imagenes/flags/4c.webp'],
            ['name' => 'La Reserva', 'class' => '5A', 'flag' => './imagenes/flags/5a.webp'],
            ['name' => 'Dreams FC', 'class' => '5B', 'flag' => './imagenes/flags/5b.webp'],
            ['name' => 'Barela Juniors', 'class' => '5C', 'flag' => './imagenes/flags/5c.webp'],
            ['name' => 'Panchas FC', 'class' => '6A', 'flag' => './imagenes/flags/6.webp'],
            ['name' => 'Combinadas FC', 'class' => '6B', 'flag' => './imagenes/flags/6.webp'],
            ['name' => 'Canilleras FC', 'class' => '6C', 'flag' => './imagenes/flags/6.webp']
        ],
        'format_desc_co' => 'notReady',
        'fixture_co' => 'notReady'
    ],

    'volleyball' => [
        'title' => 'Voley',
        'teamsCB' => [
            ['name' => 'Las estrellitas', 'class' => '1A', 'flag' => './imagenes/flags/1a.webp'],
            ['name' => 'Playeros', 'class' => '1B', 'flag' => './imagenes/flags/1b.webpflags/'],
            ['name' => 'Milangas', 'class' => '1C', 'flag' => './imagenes/flags/1c.webp'],
            ['name' => 'Manchester Chipi', 'class' => '2A', 'flag' => './imagenes/flags/2a.webp'],
            ['name' => 'Sacachispa', 'class' => '2C', 'flag' => './imagenes/flags/2c.webp'],
            ['name' => 'Ying Yang', 'class' => '3A', 'flag' => './imagenes/flags/3a.webp'],
            ['name' => 'Tobiova', 'class' => '3C', 'flag' => './imagenes/flags/3c.webp']
        ],
        'format_desc_cb' => 'notReady',
        'fixture_cb' => 'notReady',
        'teamsCO' => [
            ['name' => '¿Y lo malo?', 'class' => '4A', 'flag' => './imagenes/flags/4a.webp'],
            ['name' => 'De Chuecos', 'class' => '4B', 'flag' => './imagenes/flags/4b.webp'],
            ['name' => 'Pituquita Junior', 'class' => '4C', 'flag' => './imagenes/flags/4c.webp'],
            ['name' => 'Gladiadoras', 'class' => '4C', 'flag' => './imagenes/flags/4c.webp'],
            ['name' => 'Los Ganadores', 'class' => '5A', 'flag' => './imagenes/flags/5a.webp'],
            ['name' => 'Barela Juniors', 'class' => '5B', 'flag' => './imagenes/flags/5b.webp'],
            ['name' => '9 de Oro', 'class' => '6A', 'flag' => './imagenes/flags/6.webp'],
            ['name' => 'Los Meeps', 'class' => '6B', 'flag' => './imagenes/flags/6.webp'],
            ['name' => 'Los Gurú', 'class' => '6C', 'flag' => './imagenes/flags/6.webp']
        ],
        'format_desc_co' => 'notReady',
        'fixture_co' => 'notReady'
    ],

    'handball' => [
        'title' => 'Handball',
        'teamsCB' => [
            ['name' => 'Gladiadorcitos', 'class' => '1A', 'flag' => './imagenes/flags/1a.webp'],
            ['name' => 'Balón mano', 'class' => '1B', 'flag' => './imagenes/flags/1b.webp'],
            ['name' => 'Betwarriors', 'class' => '1C', 'flag' => './imagenes/flags/1c.webp'],
            ['name' => 'La Chineta', 'class' => '2A', 'flag' => './imagenes/flags/2a.webp'],
            ['name' => 'Nouhands', 'class' => '2B', 'flag' => './imagenes/flags/2b.webp'],
            ['name' => 'Las Garras', 'class' => '2C', 'flag' => './imagenes/flags/2c.webp'],
            ['name' => 'Los Cortacorrientes', 'class' => '3B', 'flag' => './imagenes/flags/3b.webp']
        ],
        'format_desc_cb' => 'notReady',
        'fixture_cb' => 'notReady',
        'teamsCO' => [
            ['name' => 'La Grise', 'class' => '4A', 'flag' => './imagenes/flags/4a.webp'],
            ['name' => 'Los Guerreros', 'class' => '4B', 'flag' => './imagenes/flags/4b.webp'],
            ['name' => 'Nouhands', 'class' => '5A', 'flag' => './imagenes/flags/5a.webp'],
            ['name' => 'Cualquiera', 'class' => '5B', 'flag' => './imagenes/flags/5b.webp'],
            ['name' => 'Bomba Arabic', 'class' => '6B', 'flag' => './imagenes/flags/6.webp']
        ],
        'format_desc_co' => 'notReady',
        'fixture_co' => 'notReady'
    ],

    'basketball' => [
        'title' => 'Básquet',
        'teamsCB' => [
            ['name' => 'Lanzadores Galácticos', 'class' => '1B', 'flag' => './imagenes/flags/1b.webp'],
            ['name' => 'Los Picantes', 'class' => '1C', 'flag' => './imagenes/flags/1c.webp'],
            ['name' => 'Los pibes de la mata', 'class' => '2A', 'flag' => './imagenes/flags/2a.webp'],
            ['name' => 'Jorgitos', 'class' => '2B', 'flag' => './imagenes/flags/2b.webp'],
            ['name' => 'La Mata', 'class' => '2C', 'flag' => './imagenes/flags/2c.webp'],
            ['name' => 'Bull Dogs', 'class' => '3B', 'flag' => './imagenes/flags/3b.webp'],
            ['name' => 'Los Truenos', 'class' => '3C', 'flag' => './imagenes/flags/3c.webp']
        ],
        'format_desc_cb' => 'notReady',
        'fixture_cb' => 'https://challonge.com/es/4wi3qw7o/module',
        'teamsCO' => [
            ['name' => 'Los Qué', 'class' => '4A', 'flag' => './imagenes/flags/4a.webp'],
            ['name' => 'Las bostas Celtas', 'class' => '4B', 'flag' => './imagenes/flags/4b.webp'],
            ['name' => 'El Fútbol', 'class' => '5A', 'flag' => './imagenes/flags/5a.webp'],
            ['name' => 'Choco y Sus Secuases', 'class' => '5B', 'flag' => './imagenes/flags/5b.webp'],
            ['name' => 'La Banda de la Mopa', 'class' => '5C', 'flag' => './imagenes/flags/5c.webp'],
            ['name' => 'Cubículos', 'class' => '6B', 'flag' => './imagenes/flags/6.webp'],
            ['name' => 'Puro Huevo', 'class' => '6C', 'flag' => './imagenes/flags/6.webp']
        ],
        'format_desc_co' => 'notReady',
        'fixture_co' => 'https://challonge.com/es/406zz2py/module'
    ]
];

// Obtener el deporte seleccionado
$sport = isset($_GET['sport']) && isset($sportData[$_GET['sport']]) ? $_GET['sport'] : '404';
$sportData = $sportData[$sport];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <title><?php echo $sportData['title']; ?></title>
</head>
<body>

<?php
$cantidadEquipos = count($sportData['teamsCO']);
$columnas = 4;
$filas= ceil($cantidadEquipos/$columnas);
?>
    <h2 id="deporte"><?php echo $sportData['title']; ?></h2>
    <div class="dep_div"></div>
    
    <h3 class="dep_ciclo">(Ciclo Básico)</h3>
    <div class="dep_team container">
        <?php foreach ($sportData['teamsCB'] as $team): ?>
            <div class="dep_team" style="">
                <img src="<?php echo $team['flag']; ?>" alt="país">
                <p class="dep_team_name"><?php echo $team['name']; ?></p>
                <p class="dep_team_curso">(<?php echo $team['class']; ?>)</p>
            </div>
        <?php endforeach; ?>
    </div>

    <p class="info_torneo"><?php echo $sportData['format_desc_cb']; ?></p>
    <iframe src="<?php echo $sportData['fixture_cb']; ?>" width="100%" height="500" frameborder="0" scrolling="auto" allowtransparency="true"></iframe>

    <div class="dep_div"></div>
    <div class="dep_div"></div>

    <h3 class="dep_ciclo">(Ciclo Orientado)</h3>
    <div class="dep_teams container">
    <?php foreach ($sportData['teamsCO'] as $team): ?>
        <div class="dep_team">
            <img src="<?php echo $team['flag']; ?>" alt="país">
            <p class="dep_team_name"><?php echo $team['name']; ?></p>
            <p class="dep_team_curso">(<?php echo $team['class']; ?>)</p>
        </div>
    <?php endforeach; ?>
</div>
    <p class="info_torneo"><?php echo $sportData['format_desc_co']; ?></p>
    <iframe src="<?php echo $sportData['fixture_co']; ?>" width="100%" height="500" frameborder="0" scrolling="auto" allowtransparency="true"></iframe>
</body>
</html>