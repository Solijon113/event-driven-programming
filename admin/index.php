<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

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
        <img src="./assets/img/logs.png" height="40">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mynavbar">
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
            <a class="nav-link active" href="./index.php"></a>
            </li>
        </ul>
        <form class="d-flex">
            <input onkeyup="search(this.value)" class="form-control me-2" type="text" placeholder="Search student here..">
            <button class="btn btn-primary" type="button">Search</button>
        </form>
        </div>
    </div>
    </nav>


    <div class="container">
        <p class="h1 mt-5">Dashboard</p>
        <p>You can view all recorded data on this dashboard.</p>
    <div class="card mt-3">
    <div class="card-header">List of Guest</div>
    <div class="card-body">
    <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th width="100" style="text-align: center;">Guest</th>
                    <th width="100" style="text-align: center;">Cottage Type</th>
                    <th width="100" style="text-align: center;">Contact</th>
                    <th width="100" style="text-align: center;">Email</th>
                    <th width="100" style="text-align: center;">Date to use</th>
                    <th width="40" style="text-align: center;">Action</th>
                </tr>
            </thead>
            <tbody id="results">

            </tbody>
        </table>
        </div>
        <div class="card-footer"></div>
            -
        </div>
      </div>

        <div class="modal fade" id="view-details">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title">Guest Information</h4>
      </div>

      <div class="modal-body">
        Guest Details..
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-block btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
        
</body>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</html>