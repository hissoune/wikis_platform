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

  <style>
    .serch {
      background-image: url('PUBLIC/images/th.jpg');
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center center;
      width: 100%;
      height: 600px;
      position: relative;
    }

    .serch::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.2));
    }
    
  .search-results {
       max-height: 300px; 
      overflow-y: auto;
    background-color: white; 
    z-index: 1000; 
    border: 1px solid #ccc; 
    padding: 10px; 
    display: none; 
  }
  .navbar {
      background-color: #3498db; /* Set your desired background color */
      box-shadow: 0 4px 2px -2px gray; /* Add a subtle box-shadow */
    }

    .navbar-brand,
    .navbar-nav .nav-link {
      color: #ffffff !important; /* Set the text color to white */
    }

    .navbar-nav .nav-link:hover {
      color: #ecf0f1 !important; /* Change link color on hover */
    }

  </style>

</head>

<body class=" bg-info-subtle ">

  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <a class="navbar-brand fs-2" href="#"><strong class="text-success">Wiki</strong>App</a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php?action=login"><strong>Login</strong></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?action=register"><strong>Register</strong></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?action=if_notuser"><strong>Dashboard</strong></a>
        </li>
      </ul>
    </div>
  </nav>


  <div class="serch ">
    <div class="d-flex justify-content-center ">
      <!-- Wiki Section -->
      <!-- Search Form -->
      <div class="col-md-4 mt-5 ">
        <h2 class="text-white mt-5 ">Search</h2>
        <form action="index.php?action=search" method="GET" class="  ">
          <div class="form-group">
            <input type="text" id="searchInput" class="form-control" placeholder="Search...">
          </div>
          <div class="search-results col-md-12 bg-body  " id="searchResults">
          
          </div>
          <div class="search-results col-md-12 bg-body  " id="noResultsMessage">no result</div>
        </form>
      
      </div>
    </div>
  </div>
 

  <div class="container-fluid row">
   
    <div class="col-4">
      <div class="row">
        <!-- First Column -->
        <div class="col-lg-12">
          <!-- Custom Text Color Utilities -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"> Les wikis récents </h6>
            </div>
            <div class="card-body">
              <?php foreach($wikis as $wiki){?>
              <div class=" mb-3">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title"><a class="nav-link" href="index.php?action=fetch_wiki"><?=$wiki->getTitle();?></a></h5>
                    <p class="card-text"><?=$wikisDAO->getAuthernam_byId($wiki->getAuthorId());?></p>
                    <p class="card-text"><?=$wiki->getContent();?></p>
                    <p class="card-text">Created At: <?=$wiki->getCreatedAt();?></p>
                  </div>
                </div>
                <hr>
              </div>
              <?php }?>
            </div>
            <hr>
          </div>
        </div>
      </div>
    </div>

    <!-- Second Column -->
    <div class="col-lg-4">
      <!-- Background Gradient Utilities -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Tous les wikis</h6>
        </div>
        <div class="card-body">
          <?php foreach($allwikis as $wiki){?>
          <div class=" mb-3">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"><a class="nav-link" href="index.php?action=fetch_wiki"><?=$wiki->getTitle();?></a></h5>
                <p class="card-text"><?=$wikisDAO->getAuthernam_byId($wiki->getAuthorId());?></p>
                <p class="card-text"><?=$wiki->getContent();?></p>
                <p class="card-text">Created At: <?=$wiki->getCreatedAt();?></p>
              </div>
            </div>
            <hr>
          </div>
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
          <?php foreach($categories as $cat){?>
          <p class="text-xs"><?=$cat->getName();?></p>
          <?php }?>
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
  
  
  
  
  
  
  
  <script>
  $(document).ready(function () {
    var resultsContainer = $('#searchResults');
    var noResultsMessage = $('#noResultsMessage');

    $('#searchInput').on('input', function () {
      var searchTerm = $(this).val();

      if (searchTerm.trim() === '') {
        resultsContainer.empty().hide();
        noResultsMessage.hide();
        return;
      }

      $.ajax({
        type: 'GET',
        url: 'index.php?action=search',
        data: { query: searchTerm },
        dataType: 'json',
        success: function (data) {
          resultsContainer.empty();

          if (data.length === 0) {
            noResultsMessage.show();
          } else {
            noResultsMessage.hide();
            $.each(data, function (index, result) {
              var cardHtml = `
                <div class="card mb-3">
                  <div class="card-body">
                    <h5 class="card-title">${result.title}</h5>
                    <p class="card-text">${result.content}</p>
                    <p class="card-text"><small class="text-muted">${result.authername}</small></p>
                  </div>
                </div>
              `;
              resultsContainer.append(cardHtml);
            });

            resultsContainer.show();
          }
        }
      });
    });

    $('#searchInput').on('change', function () {
      if ($(this).val().trim() === '') {
        resultsContainer.empty().hide();
        noResultsMessage.hide();
      }
    });
  });
</script>


</body>

</html>
