<?php
require 'db.php';

// get form data if submit button was clicked

if(isset($_POST['submit_update_chosen_service_info'])) {
    $service_id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $service_title = filter_var($_POST['service_title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $services_description = filter_var($_POST['services_description'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $service_price = filter_var($_POST['service_price'], FILTER_SANITIZE_NUMBER_INT);
    $service_time = filter_var($_POST['service_time'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    

        $update_chosen_service_query = "UPDATE services_chosen SET service_title = '$service_title', services_description = '$services_description', service_price = '$service_price', service_time = '$service_time' WHERE id = $service_id;";

        $update_chosen_service_result = mysqli_query($conn, $update_chosen_service_query);
        // echo  $hours_900_am;

        // print_r($update_stylist_info_query);
        if(!mysqli_errno($conn)) {
            // redirect to manage users page with success message
            // $_SESSION['add-user-success'] = "New user $firstname $lastname added successfully";
            header('location: ../services_chosen_edit.php');
            die();
        }
} else {
    header('location: ../admin.php');
    die();
}
