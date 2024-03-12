<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resort Cottage Reservation System</title>

    <script src="./assets/js/search.js"></script>

    <link href="./assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    <style>
        body{
            background-color:#ecf0f1;
        }
        
    </style>

</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="javascript:void(0)">
        <img src="./assets/img/resortlogo3.png" height="40">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mynavbar">
        <ul class="navbar-nav me-auto">
            <li class="nav-item active">
            <a class="nav-link" href="/"></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/"></a>
        </ul>

            </div>
        </div>
    </nav>


    <div class="container">
        <p style="text-align: center;" class="h1 mt-5">Personal Details</p>
    <div class="card mt-3">

    <form action="./models/save.php" method="POST">
    <div class="card-header"></div>
    <div class="card-body">
      <?php
      if (isset($_GET['success'])) {
        ?>
        <div class="alert alert-success">
             <b>Booked Successfully.</b> Thank you!
        </div>
        <hr>
        <?php
      } elseif (isset($_GET['invalid'])) {
        ?>
        <div class="alert alert-danger">
            <b>Existed Application ID</b>. Please try another. Thank you.
        </div>
        <hr>
        <?php
      }
      ?>

<div class="row mt-3">
          <div class="col-md-6">
            <label>First Name : <b class="text-danger">*</b></label>
            <input name="inp_fname"  required type="text" placeholder="Enter first name here.." class="form-control mt-2">
          </div>
          <div class="col-md-6">
            <label>Last Name : <b class="text-danger">*</b></label>
            <input name="inp_lname"  required type="text" placeholder="Enter last name here.." class="form-control mt-2">
          </div>
        </div>
        <div class="row mt-3">
        <div class="col-md-6">
            <label>Rooms : <b class="text-danger">*</b></label>
            <select name="inp_cottage" required class="form-control mt-2">
                <option value="" disabled selected>---SELECT ROOMS---</option>
                <option value="GARNET">BEACH GAZEBO -- ₱900</option>
                <option value="RED">PRIVATEER -- ₱700</option>
                <option value="SAPPHIRE">ISLANDER HUT -- ₱600</option>
                </select>
          </div>
          <div class="col-md-6">
            <label>Contact Number : <b class="text-danger">*</b></label>
            <input name="inp_contact"  required type="text" placeholder="+63.." class="form-control mt-2">
          </div>
          <div class="col-md-6 mt-2">
            <label>Email : <b class="text-danger">*</b></label>
            <input name="inp_contact"  required type="text" placeholder="Enter email here.." class="form-control mt-2">
          </div>
          <div class="col-md-6 mt-2">
            <label>Date to use : <b class="text-danger">*</b></label>
            <input name="inp_datetouse" type="datetime-local" class="form-control mt-2">
          </div>
        </div>
    </div>


    <div class="form-check mb-3">
    <label class="form-check-label">
      <input class="form-check-input" required type="checkbox" name="remember"> I agree the Terms and Condition of this resort.
    </label>
  </div>
    <div class="card-footer">
        <button class="btn btn-success">
             Confirm
          </button>
          </div>
          </form>
        </div>
      </div>
</body>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</html