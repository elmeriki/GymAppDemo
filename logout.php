<?php   
session_start();
?>

<?php   
session_destroy();

echo 'Thank you';
header('Refresh: 2; URL = index.php');

?>
