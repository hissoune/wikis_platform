<?php 
require 'APP\MODEL\config\Connection.php';
require 'APP\controler\category_controler.php';
require 'APP\MODEL\classes\categoryDAO.php';

$cat_control = new category_control();


if (isset($_GET["action"])) {
     $action = $_GET["action"];
  switch($action){
   case 'ges':
   
    $cat_control->get_categories();
       break;
    }
}else{
        require 'APP/view\dashboard_admin\dashbord.php';
    }