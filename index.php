<?php
    $htdocs = '/Applications/XAMPP/htdocs/';
    $ignoreFiles = array('..', '.','.DS_Store','index.php', 'sites');

    $sites = array_diff(scandir($htdocs), $ignoreFiles);

    $sites = array_values($sites);

    ob_start();

    header('Content-type: application/json');

    echo json_encode($sites);

    ob_end_flush();
?>