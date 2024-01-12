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

public  static function get_categories_byid(){
         $id=$_GET['id'];
        $categoryDAO= new CategoryDAO();
       $categorys = $categoryDAO->GetCategry_byid($id);
       $categoryname = $categorys->getName();
       $id= $categorys->getId();
       require 'APP\view\dashboard_admin\categories\modify_cat.php';
    }
    public static function modify_cat(){
        extract($_POST);
        $ncat= new Category('',$cat_nam);
       
        $categoryDAO= new CategoryDAO();
       $rrr= $categoryDAO->modif_cat($cat_nam ,$cat_id );
        if($rrr){
            header('location: index.php?action=ges_cat');
        }

    }

    public  static function get_categories_select(){
        $categoryDAO= new CategoryDAO();
       $categorys = $categoryDAO->GetAllCategories();
       return $categorys;
    }

    public  static function get_categories_latest(){
        $categoryDAO= new CategoryDAO();
       $categorys = $categoryDAO->GetCategories_latest();
       return $categorys;
    }
    public static function statistcats(){
        $categoryDAO= new CategoryDAO();
        $categorys = $categoryDAO->statistcats();
        return $categorys;
        
    }

}

