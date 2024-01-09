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
}