<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="APP\view\dashboard_admin\assets\vendors\mdi\css\materialdesignicons.min.css">
    <link rel="stylesheet" href="APP\view\dashboard_admin\assets\vendors\css\vendor.bundle.base.css">
    
    <link rel="stylesheet" href="APP\view\dashboard_admin\assets\css\style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="APP\view\dashboard_admin\assets\images\favicon.ico" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/purple-bootstrap-admin-template/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/purple-bootstrap-admin-template/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="APP\view\dashboard_admin\dashbord.php"><img src="APP\view\dashboard_admin\assets\images\logo.svg" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="APP\view\dashboard_admin\dashbord.php"><img src="APP\view\dashboard_admin\assets\images\logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="search-field d-none d-md-block">
            <form class="d-flex align-items-center h-100" action="#">
              <div class="input-group">
                <div class="input-group-prepend bg-transparent">
                  <i class="input-group-text border-0 mdi mdi-magnify"></i>
                </div>
                <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
              </div>
            </form>
          </div>
         
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            
          <li class="nav-item">
              <a class="nav-link" href="index.php?action=admin">
                <span class="menu-title">statistique</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>

            <li class="nav-item ">
              <a class="nav-link" href="index.php?action=ges_cat" id="link">
                <span class="menu-title">Gestion Des Category</span>
                <i class="mdi mdi-medical-bag menu-icon"></i>
              </a>
            </li>

            <li class="nav-item ">
              <a class="nav-link" href="index.php?action=ges_tags">
                <span class="menu-title">Gestion Des Tags</span>
                <i class="mdi mdi-tag-outline menu-icon"></i>
              </a>
              </li>

            <li class="nav-item  ">
              <a class="nav-link" href="index.php?action=ges_wikis">
                <span class="menu-title">Gestion Des Wikis</span>
                <i class="mdi mdi-book-outline menu-icon"></i>
              </a>
            </li>

           
            
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Dashboard
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>

            <div id="defult">
              <table class="table table-bordered border-dark shadow">
                <thead>
                  <tr>
                    <td>title</td>
                    <td>content</td>
                    <td>author</td>
                    <td>category</td>
                    <td>image_filename</td>
                    <td>created_at</td>
                    <td>is archieved</td>
                    <td>archive</td>
                   
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($wikis as $wiki ){ ?>
                  <tr>
                    <td><?=$wiki->getTitle();?></td>
                    <td class="col-md-2"><a href="">view content</a></td>
                    <td><?=$wikiss_control->getauthornam($wiki->getAuthorId());?></td>
                    <td><?=$wikiss_control->getcatgrnam($wiki->getCategoryId());?></td>
                    <td><?=$wiki->getImageFilename();?></td>
                    <td><?=$wiki->getCreatedAt();?></td>
                    <td><?=$wiki->getis_archived();?></td>
                    <td><a class="btn btn-success rounded p-2" href="index.php?action=restor_wiki&id=<?=$wiki->getId();?>">restor</a></td>
                  </tr>

                   <?php }?>
                </tbody>
              </table>
            </div>
           
           
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
              <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © bootstrapdash.com 2021</span>
              <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin template</a> from Bootstrapdash.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="APP\view\dashboard_admin\assets\vendors\js\vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="APP\view\dashboard_admin\assets\vendors\chart.js\Chart.min.js"></script>
    <script src="APP\view\dashboard_admin\assets\js\jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="APP\view\dashboard_admin\assets\js\off-canvas.js"></script>
    <script src="APP\view\dashboard_admin\assets\js\hoverable-collapse.js"></script>
    <script src="APP\view\dashboard_admin\assets\js\misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="APP\view\dashboard_admin\assets\js\dashboard.js"></script>
    <script src="APP\view\dashboard_admin\assets\js\todolist.js"></script>
    <!-- End custom js for this page -->

    
  </body>
</html>