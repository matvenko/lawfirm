<?php
session_start();
/***************************************
(c) Mate
 ***************************************/
require_once "pages/templates/temp_header.php";
require_once "system/function.php";


$mainPage = isset($_GET["mainPage"]) ? $_GET["mainPage"] : '';


if(isset($_GET["mainPage"]) && $_GET["mainPage"] != 'homepage' && $_GET["mainPage"] != ''){
    echo '<div class="banner-1 banner-'.$_GET["mainPage"].'"></div>';
}else{
    include "pages/".$lang."/banner.php";
}

include "pages/".$lang."/lang.php";



switch ($mainPage)
{
    case "homepage":
        include "pages/".$lang."/homepage.php";
        break;

    case "firmOverview":
        include_once "pages/".$lang."/practice.php";
        break;

    case "archil":
        include_once "pages/".$lang."/archil.php";
        break;

    case "services":
        include_once "pages/".$lang."/services.php";
        break;

    case "immigration":
        include_once "pages/".$lang."/imigration.php";
        break;
		
	case "individuals":
        include_once "pages/".$lang."/individuals.php";
        break;

    case "business":
        include_once "pages/".$lang."/business.php";
        break;
		
	case "estate":
        include_once "pages/".$lang."/estate.php";
        break;
		
	case "accounting":
        include_once "pages/".$lang."/accounting.php";
        break;
		
    case "contact":
        include_once "pages/".$lang."/contact.php";
        break;



    default:
        include "pages/".$lang."/homepage.php";

}

?>

<?php
if($lang!="geo")
{
    ?>
    <script type="text/javascript" src="/js/livechat.js"></script>
    <!-- Chat button will appear here-->
    <?php
}
?>


<?php
require_once "pages/templates/temp_footer.php";
?>