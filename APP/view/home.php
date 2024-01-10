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
    <!-- Wiki Section -->
    
    <!-- Search Form -->
    <div class="col-md-4">
      <h2>Search</h2>
      <form>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search...">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Search</button>
      </form>
    </div>
  </div>
</div>

<div class="container-fluid row">
                    
                    <!-- Content Row -->
                    <div class="col-4">
                    <div class="row">

                        <!-- First Column -->
                        <div class="col-lg-12">

                            <!-- Custom Text Color Utilities -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary"> Les wikis récents </h6>
                                </div class="card-body ">
                                <?php foreach($wikis as $wiki){?>
                                    <div class=" mb-3">
                                       <div class="card">
                                        <div class="card-body">
                                        <h5 class="card-title"><a class="nav-link" href="index.php?action=fetch_wiki"><?=$wiki->getTitle();?></a></h5>
                                          <p class="card-text"><?=$wiki->getContent();?></p>
                                      <p class="card-text">Created At: <?=$wiki->getCreatedAt();?></p>
                    </div>
                </div>
            </div>
            <hr>

                                    <?php }?>
                                <div>

                                </div>
                                
                                        
                                    </div>
                                    <hr>
                            
                            </div>
                            
                            <!-- Custom Font Size Utilities -->


                        </div>
                        </div>
                           
                        <!-- Second Column -->
                        <div class="col-lg-4">

                            <!-- Background Gradient Utilities -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Tous les wikis
                                    </h6>
                                </div>
                                <div class="card-body">
                                <?php foreach($allwikis as $wiki){?>
                                    <div class=" mb-3">
                                       <div class="card">
                                        <div class="card-body">
                                        <h5 class="card-title"><a class="nav-link" href="index.php?action=fetch_wiki"><?=$wiki->getTitle();?></a></h5>
                                          <p class="card-text"><?=$wiki->getContent();?></p>
                                      <p class="card-text">Created At: <?=$wiki->getCreatedAt();?></p>
                    </div>
                </div>
            </div>
            <hr>

                                    <?php }?>
                                    
                                </div>
                            </div>

                        </div>

                        <!-- Third Column -->
                        <div class="col-lg-4">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Les catégories récents</h6>
                                </div>
                                <div class="card-body">
                                <?php foreach($wikis as $wiki){?>
                                    <p class="text-xs"><?=$wikisDAO->getCategorynam_byId($wiki->getCategoryId());?></p>
                                    <?php }?>
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
