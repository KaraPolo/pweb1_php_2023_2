<?php
    include './db.class.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $db = new DB();
    $db->conn();

    $dados = $db->select("aluno");
    foreach($dados as $item){
        echo $item->nome ." - ". $item->cpf;
    }

    $dadosAluno = [
        'nome'=>"Amanda",
        'cpf'=>"5454654665",
        'telefone'=>"6554465464",
    ];

  //  $db->insert("aluno", $dadosAluno);

 //   var_dump($dados)
?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">CPF</th>
      <th scope="col">Telefone</th>

    </tr>
  </thead>
  <tbody>
  <?php
   foreach($dados as $item){
    echo "<tr>";
    echo"<th scope='row'>$item->id</th>";
    echo"<td>$item->nome</td>";
    echo"<td>$item->cpf</td>";
    echo"<td>$item->telefone</td>";
    echo"</tr>";
   }
?>
  </tbody>
</table>
</body>
</html>