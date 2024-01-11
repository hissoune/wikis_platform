<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>log in </title>
  <!-- Bootstrap CSS CDN -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="APP\view\dashboard_admin\assets\vendors\mdi\css\materialdesignicons.min.css">
  <link rel="stylesheet" href="APP\view\dashboard_admin\assets\vendors\css\vendor.bundle.base.css">
  <link rel="stylesheet" href="APP\view\dashboard_admin\assets\css\style.css">
  <!-- End of dashboard styles -->
</head>
<body>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title text-center">log in </h4>
          <form action="index.php?action=log_in" method="POST">
           
            <div class="form-group">
              <label for="email">Email address</label>
              <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" placeholder="Enter your password" name="pass">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Add Wiki Form -->


</div>


<!-- Bootstrap JS CDN -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="APP\view\dashboard_admin\assets\vendors\js\vendor.bundle.base.js"></script>
  <script src="APP\view\dashboard_admin\assets\vendors\chart.js\Chart.min.js"></script>
  <script src="APP\view\dashboard_admin\assets\js\jquery.cookie.js" type="text/javascript"></script>
  <script src="APP\view\dashboard_admin\assets\js\off-canvas.js"></script>
  <script src="APP\view\dashboard_admin\assets\js\hoverable-collapse.js"></script>
  <script src="APP\view\dashboard_admin\assets\js\misc.js"></script>
  <script src="APP\view\dashboard_admin\assets\js\dashboard.js"></script>
  <script src="APP\view\dashboard_admin\assets\js\todolist.js"></script>
  <!-- End of your home page code -->
</body>
</html>
