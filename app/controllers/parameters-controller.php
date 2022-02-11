<?php

session_start();

$flux = [
    'Football' => 'https://rmcsport.bfmtv.com/football/',
    'Tennis' => 'https://rmcsport.bfmtv.com/tennis/',
    'basktbal' => 'https://rmcsport.bfmtv.com/basket/',
    'Rugby' => 'https://rmcsport.bfmtv.com/rugby/',
    'Cyclisme' => 'https://rmcsport.bfmtv.com/cyclisme/',
];
if (!isset($_SESSION['Param'])) {
    $_SESSION['Param'] = [
        'nbr' => [9],
        'flux' => [
            'https://rmcsport.bfmtv.com/football/',
            'https://rmcsport.bfmtv.com/tennis/',
            'https://rmcsport.bfmtv.com/basket/',
        ],
        'theme' => ['football', 'tennis', 'baskt-ball'],
        'myDesign' => ['light','dark']
    ];
}

if (!empty($_POST)) {
    $lien = [];
    $sport = [];
    $design = [];
    
    foreach ($flux as $key => $value) {
        if (array_key_exists($key, $_POST)) {
            $lien[] = $_POST[$key];
            $sport[] = $key;
            $design[] = $_POST['myDesign'];
            }
    }

    if (count($lien) != 3) {
        echo 'il faut 3 flux rss';
    } else {
         $_SESSION['Param'] = [            
            'nbr' => $_POST['Article'],
            'flux' => $lien,
            'theme' => $sport,
            'myDesign' => $design
        ];
        setcookie(
            'DA_COOCKIE',
            json_encode($_SESSION['Param']),
            time() + 3600 * 24 * 30,
            '/'
        );
        header('Location: home.php');
        exit();
    }
}