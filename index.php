
 <?php 

session_start();
include('header.php');
include('menu.php');

$action = (isset($_GET['action'])) ? $_GET['action'] : '';
switch ($action) {
    case 'apie':
        include('about.php');
        break;
    case 'aikstele':
        include('court.php');
        break;
    case 'paieska':
        include('search.php');
        break;
    case 'kontaktai':
        include('contact.php');
        break;
    case 'admin':
        include('admin.php');
        break;
    default:
        include('home.php');
        break;
}

include('footer.php');
?>