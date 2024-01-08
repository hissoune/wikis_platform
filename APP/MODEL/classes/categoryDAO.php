<?php 
include 'APP\MODEL\classes\categoriesclass.php';

class  CategoryDAO{

    private $db;

   

    public function __construct(){
        $this->db = DatabaseConnection::getInstance()->getConnection();
    } 

    public  function GetAllCategories() {
        $query = "SELECT * from categories ";
        $stmt =  $this->db->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $categories = array();
        foreach ($result as $row) {
            $category = new category($row['id'],$row['name'] );
            $categories[] = $category;
        
    }
    return $categories;
    }
}