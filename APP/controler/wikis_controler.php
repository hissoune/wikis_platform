<?php 

class wikis_controler {
    
       public  static function get_wikis(){
        $wikisDAO= new wikisDAO();
       $wikis = $wikisDAO->GetAllWIKIS();
       return $wikis;
       
    }
    public static function get_five_wikis(){
        $wikisDAO= new wikisDAO();
       $wikis = $wikisDAO->Get5wikis();
       
       return $wikis;
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

    public static function insert_wikis() {
        $wiki_title = $_POST['wiki_title'] ?? '';
        $wiki_content = $_POST['wiki_content'] ?? '';
        $author_id = $_POST['author_id'] ?? '';
        $category_id = $_POST['category_id'] ?? '';
    
        // Check if "image_file" is set in $_FILES
        if (isset($_FILES["image_file"])) {
            // Handle file upload
            $target_dir = "PUBLIC/images/"; 
            $target_file = $target_dir . basename($_FILES["image_file"]["name"]);
            move_uploaded_file($_FILES["image_file"]["tmp_name"], $target_file);
            $imag_wiki = basename($_FILES["image_file"]["name"]);
        } else {
            $imag_wiki = 'fuuuuuuuu';
        }
    
        // Check if $wikisDAO is defined before using it
        $wikisDAO = new wikisDAO();
        if (isset($wikisDAO)) {
            // Create Wiki object
            $wiki = new Wiki('', $wiki_title, $wiki_content, $author_id, $category_id, $imag_wiki, '', '');
    
            if (!empty($_POST['tags'])) {
                $tags = $_POST['tags'];
                $wikisDAO->addWikiWithTags($wiki, $tags);
                header('location:index.php?action=auther');
                exit; // Ensure to exit after a header redirect
            } else {
                echo 'No tags provided.';
            }
        } else {
            echo 'Error: $wikisDAO is not defined.';
        }
    }
    public static function search(){
        $searchTerm = $_GET['query'] ?? '';
        $wikisDAO = new wikisDAO();
        $results = $wikisDAO->search_data($searchTerm);
    
        // Return the results as JSON
        header('Content-Type: application/json');
        echo json_encode($results);
    }
    
    public static function delet_wiki(){
        $id = $_GET['id'];
        $wikisDAO = new wikisDAO();
        $wikisDAO->delet_wiki($id);

       header('location: index.php?action=auther');

    }
    
}