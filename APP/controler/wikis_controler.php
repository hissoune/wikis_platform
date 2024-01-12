<?php 

class wikis_controler {
    
       public  static function get_wikis(){
        $wikisDAO= new wikisDAO();
       $wikis = $wikisDAO->GetAllWIKIS();
       return $wikis;
       
    }
    public  static function get_archievd_wikis(){
        $wikisDAO= new wikisDAO();
       $wikis = $wikisDAO->Getarchefedwikis();
       return $wikis;
       
    }

    public static function get_wikifor_athor($userid){
        
        $wikisDAO= new wikisDAO();
        $wikis = $wikisDAO->get_wiki_byatherid($userid);
       return $wikis;
 }
 public static function getauthornam($id){
        
    $wikisDAO= new wikisDAO();
    $authernam = $wikisDAO->getAuthernam_byId($id);
   return $authernam;
}


public static function getcatgrnam($id){
        
    $wikisDAO= new wikisDAO();
    $catgrnam = $wikisDAO->getCategorynam_byId($id);
   return $catgrnam;
}
    public static function get_five_wikis(){
        $wikisDAO= new wikisDAO();
       $wikis = $wikisDAO->Get5wikis();
       
       return $wikis;
    }
    public static function get_wiki_detail($id){
        
        $wikisDAO= new wikisDAO();
       $wikis = $wikisDAO->getwiki_byid($id);
      return $wikis;
    }
   
    public static function archive_wiki(){
        $id = $_GET['id'];
        $wikisDAO= new wikisDAO();
        $wikisDAO->archive_wiki($id);
        header('location: index.php?action=ges_wikis');
        
    }
    public static function getAuthernam_byId($id){
        $wikisDAO= new wikisDAO();
        $authorname= $wikisDAO->getAuthernam_byId($id);
        return $authorname;
    }
    
    public static function restor_wiki(){
        $id = $_GET['id'];
        $wikisDAO= new wikisDAO();
        $wikisDAO->restor_wiki($id);
        header('location: index.php?action=get_archievd');
        
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
    public static function staticwiki(){
        $wikisDAO = new wikisDAO();
        $countwikis =$wikisDAO->statistiquwiki();
        return $countwikis;
    }
    public static function getwikibyid(){
          $id = $_GET['id'];
        $wikisDAO = new wikisDAO();
       $wikis= $wikisDAO->getwiki_byid($id);
       return $wikis;
    }
    public static function gettagsid(){
        $id = $_GET['id'];
      $wikisDAO = new wikisDAO();
     $tagss= $wikisDAO->get_tagsid($id);
     return $tagss;
  }
    

  public static function update() {
    $wiki_title = $_POST['wiki_title'] ?? '';
    $wiki_content = $_POST['wiki_content'] ?? '';
    $author_id = $_POST['author_id'] ?? '';
    $category_id = $_POST['category_id'] ?? '';
    $wiki_id = $_POST['id'] ?? '';

    // Check if a new image file is uploaded
    if (isset($_FILES["image_file"]) && $_FILES["image_file"]["error"] !== UPLOAD_ERR_NO_FILE) {
        $target_dir = "PUBLIC/images/";
        $target_file = $target_dir . basename($_FILES["image_file"]["name"]);
        // Perform additional checks and validations on the uploaded file if needed
        if (move_uploaded_file($_FILES["image_file"]["tmp_name"], $target_file)) {
            $image_wiki = basename($_FILES["image_file"]["name"]);
        } else {
            echo 'Failed to upload the image file.';
            exit;
        }
    } else {
        // No new image uploaded, use the current image filename
        $image_wiki = $_POST['curentimg'] ?? '';
    }

    $wikisDAO = new wikisDAO();
    $wiki = new Wiki('', $wiki_title, $wiki_content, $author_id, $category_id, $image_wiki, '', '');

    if (!empty($_POST['tags'])) {
        $tags = $_POST['tags'];
        $wikisDAO->updat_wiki($wiki, $tags, $wiki_id);
        header('location:index.php?action=auther');
        exit;
    } else {
        echo 'No tags provided.';
    }
}


}