<?php

require "db.php";


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $services_chosen = mysqli_real_escape_string($conn, $_POST['services_chosen']);
    $services_id = mysqli_real_escape_string($conn, $_POST['services_id']);

    foreach ($services_chosen as $service) {
        echo "$service <br>";
      }
}
    
    

