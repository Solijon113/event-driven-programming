<?php

$registration = array(
        'u_first_name' => "'" . $_POST['inp_fname'] . "'",
        'u_last_name	' => "'" . $_POST['inp_lname'] . "'",
        'u_cottage_type' => "'" . $_POST['inp_cottage'] . "'",
        'u_contact' => "'" . $_POST['inp_contact'] . "'",
        'u_email' => "'" . $_POST['inp_email'] . "'",
        'u_date_to_use' => "'" . $_POST['inp_datetouse'] . "'",

);

save($registration);

function save($data)
{
     include('../config/database.php');

     $attributes = implode(", ", array_keys($data));
     $values = implode(", ", array_values($data));
     $query = "INSERT INTO t_bookings ($attributes) VALUES ($values)";

     if($conn->query($query) === TRUE){
        header('location: ../personaldetails.php?success');
     }else{
        header('location: ../personaldetails.php?invalid'); 
     }

     $conn->close();
}