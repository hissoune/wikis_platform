<?php 
include 'APP\MODEL\classes\tagsclass.php';

class  tagsDAO{

    private $db;

   

    public function __construct(){
        $this->db = DatabaseConnection::getInstance()->getConnection();
    } 

    public  function GetAlltags() {
        $query = "SELECT * from tags ";
        $stmt =  $this->db->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $tags = array();
        foreach ($result as $row) {
            $tag = new Tag($row['id'],$row['name'] );
            $tags[] = $tag;
        
    }
    return $tags;
    }

    public function Addtag($ntag){
        $query ="INSERT INTO  tags (name) VALUES(:tag_nam) ";
        $stmt = $this->db->prepare($query);

        $tag_nam = $ntag->getName();
        $stmt->bindParam(':tag_nam', $tag_nam);
        $stmt->execute();
    }
    public function statistctags(){
        $query = "SELECT COUNT(id) FROM tags";

    $stmt = $this->db->query($query);
    
    if ($stmt) {
        $result = $stmt->fetchColumn();
        return $result;
    } else {
        return false;
    }
    }
}