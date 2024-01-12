<?php 
session_start();
require 'APP\MODEL\config\Connection.php';
require 'APP\controler\category_controler.php';
require 'APP\MODEL\classes\categoryDAO.php';
require 'APP\CONTROLER\tags-controler.php';
require 'APP\MODEL\classes\tagsDAO.php';
require 'APP\CONTROLER\wikis_controler.php';
require 'APP\MODEL\classes\wikisDAO.PHP';
require 'APP\controler\User_control.php';
require 'APP\MODEL\classes\UserDAO.php';

$cat_control = new category_control();
$tags_control = new tags_controler();
$wikiss_control = new wikis_controler();
$users_control = new User_control();



if (isset($_GET["action"])) {
     $action = $_GET["action"];
  switch($action){
    case 'admin':
    $councategrs=$cat_control->statistcats();
    $counttags=$tags_control->statistctags();
   $countusers= $users_control->statisticuser();
       $countwikis= $wikiss_control->staticwiki();
        require 'APP\view\dashboard_admin\dashbord.php';

                break;
        case 'auther':
            
         
         
    
        
            require 'APP\VIEW\dashboard_auther\dashboard_auther.php';
            $wikis= $wikiss_control->get_wikifor_athor($userid);

            break;
   case 'ges_cat':
   
    $cat_control->get_categories();
       break;
       case 'add_cat':
        $cat_control->AddCat();
        break;
       case 'delet_cat':
        $cat_control->delet_catt();
        break;
        case 'modify_cat':
            
            $cat_control->get_categories_byid();
            break;
            case 'modify':
                
                $cat_control->modify_cat();
                break;
       case 'ges_tags':
        $tags_control->get_tags();
        break;
        case 'add_tag':
            $tags_control->AddTag();
            break;
        case 'ges_wikis':
            $wikis=$wikiss_control->get_wikis();
            require 'APP\VIEW\dashboard_admin\wikis_managment.php';

            break;
            case 'get_archievd':
                $wikis=$wikiss_control->get_archievd_wikis();
                require 'APP\VIEW\dashboard_admin\archived_wikis.php';
    
                break;
            case 'archiv_wiki':
                $wikiss_control->archive_wiki();
                break;
                case 'restor_wiki':
                    $wikiss_control->restor_wiki();
                    break;
                case 'register':
            require 'APP\view\login\register.php';
                    break;
                    case 'insertUser':
                        $users_control->addUser();
                        break;
                        case 'login':
                            require 'APP\view\login\login.php';
                            break;
                            case 'log_in':
                                $users_control->log_in();
                                break;
                                case 'if_notuser':
                                    $users_control->if_user();
                                    break;
                                    case 'logout':
                                        $users_control->logout();
                                        break;
                                        case 'fetch_wiki':
                                            $id=$_GET['id'];
                                            $tags= $tags_control->get_tags_toselect();

                                           $wikis= $wikiss_control->get_wiki_detail($id);
                                            require 'APP\view\wiki_detail.php';


                                            
                                            break;
                                            case 'add_wiki':
                                                session_start();
                                               $user= $_SESSION['user'];
                                               $userid= $user['id'];
                                              $categories= $cat_control->get_categories_select();
                                               $tags= $tags_control->get_tags_toselect();
                                                require 'APP\VIEW\dashboard_auther\add_wiki.php';
                                                break;

                                                case 'insert_wiki':
                                                    $wikiss_control->insert_wikis();
                                                    break;
                                                    case 'search':
                                                        $wikiss_control->search();

                                                        break;
                                                        case 'delet_wiki':
                                                            $wikiss_control->delet_wiki();
                                                            break;
                                                            case 'modif_wiki':
                                                        
                                                               $wikis= $wikiss_control->getwikibyid();
                                                              
                                                                $categories= $cat_control->get_categories_select();
                                                                $user= $_SESSION['user'];
                                                                $userid= $user['id'];
                                                                $tags= $tags_control->get_tags_toselect();
                                                                $curenttags= $wikiss_control->gettagsid();
                                                        

                                                                $curent_cat=$_GET['catid'];
                                                             require 'APP\VIEW\dashboard_auther\modify_wiki.php';

                                                                break;
                                                                case 'update':
                                                                    $wikiss_control->update();
                                                                    break;
                                    
    }
}else{
    $wikisDAO= new wikisDAO();
    $wikis= $wikiss_control->get_five_wikis();
    $allwikis= $wikiss_control->get_wikis();
    $categories= $cat_control->get_categories_latest();

    require 'APP\VIEW\home.php';
    
        
    }