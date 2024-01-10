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

    public function AddCat($ncat){
        $query ="INSERT INTO  categories (name) VALUES(:cat_name) ";
        $stmt = $this->db->prepare($query);

        $cat_name = $ncat->getName();
        $stmt->bindParam(':cat_name', $cat_name);
        $stmt->execute();
    }
    public function GetCategry_byid($id){
        $query = "SELECT * from categories where id = $id";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $cat = new category($result['id'],$result['name'] );

       return $cat;
}

public function modif_cat($cat_nam ,$cat_id){
    $query= "UPDATE  categories set name = :cat_name where id = :id";
    $stmt = $this->db->prepare($query);
   
        $stmt->bindParam(':cat_name', $cat_nam, PDO::PARAM_STR);
        $stmt->bindParam(':id', $cat_id ,PDO::PARAM_INT);
        $stmt->execute();
        return true;
}
}