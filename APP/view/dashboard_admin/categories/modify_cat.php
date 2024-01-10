<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Modify Category</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="APP\view\dashboard_admin\assets\vendors\mdi\css\materialdesignicons.min.css">
    <link rel="stylesheet" href="APP\view\dashboard_admin\assets\vendors\css\vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Layout styles -->
    <link rel="stylesheet" href="APP\view\dashboard_admin\assets\css\style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="APP\view\dashboard_admin\assets\images\favicon.ico" />

</head>
<body>

<div class="container mt-5 w-50">
    <h2>Modify Category</h2>
    <form action="index.php?action=modify" method="POST">
        <div class="mb-3">
            <label for="categoryName" class="form-label">Category Name</label>
            <input type="text" class="form-control" id="categoryName" name="cat_nam" value="<?=$categoryname?>">
        </div>
       
        <!-- Remaining form elements from the second page -->
            <input type="number"  name="cat_id" value="<?=$id?>">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
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
<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
