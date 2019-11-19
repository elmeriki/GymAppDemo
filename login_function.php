<?php   
session_start();
?>

<?php

function login(){

$phone = $_REQUEST['username'];
$passwww= $_REQUEST['passwd'];

if($phone === $_SESSION['phone'] && $passwww === $_SESSION['pass']){

    echo 'Login is successful';
   header('Refresh: 4; URL = profile.php');

}else {
    echo 'Login is is not correct';
    header('Refresh: 4; URL = index.php');
}



}

login();

?>