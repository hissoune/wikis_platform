<?php 

class category_control {
    
    public  static function get_categories(){
        $categoryDAO= new CategoryDAO();
       $categorys = $categoryDAO->GetAllCategories();
       require 'APP\VIEW\dashboard_admin\categories\gestion_categories.php';
    }
    public static function AddCat(){
        extract($_POST);
        $ncat= new Category('',$cat_nam);
        $categoryDAO= new CategoryDAO();
     $categoryDAO->AddCat($ncat);
     header('location:index.php?action=ges_cat');

    }
    

}

