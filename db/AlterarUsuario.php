<?php
if (!lisse($_GET['codigo']))
  header('location:dashboard.php');


  require('db/db.php');
  $CONN = conexao();
  $sql ="USE agenda;";
  $resultado = mysqli_query($sql);
  if (!$resultado)
   die("erro: seleção databese..." . mysqli_erro($CONN). "<br />");

   $codigo = $_GET['codigo'];
   $sql = "SELECT * FROM usuario WHERE codigo=" . $codigo . ";";
   $resultado = mysqli_query($CONN, $sql);
   if(!$resultado)
   die("Erro: " . mysqli_error($CONN) . ,"<br />");

   if(mysqli_num_rows($resultado) <=0)
   mysqli_close($CONN);
   ?>
   <!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Document</title>
   </head>
   <body>
<h1>Alterar Usuário</h1>

<form action="Alterar.php" method="POST">
<input type="hidden" name="codigo"
value="<?=$linha['codigo'] ?>" />
<input type="text" name="nome"
value="<?= $linha['nome']?> /><br />"





       
   </body>
   </html>
   
    