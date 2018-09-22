<?php 
$param = $_GET['action'];
switch ($param) {
    case 'login':
        include('themes/bootstrap/login.php');
        break;

    case 'register':
        if($_POST['new']){
            echo $_POST['name'];
        }
        include('themes/bootstrap/register.php');
        break;
    
    case 'dashboard':
        include('themes/bootstrap/dashboard.php');
        break;
    
    case 'change_password':
        include('themes/bootstrap/change-password.php');
        break;
    
    default:
        # code...
        break;
}
?>