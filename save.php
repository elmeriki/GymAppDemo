<?php   
session_start();
?>

<?php   
$_SESSION['name']= $_REQUEST['name'];
$_SESSION['email']= $_REQUEST['email'];
$_SESSION['phone']= $_REQUEST['phone'];
$_SESSION['home_address']= $_REQUEST['home_address'];
$_SESSION['select_membership']= $_REQUEST['select_membership'];
$_SESSION['amount_paid']= $_REQUEST['amount_paid'];
$_SESSION['pass']= $_REQUEST['pass'];

if($_SESSION['name']== "" ||$_SESSION['email'] == "" ||$_SESSION['phone']
 == "" || $_SESSION['home_address'] == "" ||$_SESSION['select_membership']== "" ||
 $_SESSION['amount_paid'] == "" ||$_SESSION['pass']==""

 ){
echo "The system could not save your information";

}else {
    echo 'Your account has been created successfully Please wait....';
   header('Refresh: 2; URL = index.php');
}
?>