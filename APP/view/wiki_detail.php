

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Home Page</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Include dashboard styles -->
  <link rel="stylesheet" href="APP\view\dashboard_admin\assets\vendors\mdi\css\materialdesignicons.min.css">
  <link rel="stylesheet" href="APP\view\dashboard_admin\assets\vendors\css\vendor.bundle.base.css">
  <link rel="stylesheet" href="APP\view\dashboard_admin\assets\css\style.css">
  <!-- End of dashboard styles -->
</head>
<body>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <a class="navbar-brand" href="#">My Wiki App</a>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php?action=login"><strong>Login</strong></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?action=register"><strong>Register</strong></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?action=if_notuser"><strong>dashboard</strong></a>
      </li>
    </ul>
  </div>
</nav>

<div class="container mt-5">
  <div class="d-flex justify-content-center">
   
   

<div class="container-scroller w-75">
 
<div class="card shadow mb-4 w-100">
        <div class="card-header py-3">
        <h1><?=$wikis->getTitle();?></h1>

        </div>
        
        <div class="card-body ">
        <div class="row">

            
      
            
           
        <div class="card-body">
    <img class="card-img" src="PUBLIC/images/<?=$wikis->getImageFilename();?>" >
    <p class="card-text">Created by: <?=$wikiss_control->getAuthernam_byId($wikis->getAuthorId());?></p>
    <p class="card-text"> <?=$wikis->getContent();?></p>
    <p class="card-text">Created At: <?=$wikis->getCreatedAt();?></p>

    <!-- Display tags in one row -->
    
        <div class="row w-100">
            <!-- Fetch and display tags dynamically from your database -->
            <?php foreach ($tags as $tag): ?>
                <div class="col-3">
                    <label class="form-check-label border" >#<?php echo $tag->getName(); ?></label>
                </div>
            <?php endforeach; ?>
        </div>
    

          </div>
         
      </div>
     
            
          </div>


    
</div>

<!-- Required JS files -->
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
