<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
<h1> Bonjour 
<?php 
 if(isset($_POST["genre"]))
 {
     if($_POST["genre"] == "Masculin"){
         echo "Monsieur ";
     }else {
         echo "Madame ";
     }
 }

 echo $_POST["nom"];
?>

</h1>

</body>
</html>



