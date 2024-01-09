<?php 

class wikis_controler {
    
    public  static function get_wikis(){
        $wikisDAO= new wikisDAO();
       $wikis = $wikisDAO->GetAllWIKIS();
       
       require 'APP\VIEW\dashboard_admin\wikis_managment.php';
    }
    public static function archive_wiki(){
        $id = $_GET['id'];
        $wikisDAO= new wikisDAO();
        $wikisDAO->archive_wiki($id);
        header('location: index.php?action=ges_wikis');
        
    }
}