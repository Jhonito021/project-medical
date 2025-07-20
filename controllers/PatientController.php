<?php
require_once 'models/Patient.php';
require_once 'views/coponements/header.php';

function listPatients() {

    if (isset($_GET['query']) && !empty(trim($_GET['query']))) {
        $query = trim($_GET['query']);
    } else {
        $query = '';
    }
    
    $patients = Patient::search($query);
    require 'views/pages/patients.php';
    require 'views/coponements/footer.php';
}
