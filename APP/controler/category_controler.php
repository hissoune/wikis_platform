<?php 

class category_control {
    
    public  static function get_categories(){
        $categoryDAO= new CategoryDAO();
       $categorys = $categoryDAO->GetAllCategories();
       require 'APP\VIEW\dashboard_admin\categories\gestion_categories.php';
    }
}