<?php
if (isset($_GET['page']) && !empty(trim($_GET['page']))) {
    $page = trim($_GET['page']);
} else {
    $page = 'home';
}


switch ($page) {
    case 'patients':
        require 'controllers/PatientController.php';
        listPatients();
        break;
    case 'medecins':
        require 'controllers/MedecinController.php';
        listMedecins();
        break;
    case 'consultations':
        require 'controllers/ConsultationController.php';
        listConsultations();
        break;
    default:
        require 'views/coponements/header.php';
        require 'views/pages/home.php';
        require 'views/coponements/footer.php';
        break;
}
