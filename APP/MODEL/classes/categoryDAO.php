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
            $category = new category($row['id'],$row['name'],$row['created_at'] );
            $categories[] = $category;
        
    }
    return $categories;
    }

    public  function GetCategories_latest() {
        $query = "SELECT * from categories order by created_at desc limit 5 ";
        $stmt =  $this->db->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $categories = array();
        foreach ($result as $row) {
            $category = new category($row['id'],$row['name'],$row['created_at'] );
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
        $cat = new category($result['id'],$result['name'],$result['created_at'] );

       return $cat;
}
public function delet_cat($id){
    $query = "DELETE from categorie where id=:id";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
}
public function modif_cat($cat_nam ,$cat_id){
    $query= "UPDATE  categories set name = :cat_name where id = :id";
    $stmt = $this->db->prepare($query);
   
        $stmt->bindParam(':cat_name', $cat_nam, PDO::PARAM_STR);
        $stmt->bindParam(':id', $cat_id ,PDO::PARAM_INT);
        $stmt->execute();
        return true;
}
public function statistcats(){
    $query = "SELECT COUNT(id) FROM categories";

$stmt = $this->db->query($query);

if ($stmt) {
    $result = $stmt->fetchColumn();
    return $result;
} else {
    return false;
}
}
}