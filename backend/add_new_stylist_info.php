<?php 
require 'db.php';
if(isset($_POST['submit_new_stylist_info'])){
    $stylist_name = mysqli_real_escape_string($conn, $_POST['stylist_name']);
    $stylist_email = mysqli_real_escape_string($conn, $_POST['stylist_email']);
    $stylist_hours_textarea = mysqli_real_escape_string($conn, $_POST['stylist_hours_textarea']);
    
        $sql = "INSERT INTO stylist_info (stylist_name, stylist_email, stylist_hours_textarea) VALUES ('$stylist_name', '$stylist_email', '$stylist_hours_textarea')";
        $result = mysqli_query($conn, $sql);
        // if($result){
        //     header("location: ../stylist_info.php");
            // echo "<strong>Banners inserted successfully!</strong>";
            // header("location: ../frontend/new_styles.php");
            
        // echo "<script>window.location.href='../../new_styles.php';</script>";
        // exit;
        // } else {
        //     header("location: ../admin.php");
        // //  header("location: ../../new_styles.php");
        //     // echo "something went wrong";
        //     // die(mysqli_error($conn));
        // }

//CREATE STYLIST ID START
$id_query = "SELECT id, stylist_name FROM stylist_info ORDER BY id ASC;";
$id_result = mysqli_query($conn, $id_query);
$id_resultCheck = mysqli_num_rows($id_result);


if ($id_resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($id_result)) {
        $stylist_id = $row['id'];
        $stylist_name = $row['stylist_name'];       
    }

    $id_sql = "INSERT INTO stylist_ids (stylist_id, stylist_name) VALUES ('$stylist_id','$stylist_name')";
        $stylist_id_result = mysqli_query($conn, $id_sql);
        if($stylist_id_result){
            header("location: ../stylist_info.php");
            // echo "<strong>Banners inserted successfully!</strong>";
            // header("location: ../frontend/new_styles.php");
            
        // echo "<script>window.location.href='../../new_styles.php';</script>";
        exit;
        } else {
            header("location: ../stylist_info.php");
        //  header("location: ../../new_styles.php");
            // echo "something went wrong";
            // die(mysqli_error($conn));
        }
}
////////////CREATE STYLIST ID END
}
    