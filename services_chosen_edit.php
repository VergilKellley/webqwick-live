<?php
session_start();
require "backend/db.php";
if (!isset($_SESSION["useruid"])) {

    header("Location: index.php");
}
require "backend/db.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing:border-box;
        }
        input {
            padding: 12px 18px;
            font-size: 16px;
        }
        textarea {
            padding: 20px;
        }
        a {
            text-decoration: none;
            line-height: normal !important;
            text-align: center
        }
        .nth-child-bkgd-color:nth-child(even) {
            background-color: #ededed;
        }

        .btn {
            width: 100px;
            padding: 12px 16px;
            border-radius: 5px;
        }

        .btn-blk {
            background-color: #333;
            color: #fff;
        }

        .btn-blk:hover {
            background-color: #fff;
            color: #333;
        }
        .btn-edit {
            background-color: green;
            color: #fff;
        }

        .btn-edit:hover {
            background-color: #fff;
            color: green;
            border: 1px solid green
        }
        .btn-delete {
            background-color: red;
            color: #fff;
        }

        .btn-delete:hover {
            background-color: #fff;
            color: red;
            border: 1px solid red;
        }

        @media (max-width:550px) {
            #form-container {
                flex-direction: column;
            }
        }
    </style>
</head>

<body>
    <section class="stylist_info_container" style="height: 100vh; display:grid; place-items:center;">
        <h3 style='padding-top: 40px'><a href="admin.php">
                Back</a>
        </h3>
        <div id='form-container' style="display: flex; gap:4rem; padding: 20px">
            <form action="backend/add_new_services_info.php" class="stylist_form" method="POST">
                <div>
                    <h2>Add New Service</h2>
                </div>
                <br>
                <div style="display: flex; flex-direction:column; gap:1rem">
                    <label for="service_title">Service Title</label>
                    <input type="text" name="service_title" id="service_title" placeholder="Hair Dye">

                    <label for="services_description">Service Description</label>
                    <textarea name="services_description" id="services_description" cols="30" rows="10"
                        class="stylist_hours_textarea" style="resize: none"
                        placeholder="We only use natural hair dye"></textarea>

                    <label for="service_price">Service Price</label>
                    <input type="text" name="service_price" placeholder="29">

                    <label for="service_time">Service Time</label>
                    <input type="text" name="service_time" placeholder="30 minutes">

                    <button name="submit_new_service_info" class="btn btn-blk">Submit</button>
                </div>
            </form>
            
            <div>
                <div>
                    <h2>Edit Services</h2>
                </div>
                <br>
                <div style=" display: flex; flex-direction:column; gap:1rem; height: 500px; overflow-y:scroll; border:1px solid #333; padding: 10px">
                    <?php
                    $service_info_query = "SELECT * FROM services_chosen ORDER BY service_title ASC";
                    $services_info = mysqli_query($conn, $service_info_query);
                    ?>
                    <?php while ($service = mysqli_fetch_assoc($services_info)) : ?>
                    <div class='nth-child-bkgd-color' style='border:1px solid #333; padding:10px; line-height: 1.5'>
                        <input type="hidden" name="id" value="<?= $service['id'] ?>">
                        <td><span style='font-weight:bold'>Service Title: </span> <?= $service['service_title'] ?></td>
                        <br>
                        <td><span style='font-weight:bold'>Service Description:
                            </span><?= $service['services_description'] ?></td>
                        <br>
                        <br>
                        <td><span style='font-weight:bold'>Service Price: </span><?= $service['service_price'] ?></td>
                        <br>
                        <td><span style='font-weight:bold'>Service Time: </span><?= $service['service_time'] ?></td>
                        <?php
                        echo "<br><br>
                        <div style='display:flex'>
                        <td><a class='btn btn-edit' href='backend/update_chosen_services_info.php?id=" . $service['id'] . "'>Edit</a></td>

                        <form action='backend/delete_chosen_services_info.php' method='POST'>
                                        <button class='btn btn-delete' style='margin-left:20px' id='btn-delete' type='submit' name='submit_service_delete_btn' value='" . $service['id'] . "'> Delete</button>
                                    </form>
                                    </div>
                        </div>";
                        
                        
                        ?>
                        
                                    
                        <?php endwhile ?>
                    </div>
        </div>
        </div>
    </section>
</body>

</html>