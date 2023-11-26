<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get">
        <label for="username">username</label>
        <input type="text" name="username" placeholder="enter username">
        <label for="userpassword">userpassword</label>
        <input type="password" name="userpassword" placeholder="enter userpassword">
        <label for="balance">your balance:</label>
        <input type="number" name="balance">
        <button type="submit">submit</button>
    </form>
    <form action="index.php" method="get">
        <label for="item">item you want:</label>
        <input type="text" name="item">
        <label for="quantity">quantity:</label>
        <input type="number" name="quantity">
    </form>     
</body>
</html>

<?php
   $user_name = $_GET["username"];
   $user_password = $_GET["userpassword"]
   $user_balance = $_GET["balance"]
   $user_item = $_GET["item"]
   $user_quantity = $_GET["quantity"]
   $cash = 500
   if($user_balance<=$cash){
    echo "not enough money in your account you need to recharge"
   }
   $user_rem_balance = $user_balance - 300
   echo "hello {$user_name} ,your {$user_item} in {$user_quantity} quantity will be ready in a few <br>"
   echo "your balance is {$user_rem_balance}" 
?>