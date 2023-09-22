<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     require_once 'atividade_professor.php';
     require_once 'atividade_aluno.php';
 
     $aluno01 = new aluno(002, 2005, 'informática','Michelle', 'F');
     $aluno02 = new aluno(003, 2004, 'informática','Danielly', 'D');
     $professor01 = new professor('Renata',1987, 3000, 'F');

     echo "$aluno01->matricula";
     echo "$aluno01->dataNascimento";
     echo "$professor01->nome";
  
     ?>
</body>
</html>