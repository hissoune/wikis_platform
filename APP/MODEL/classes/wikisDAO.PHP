<?php 
include 'APP\MODEL\classes\wikisclass.php';

class  wikisDAO{

    private $db;

   

    public function __construct(){
        $this->db = DatabaseConnection::getInstance()->getConnection();
    } 

    public  function GetAllWIKIS() {
        $query = "SELECT * from wikis order by created_at desc";
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
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $wikis = array();
        foreach ($result as $row) {
            $wiki = new Wiki($row['id'],$row['title'],$row['content'],$row['author_id'],$row['category_id'],$row['image_filename'],$row['created_at'],$row['is_archieved'] );
            $wikis[] = $wiki;
        
    }
          return $wikis;
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

}