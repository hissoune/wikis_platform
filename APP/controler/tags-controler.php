<?php 

class tags_controler {
    
    public  static function get_tags(){
        $tagsDAO= new tagsDAO();
       $tags = $tagsDAO->GetAlltags();
       require 'APP\VIEW\dashboard_admin\tags\tags_management.php';
    }
}