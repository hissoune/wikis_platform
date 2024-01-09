<?php 
require 'APP\MODEL\config\Connection.php';
require 'APP\controler\category_controler.php';
require 'APP\MODEL\classes\categoryDAO.php';
require 'APP\CONTROLER\tags-controler.php';
require 'APP\MODEL\classes\tagsDAO.php';
require 'APP\CONTROLER\wikis_controler.php';
require 'APP\MODEL\classes\wikisDAO.PHP';

$cat_control = new category_control();
$tags_control = new tags_controler();
$wikiss_control = new wikis_controler();



if (isset($_GET["action"])) {
     $action = $_GET["action"];
  switch($action){
   case 'ges_cat':
   
    $cat_control->get_categories();
       break;
       case 'add_cat':
        $cat_control->AddCat();
        break;
       case 'delet_cat':
      
        break;
        case 'modify_cat':

            break;
       case 'ges_tags':
        $tags_control->get_tags();
        break;
        case 'add_tag':
            $tags_control->AddTag();
            break;
        case 'ges_wikis':
            $wikiss_control->get_wikis();
            break;
            case 'archiv_wiki':
                $wikiss_control->archive_wiki();
                break;
    }
}else{
        require 'APP/view\dashboard_admin\dashbord.php';
    }