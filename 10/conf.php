<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    
	 <?php
      //Conectar ao banco
        $db = new PDO("mysql:host=localhost;dbname=root;charset=utf8","root","");
 
        //Query / consulta (pegar todas as informações de todos os filmes)
        $resultado = $db->query("SELECT * FROM movies");
        
    
	
	
       
 
       
 
 ?>
 
</body>
</html>