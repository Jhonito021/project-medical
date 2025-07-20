<?php
require_once 'models/Medecin.php';
require_once 'views/coponements/header.php';

function listMedecins() {
    if (isset($_GET['query']) && !empty(trim($_GET['query']))) {
        $query = trim($_GET['query']);
    } else {
        $query = '';
    }
    $medecins = Medecin::search($query);
    require 'views/pages/medecins.php';
    require 'views/coponements/footer.php';
}
