<?php 

class category_control {
    
    public  static function get_categories(){
        $categoryDAO= new CategoryDAO();
       $categorys = $categoryDAO->GetAllCategories();
       require 'APP\view\dashboard_admin\gestion_categories.php';
    }
}