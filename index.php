<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First</title>
</head>
<body>
    
   <form action="script.php" method="POST"> 
     <label for="nom">Nom</label>
     <input type="text" name="nom">
     <p> 
     <label for="sexe">Sexe</label>
     <label for="M">M</label>
     <input type="radio" name="genre" value="Masculin" id="M" >
     <label for="F">F</label>
     <input type="radio" name="genre" value="Feminin" id="F" >
     </p>

     <button type="submit">Ok</button>

     
   </form>

   
</body>
</html>