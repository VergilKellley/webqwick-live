<?php
require "db.php";

global $stylist_all_info;
global $stylist;
if (isset($_GET['submit_show_available_times'])) {
    $stylist_id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    $stylist_name = filter_var($_GET['stylist_name'], FILTER_SANITIZE_SPECIAL_CHARS);
    $stylist_info_query = "SELECT * FROM stylist_info WHERE id = $stylist_id";
    // $stylist_info_query = "SELECT * FROM stylist_info ORDER BY stylist_name ASC";
    $stylist_all_info = mysqli_query($conn, $stylist_info_query);


        while ($stylist = mysqli_fetch_assoc($stylist_all_info)) 
          if ($stylist['mon_900_am'] || $stylist['mon_915_am'] === 'yes') {
            echo 
            "<label name = 'mon_900_am'>
            <span>" . $stylist_name . "<span>
            <br>
            <input class = 'deselect' type = 'radio' name = 'mon_900_am'>
            9:00 am
            <br>
            <label name = 'mon_915_am'>
            <input class = 'deselect' type = 'radio' name = 'mon_915_am'>
            9:15 am
            ";
          } else {
            echo "<p>9:00 am Not Available</p>";
          }
               
}


    