<?php 
include 'APP\MODEL\classes\wikisclass.php';

class  wikisDAO{

    private $db;

   

    public function __construct(){
        $this->db = DatabaseConnection::getInstance()->getConnection();
    } 

    public  function GetAllWIKIS() {
        $query = "SELECT * from wikis where is_archieved ='no' order by created_at desc  ";
        $stmt =  $this->db->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $wikis = array();
        foreach ($result as $row) {
            $wiki = new Wiki($row['id'],$row['title'],$row['content'],$row['author_id'],$row['category_id'],$row['image_filename'],$row['created_at'],$row['is_archieved'] );
            $wikis[] = $wiki;
        
    }
    return $wikis;
}

public  function Getarchefedwikis() {
    $query = "SELECT * from wikis where is_archieved ='yes' order by created_at desc  ";
    $stmt =  $this->db->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $wikis = array();
    foreach ($result as $row) {
        $wiki = new Wiki($row['id'],$row['title'],$row['content'],$row['author_id'],$row['category_id'],$row['image_filename'],$row['created_at'],$row['is_archieved'] );
        $wikis[] = $wiki;
    
}
return $wikis;
}

public function statistiquwiki(){
    $query = "SELECT COUNT(id) FROM wikis";

    $stmt = $this->db->query($query);
    
    if ($stmt) {
        $result = $stmt->fetchColumn();
        return $result;
    } else {
        return false;
    }
}

    public  function Get5wikis() {
        $query = "SELECT * from wikis order by created_at desc limit 5";
        $stmt =  $this->db->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $wikis = array();
        foreach ($result as $row) {
            $wiki = new Wiki($row['id'],$row['title'],$row['content'],$row['author_id'],$row['category_id'],$row['image_filename'],$row['created_at'],$row['is_archieved'] );
            $wikis[] = $wiki;
        
    }
          return $wikis;
    }

    public function getwiki_byid($id){
        $query = "SELECT * from wikis where id = $id";
        $stmt =  $this->db->prepare($query);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        
            $wiki = new Wiki($result['id'],$result['title'],$result['content'],$result['author_id'],$result['category_id'],$result['image_filename'],$result['created_at'],$result['is_archieved'] );
            
        
    
          return $wiki;
          
    }
    public function get_tagsid($id) {
        $query = "SELECT tags.id FROM wikis
                  JOIN wikis_tags ON wikis.id = wikis_tags.wiki_id
                  JOIN tags ON wikis_tags.tag_id = tags.id
                  WHERE wikis.id = :id";
    
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    
        $result = $stmt->fetchAll(PDO::FETCH_COLUMN, 0); // Fetch only the first column (tag IDs)
    
        return $result;
    }
    

    public function getAuthernam_byId($id){
        $query = "SELECT users.name  from wikis join users on wikis.author_id = users.id where  author_id=$id";
        $stmt =  $this->db->prepare($query);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['name'];
    }

    public function getCategorynam_byId($id){
        $query = "SELECT categories.name  from wikis join categories on wikis.category_id = categories.id where  category_id=$id";
        $stmt =  $this->db->prepare($query);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['name'];
    }

    
    public function archive_wiki($id){
        $query ="UPDATE  wikis set is_archieved = 'yes' where id = $id";
        $stmt =  $this->db->prepare($query);
        $stmt->execute();
    }

    public function restor_wiki($id){
        $query ="UPDATE  wikis set is_archieved = 'no' where id = $id";
        $stmt =  $this->db->prepare($query);
        $stmt->execute();
    }
    

    public function get_wiki_byatherid($id){
        $query = "SELECT * from wikis where author_id = $id";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $wikis=array();
            foreach($result as $row){
        
            $wiki = new Wiki($row['id'],$row['title'],$row['content'],$row['author_id'],$row['category_id'],$row['image_filename'],$row['created_at'],$row['is_archieved'] );
            $wikis[] = $wiki;
            }
    
          return $wikis;
    }

    function addWikiWithTags($wiki ,$tags) {
       
        $query = "INSERT INTO wikis (title, content, author_id, category_id, image_filename) 
                  VALUES (:title, :content, :author_id, :category_id, :image_filename)";
        $stmt = $this->db->prepare($query);
        $wiki_title=$wiki->getTitle();
        $wiki_content=$wiki->getContent();
        $author_id=$wiki->getAuthorId();
        $category_id=$wiki->getCategoryId();
        $image_filename=$wiki->getImageFilename();
        
        $stmt->bindParam(':title', $wiki_title);
        $stmt->bindParam(':content', $wiki_content);
        $stmt->bindParam(':author_id', $author_id);
        $stmt->bindParam(':category_id', $category_id);
        $stmt->bindParam(':image_filename', $image_filename);
        $stmt->execute();
    
        
        $wikiId = $this->db->lastInsertId();
    
        
        
            foreach ($tags as $tagId) {
                $query = "INSERT INTO wikis_tags (wiki_id, tag_id) VALUES (:wiki_id, :tag_id)";
                $stmt = $this->db->prepare($query);
                $stmt->bindParam(':wiki_id', $wikiId);
                $stmt->bindParam(':tag_id', $tagId);
                $stmt->execute();
            }
        
    }
    
    public function search_data($searchTerm){
        $query = "SELECT wikis.* , users.name as authername from wikis join users on wikis.author_id=users.id WHERE title LIKE :query ";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':query', '%' . $searchTerm . '%', PDO::PARAM_STR);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        // Return the results as JSON
        return $results;
    }
    
    public function delet_wiki($id){
              $query= " DELETE FROM wikis where id = :id ";
              $stmt = $this->db->prepare($query);
              $stmt->bindParam(':id', $id);
              $stmt->execute();

    }

    public function updat_wiki($wiki,$tags,$wikiId){
        $query = "UPDATE wikis set title=:title,content=:content,author_id=:author_id,category_id=:category_id,image_filename=:image_filename,created_at=''  WHERE id= :wiki_id";
$stmt = $this->db->prepare($query);
$wiki_title=$wiki->getTitle();
$wiki_content=$wiki->getContent();
$author_id=$wiki->getAuthorId();
$category_id=$wiki->getCategoryId();
$image_filename=$wiki->getImageFilename();

$stmt->bindParam(':title', $wiki_title);
$stmt->bindParam(':content', $wiki_content);
$stmt->bindParam(':author_id', $author_id);
$stmt->bindParam(':category_id', $category_id);
$stmt->bindParam(':image_filename', $image_filename);
$stmt->bindParam(':wiki_id', $wikiId);
$stmt->execute();






  foreach ($tags as $tagId) {

      $query = "UPDATE  wikis_tags set  tag_id=:tag_id WHERE wiki_id=:wiki_id";
      $stmt = $this->db->prepare($query);
      $stmt->bindParam(':wiki_id', $wikiId);
      $stmt->bindParam(':tag_id', $tagId);
      $stmt->execute();
  }

    }
    
}