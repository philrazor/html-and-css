<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="country">enter country:</label>
        <input type="text" name="country">
        <input type="submit">
    </form>
</body>
</html>
<?php
//    $players = array("messi","ronaldo","mbappe","haaland");
//    array_push($players , "salah","nunez") ;
//    foreach($players as $player){
//     echo $player ."<br>";
//    }
//    echo count($players);
//    echo $countries["kenya"]."<br>";
   
//    foreach($countries as $key=>$value){
//     echo "{$key} = {$value} <br>" ;
//    }

//    $countries["uganda"] = "kampala";
//    foreach($countries as $key=>$value){
//     echo "{$key} = {$value} <br>" ;
//    }

$countries = array("kenya"=>"nairobi","uganda"=>"kamp nou","tanzania"=>"kinshasa");
$user_country=$countries[$_POST["country"]] ;

echo $user_country;

?>
