<?php include('app.php');

$param =  isset($_GET['page']);
switch ($param) {
    case 'user':
        include('controller/users.php');
        break;
    
    default:
        include('themes/bootstrap/index.php');
        break;
}

?>
