<?php
require_once 'models/Consultation.php';
require_once 'views/coponements/header.php';

function listConsultations() {
    if (isset($_GET['query']) && !empty(trim($_GET['query']))) {
        $query = trim($_GET['query']);
    } else {
        $query = '';
    }
    $consultations = Consultation::search($query);
    require 'views/pages/consultations.php';
    require 'views/coponements/footer.php';
}
