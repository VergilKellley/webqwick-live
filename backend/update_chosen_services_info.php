<?php
require 'db.php';

// min part 2 min 6:51:10
// fetch stylist data from database if id is set
if (isset($_GET['id'])) {
  $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
  $chosen_service_info_query = "SELECT * FROM services_chosen WHERE id = $id";
  $chosen_service_info_result = mysqli_query($conn, $chosen_service_info_query);
  $chosen_service = mysqli_fetch_assoc($chosen_service_info_result);
} else {
  header('location: ../index.php');
  die();
}
?>

<section class="form_section add_post_form">

    <div class="container form_section_container;"
        style="display:flex;      flex-direction: column; align-items:center;">

        <a href="../stylist_info.php">
            <-- Back</a>
                <h2>Edit <?= $chosen_service['service_title'] ?></h2>

                <div>
                    <div>
                        <form style="text-align: center;" action="update_chosen_service_logic.php"
                            enctype="multipart/form-data" method="POST">

                            <input type="hidden" name="id" value="<?php $id ?>" placeholder="<?= $id ?>">
                            <input style="margin-bottom:1rem" type="hidden" name="id"
                                value="<?= $chosen_service['id'] ?>" />

                            <div style="display: flex; flex-direction:column">
                                <label for="service_title">Service Title</label>
                                <input style="margin-bottom:1rem" type="text" name="service_title" id="stylist_name"
                                    value="<?= $chosen_service['service_title'] ?>" />

                                <br>

                                <label for="services_description">Service Description</label>
                                <textarea style='resize:none' name="services_description" id="services_description" cols="30" rows="10"><?= $chosen_service['services_description'] ?></textarea>
                                <br>
                                <label for="service_price">Price</label>
                                <input style="margin-bottom:1rem" type="text" name="service_price" id="service_price"
                                    value="<?= $chosen_service['service_price'] ?>" />
                                <br>
                                <label for="services_price">Time</label>
                                <input style="margin-bottom:1rem" type="text" name="service_time" id="service_time"
                                    value="<?= $chosen_service['service_time'] ?>" />
                                <button type="submit" name="submit_update_chosen_service_info" class="btn">Update
                                    <?= $chosen_service['service_title'] ?> Info</button>
                            </div>
                        </div>
                    </form>


                    

</section>