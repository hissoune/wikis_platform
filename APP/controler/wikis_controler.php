<?php 

class wikis_controler {
    
       public  static function get_wikis(){
        $wikisDAO= new wikisDAO();
       $wikis = $wikisDAO->GetAllWIKIS();
       
       require 'APP\VIEW\dashboard_admin\wikis_managment.php';
    }
    public static function get_five_wikis(){
        $wikisDAO= new wikisDAO();
       $wikis = $wikisDAO->Get5wikis();
       $allwikis = $wikisDAO->GetAllWIKIS();
       require 'APP\view\home.php';
    }
    public static function get_wiki_detail(){
        $id=$_GET['id'];
        $wikisDAO= new wikisDAO();
       $wikis = $wikisDAO->getwiki_byid($id);
       require 'APP\view\wiki_detail.php';
    }
    public  static function get_wikis_forauther(){
        $wikisDAO= new wikisDAO();
       $wikis = $wikisDAO->GetAllWIKIS();
       require 'APP\view\dashboard_auther\dashboard_auther.php';
    }
    public static function archive_wiki(){
        $id = $_GET['id'];
        $wikisDAO= new wikisDAO();
        $wikisDAO->archive_wiki($id);
        header('location: index.php?action=ges_wikis');
        
    }
}