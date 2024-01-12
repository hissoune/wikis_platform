<?php 

class tags_controler {
    
    public  static function get_tags(){
        $tagsDAO= new tagsDAO();
       $tags = $tagsDAO->GetAlltags();
       require 'APP\VIEW\dashboard_admin\tags\tags_management.php';
    }

    public static function AddTag(){
        extract($_POST);
        $ntag= new Tag('',$tag_nam);
        $tagsDAO= new tagsDAO();
        $tagsDAO->Addtag($ntag);
     header('location:index.php?action=ges_tags');

    }
    public  static function get_tags_toselect(){
        $tagsDAO= new tagsDAO();
       $tags = $tagsDAO->GetAlltags();
       return $tags;
    }
    public static function statistctags(){
        $tagsDAO= new tagsDAO();
        $tags = $tagsDAO->statistctags();
        return $tags;   
    }
}