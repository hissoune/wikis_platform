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
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
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
              <a class="nav-link" href="index.php">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?action=logout">
                <span class="menu-title">log out</span>
                <i class="mdi mdi-home menu-icon"></i>
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
           
            <div class="modal fade" id="addCategoryModal" tabindex="-1" role="dialog" aria-labelledby="addCategoryModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addCategoryModalLabel">Add Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Add your form elements for adding a category here -->
        <form id="addCategoryForm" action="index.php?action=add_cat" method="post">
          <div class="form-group">
            <label for="categoryName">wiki tittle</label>
            <input type="text" class="form-control" id="categoryName" placeholder="Enter category name" name="cat_nam" required>
          </div>
          <div class="form-group">
            <label for="categoryName">content</label>
            <textarea type="text" class="form-control" id="categoryName" placeholder="Enter category name" name="cat_nam" required> </textarea>
          </div>
          <div class="form-group">
            <label for="categoryName">Category Name</label>
            <input type="text" class="form-control" id="categoryName" placeholder="Enter category name" name="cat_nam" required>
          </div>
          <div class="form-group">
            <label for="categoryName">Category Name</label>
            <input type="text" class="form-control" id="categoryName" placeholder="Enter category name" name="cat_nam" required>
          </div>
          <div class="form-group">
            <label for="categoryName">Category Name</label>
            <input type="text" class="form-control" id="categoryName" placeholder="Enter category name" name="cat_nam" required>
          </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" >Add Category</button>
      </div>
        </form>
      </div>
     
    </div>
  </div>
</div>
            <div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div id="defult">
            <button class="btn btn-success p-2 px-4 my-1" data-toggle="modal" data-target="#addCategoryModal">Add</button>
                <table class="table table-bordered border-dark shadow">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Author</th>
                            <th>Category</th>
                            <th>Image Filename</th>
                            <th>Created At</th>
                            <th>Archive</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($wikis as $wiki) { ?>
                            <tr >
                                <td class="col-md-2"><?=$wiki->getTitle();?></td>
                                <td class="col-md-2"><a href="">view content</a></td>
                                <td class="col-md-2"><?=$wikisDAO->getAuthernam_byId($wiki->getAuthorId());?></td>
                                <td class="col-md-1"><?=$wikisDAO->getCategorynam_byId($wiki->getCategoryId());?></td>
                                <td class="col-md-1"><?=$wiki->getImageFilename();?></td>
                                <td class="col-md-1"><?=$wiki->getCreatedAt();?></td>
                                <td class="col-md-1">
                                    <a class="btn btn-primary rounded p-2" href="index.php?action=archiv_wiki&id=<?=$wiki->getId();?>">modify</a>
                                    <a class="btn btn-danger rounded p-2" href="index.php?action=archiv_wiki&id=<?=$wiki->getId();?>">delet</a>
                                </td>
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
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

    

    
  </body>
</html>