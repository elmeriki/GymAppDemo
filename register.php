<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<fieldset>
<legend>
REGISTRATION 
</legend>
<form action="save.php" method="post">
<input type="text" name="name" placeholder="Enter Name">
<input type="email" name="email" placeholder="Enter Email">
<input type="number" name="phone" placeholder="Enter Phone">
<input type="text" name="home_address" placeholder="Enter Home_ADdress">
<select name="select_membership" id="select_membership">
<option value="#">Choose Membership</option>
<option value="gold">GOLD</option>
<option value="silver">SILVER</option>
<option value="local">LOCAL</option>
</select>
<input type="text" name="amount_paid" placeholder="Enter Amount to Pay">
<input type="password" name="pass" placeholder="Create_Password">
<input type="submit" value="Send">
</form>
</fieldset>
</body>
</html>